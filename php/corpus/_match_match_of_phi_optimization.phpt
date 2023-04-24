<?php
$x = true;
match ($x and true or true) {
    false => $x
};
