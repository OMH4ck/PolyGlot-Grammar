<?php
class drv {
    public $obj;

    function func1() {
        echo "func1(): {$this->obj->i}\n";
    }

    function close() {
        echo "close(): {$this->obj->i}\n";
    }
}

class A {
    public $i;

    function __construct($i) {
        $this->i = $i;

    }

    function __call($method, $args) {
        $drv = myserv::drv();

        $drv->obj = $this;

        echo "before call $method\n";
        print_r($this);
        call_user_func_array(array($drv, $method), $args);
        echo "after call $method\n";

        // Uncomment this line to work without crash
//		$drv->obj = null;
    }

    function __destruct() {
        echo "A::__destruct()\n";
        $this->close();
    }
}

class myserv {
    private static $drv = null;

    static function drv() {
        if (is_null(self::$drv))
            self::$drv = new drv;
        return self::$drv;
    }
}

$obj1 = new A(1);
$obj1->func1();

$obj2 = new A(2);
unset($obj1);
$obj2->func1();
