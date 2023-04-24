<?php

class A {
    public function foo() {}
}
class B extends A {
    public function test() {
        // Different callables using self/parent/static
        $variants = [
            '"self::foo"'            => "self::foo",
            '"parent::foo"'          => "parent::foo",
            '"static::foo"'          => "static::foo",
            '["self", "foo"]'        => ["self", "foo"],
            '["parent", "foo"]'      => ["parent", "foo"],
            '["static", "foo"]'      => ["static", "foo"],
            '["B", "self::foo"]'     => ["B", "self::foo"],
            '["B", "parent::foo"]'   => ["B", "parent::foo"],
            '["B", "static::foo"]'   => ["B", "static::foo"],
            '["B", "A::foo"]'        => ["B", "A::foo"],
            '[$this, "self::foo"]'   => [$this, "self::foo"],
            '[$this, "parent::foo"]' => [$this, "parent::foo"],
            '[$this, "static::foo"]' => [$this, "static::foo"],
            '[$this, "A::foo"]'      => [$this, "A::foo"],
        ];

        echo "==> Test call_user_func\n";
        foreach ($variants as $description => $callable) {
            echo "$description\n";
            call_user_func($callable);
        }
        echo "\n==> Test call_user_func_array\n";
        foreach ($variants as $description => $callable) {
                    echo "$description\n";
            call_user_func_array($callable, []);
        }

        // Also applies to other things performing calls
        echo "\n==> Test array_map\n";
        foreach ($variants as $description => $callable) {
            echo "$description\n";
            array_map($callable, [1]);
        }

        echo "\n==> Test is_callable()\n";
        foreach ($variants as $description => $callable) {
            echo "$description\n";
            var_dump(is_callable($callable));
        }

        echo "\n==> Test callable type hint\n";
        foreach ($variants as $description => $callable) {
            echo "$description\n";
            $this->callableTypeHint($callable);
        }
    }

    public function callableTypeHint(callable $c) {}
}

$b = new B;
$b->test();

