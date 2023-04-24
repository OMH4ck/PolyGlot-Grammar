<?php

trait AbstractTrait {
    abstract public function selfReturner(): self;
}

trait ConcreteTrait {
    public function selfReturner(): self {
        return $this;
    }
}

class Test {
    use AbstractTrait;
    use ConcreteTrait;
}

?>
