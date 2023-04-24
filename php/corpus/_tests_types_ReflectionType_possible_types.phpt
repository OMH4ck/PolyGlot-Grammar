<?php

$functions = [
    function(): void {},
    function(): int {},
    function(): float {},
    function(): string {},
    function(): bool {},
    function(): array {},
    function(): callable {},
    function(): null {},
    function(): false {},
    function(): true {},
    function(): StdClass {}
];

foreach ($functions as $function) {
    $reflectionFunc = new ReflectionFunction($function);
    $returnType = $reflectionFunc->getReturnType();
    var_dump($returnType->getName());
}
