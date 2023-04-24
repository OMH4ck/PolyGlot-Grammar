<?php
class foo implements \IteratorAggregate {
  public $prop = 1;
  function getIterator(): Traversable {
    var_dump($this->prop);
    yield;
  }
}
(function(){
  yield from new foo;
})()->next();
