<?php
enum Card : string
{
    case HEART = 'H';
}

var_dump(Card::tryFrom('H'));
