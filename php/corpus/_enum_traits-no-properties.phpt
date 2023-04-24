<?php

trait Rectangle {
    protected string $shape = "Rectangle";

    public function shape(): string {
        return $this->shape;
    }
}

enum Suit {
    use Rectangle;

    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

