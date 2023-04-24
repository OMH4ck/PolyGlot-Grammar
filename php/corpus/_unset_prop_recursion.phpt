<?php
class Node {
    public $parent = null;
    public $children = [];
    function insert(Node $node) {
        $node->parent = $this;
        $this->children[] = $node;
    }
    function __destruct() {
        var_dump($this);
        unset($this->children);
    }
}

$a = new Node;
$a->insert(new Node);
$a->insert(new Node);
