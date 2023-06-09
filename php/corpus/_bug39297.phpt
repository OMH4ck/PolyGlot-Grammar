<?php
function compareByRef(&$first, &$second) {
    return $first === $second;
}

class MyTree implements ArrayAccess {
    public $parent;
    public $children = array();

    public function offsetExists($offset): bool {
    }

    public function offsetUnset($offset): void {
    }

    public function offsetSet($offset, $value): void {
        echo "offsetSet()\n";
        $cannonicalName = strtolower($offset);
        $this->children[$cannonicalName] = $value;
        $value->parent = $this;
    }

    public function offsetGet($offset): mixed {
        echo "offsetGet()\n";
        $cannonicalName = strtolower($offset);
        return $this->children[$cannonicalName];
    }

}

$id = 'Test';

$root = new MyTree();
$child = new MyTree();
$root[$id] = $child;

var_dump(compareByRef($root[$id], $child));
