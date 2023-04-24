<?php
echo "*** Testing ReflectionFunction::getClosure() : basic functionality ***\n";

function foo()
{
    var_dump( "Inside foo function" );
}

function bar( $arg )
{
    var_dump( "Arg is " . $arg );
}

$func = new ReflectionFunction( 'foo' );
$closure = $func->getClosure();
$closure();

$func = new ReflectionFunction( 'bar' );
$closure = $func->getClosure();
$closure( 'succeeded' );

