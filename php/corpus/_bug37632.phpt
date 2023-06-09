<?php

class A1
{
    protected function test()
    {
        echo __METHOD__ . "\n";
    }
}

class B1 extends A1
{
    public function doTest(A1 $obj)
    {
        echo __METHOD__ . "\n";
        $obj->test();
    }
}

class C1 extends A1
{
    protected function test()
    {
        echo __METHOD__ . "\n";
    }
}

$b = new B1;
$b->doTest(new C1);

class A2
{
    static protected function test()
    {
        echo __METHOD__ . "\n";
    }
}

class B2 extends A2
{
    static public function doTest(A2 $obj)
    {
        echo __METHOD__ . "\n";
        $obj->test();
    }
}

class C2 extends A2
{
    static protected function test()
    {
        echo __METHOD__ . "\n";
    }
}

B2::doTest(new C2);

/* Right now Ctor's cannot be made protected when defined in a ctor. That is
 * we cannot decrease visibility.
 *

interface Ctor
{
    function __construct($x);
}

class A3 implements Ctor
{
    protected function __construct()
    {
        echo __METHOD__ . "\n";
    }
}

class B3 extends A3
{
    static public function doTest()
    {
        echo __METHOD__ . "\n";
        new C3;
    }
}

class C3 extends A3
{
    protected function __construct()
    {
        echo __METHOD__ . "\n";
    }
}

B3::doTest();

*/

class A4
{
    protected function __construct()
    {
        echo __METHOD__ . "\n";
    }
}

class B4 extends A4
{
    static public function doTest()
    {
        echo __METHOD__ . "\n";
        new C4;
    }
}

class C4 extends A4
{
    protected function __construct()
    {
        echo __METHOD__ . "\n";
    }
}

B4::doTest();

?>
