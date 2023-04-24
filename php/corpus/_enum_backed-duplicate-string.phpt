<?php

enum Suit: string {
    case Hearts = 'H';
    case Diamonds = 'D';
    case Clubs = 'C';
    case Spades = 'H';
}

try {
    var_dump(Suit::Hearts);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    var_dump(Suit::Hearts);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    var_dump(Suit::from(42));
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    var_dump(Suit::tryFrom('bar'));
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

