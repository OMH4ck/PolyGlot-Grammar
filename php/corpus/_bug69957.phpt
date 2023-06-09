<?php

try {
    $divisor = 0;
    $result = 1 / $divisor;
    var_dump($result);
} catch (DivisionByZeroError $t){
    echo "Variable div\n";
    printf("Type: %s\n", get_class($t));
    printf("Message: %s\n", $t->getMessage());
}

try {
    $divisor = 0;
    $result = 1 % $divisor;
    var_dump($result);
} catch (DivisionByZeroError $t){
    echo "\nVariable mod\n";
    printf("Type: %s\n", get_class($t));
    printf("Message: %s\n", $t->getMessage());
}

try {
    $result = 1 / 0;
    var_dump($result);
} catch (DivisionByZeroError $t){
    echo "\nLiteral div\n";
    printf("Type: %s\n", get_class($t));
    printf("Message: %s\n", $t->getMessage());
}

try {
    $result = 1 % 0;
    var_dump($result);
} catch (DivisionByZeroError $t){
    echo "\nLiteral mod\n";
    printf("Type: %s\n", get_class($t));
    printf("Message: %s\n", $t->getMessage());
}

try {
    $result = 1 / 0.0;
    var_dump($result);
} catch (DivisionByZeroError $t){
    echo "\nDouble div\n";
    printf("Type: %s\n", get_class($t));
    printf("Message: %s\n", $t->getMessage());
}

try {
    $result = 1 % 0.0;
    var_dump($result);
} catch (DivisionByZeroError $t){
    echo "\nDouble mod\n";
    printf("Type: %s\n", get_class($t));
    printf("Message: %s\n", $t->getMessage());
}

