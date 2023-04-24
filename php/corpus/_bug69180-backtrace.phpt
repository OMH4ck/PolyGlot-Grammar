<?php

trait T {
    public function __get($name): string {
        var_dump(__METHOD__);
        print_r(array_map(fn ($v) => $v['class'] . '::' . $v['function'], debug_backtrace()));
        
        return '=' . $name;
    }
}

class Model {
    use T {
        T::__get as private __t_get;
    }
    
    public function __get($name): string {
        var_dump(__METHOD__);
        return $this->__t_get($name);
    }
}

class X extends Model {}

class Y extends Model {
    public function __get($name): string {
        var_dump(__METHOD__);
        return parent::__get($name);
    }
}

class Z extends Model {
    private function __x_get($name): string {
        var_dump(__METHOD__);
        return parent::__get($name);
    }
    
    public function __get($name): string {
        var_dump(__METHOD__);
        return $this->__x_get($name);
    }
}

class P extends Model {
    private function __t_get($name): string {
        var_dump(__METHOD__);
        return parent::__get($name);
    }
    
    public function __get($name): string {
        var_dump(__METHOD__);
        return $this->__t_get($name);
    }
}

$m = new X();
$m->a;

echo "\n";

$m = new Y();
$m->a;

echo "\n";

$m = new Z();
$m->a;

echo "\n";

$m = new P();
$m->a;

