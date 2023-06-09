<?php
class A {
    use T2 { t2method as Bmethod; }
}

class C extends A {
    public function Bmethod() {
        debug_print_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);
    }
}

trait T2 {
    public function t2method() {
        debug_print_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);
    }
}

$a = new A();
$a->Bmethod();
$a->t2method();

$c = new C();
$c->Bmethod();
$c->t2method();
