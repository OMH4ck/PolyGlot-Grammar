<?php
Interface ExtendsIterator extends Iterator {
}
Interface ExtendsIteratorAggregate extends IteratorAggregate {
}
Class IteratorImpl implements Iterator {
    public function next(): void {}
    public function key(): mixed {}
    public function rewind(): void {}
    public function current(): mixed {}
    public function valid(): bool {}
}
Class IteratorAggregateImpl implements IteratorAggregate {
    public function getIterator(): Traversable {}
}
Class ExtendsIteratorImpl extends IteratorImpl {
}
Class ExtendsIteratorAggregateImpl extends IteratorAggregateImpl {
}
Class A {
}

$classes = array('Traversable', 'Iterator', 'IteratorAggregate', 'ExtendsIterator', 'ExtendsIteratorAggregate',
      'IteratorImpl', 'IteratorAggregateImpl', 'ExtendsIteratorImpl', 'ExtendsIteratorAggregateImpl', 'A');

foreach($classes as $class) {
    $rc = new ReflectionClass($class);
    echo "Is $class iterable? ";
    var_dump($rc->isIterateable());
}

echo "\nTest static invocation:\n";
ReflectionClass::isIterateable();

