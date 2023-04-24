<?php

trait Rectangle {
    public static function cases(): array {
        return [];
    }
}

enum Suit {
    use Rectangle;

    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

var_dump(Suit::cases());

