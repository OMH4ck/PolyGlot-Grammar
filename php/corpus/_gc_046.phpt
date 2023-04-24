<?php
class Action {
    private $iterator;
    function __construct() {
        $this->iterator = new ArrayIterator($this);
    }
    function filter() {
        $this->iterator = new CallbackFilterIterator($this->iterator, fn() => true);
        $this->iterator->rewind();
    }
}

$action=new Action;
$action->filter();
$action->filter();
?>
