<?php
$reflector = new ReflectionFunction("strlen");

var_dump($reflector->getClosureUsedVariables());

$function = function() {
    static $one = 1;
};

$reflector = new ReflectionFunction($function);

var_dump($reflector->getClosureUsedVariables());

$one = 1;
$two = 2;

$function = function() use ($one, $two) {
    static $three = 3;
};

$reflector = new ReflectionFunction($function);

var_dump($reflector->getClosureUsedVariables());

$function = fn() => $three = [$one];

$reflector = new ReflectionFunction($function);

var_dump($reflector->getClosureUsedVariables());

$function = function() use (&$one) {
    static $three = 3;
};

$reflector = new ReflectionFunction($function);

var_dump($reflector->getClosureUsedVariables());
