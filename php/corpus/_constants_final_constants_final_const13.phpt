<?php
interface EntityInterface {
    final public const TEST = 'this';
}

interface KeyInterface extends EntityInterface {
}

interface StringableInterface extends EntityInterface {
}

class SomeTestClass implements KeyInterface, StringableInterface {
}
