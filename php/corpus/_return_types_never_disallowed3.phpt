<?php

function foo(): never {
    if (false) {
        throw new Exception('bad');
    }
}

foo();
