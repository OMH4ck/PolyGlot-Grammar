<?php

trait Rectangle {
    public function __construct() {}
}

enum Suit {
    use Rectangle;

    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

