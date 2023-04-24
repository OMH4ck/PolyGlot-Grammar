<?php

enum Suit: int {
    case Hearts = 2;
    case Diamonds = 1;
    case Clubs = 4;
    case Spades = 3;
}

var_dump(Suit::cases());

