<?php
function gen(){
    $g = yield;
    $g->send($y);
}
$gen=gen();
try {
    $gen->send($gen);
}catch(y) {
}
