<?php

abstract class L1{
abstract function m3($x);
}

trait L2t{
function m3($x): int{}
}

class L2 extends L1{
use L2t;
}

echo "DONE";

