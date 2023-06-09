<?php
echo "*** Testing ReflectionMethod::getClosure() : error conditions ***\n";

class StaticExample
{
    static function foo()
    {
        var_dump( "Static Example class, Hello World!" );
    }
}

class Example
{
    public $bar = 42;
    public function foo()
    {
        var_dump( "Example class, bar: " . $this->bar );
    }
}

// Initialize classes
$class = new ReflectionClass( 'Example' );
$staticclass = new ReflectionClass( 'StaticExample' );
$method = $class->getMethod( 'foo' );
$staticmethod = $staticclass->getMethod( 'foo' );
$object = new Example();
$fakeobj = new StdClass();

echo "\n-- Testing ReflectionMethod::getClosure() function with invalid object --\n";
try {
        var_dump( $method->getClosure( $fakeobj ) );
} catch( Exception $e ) {
        var_dump( $e->getMessage() );
}

