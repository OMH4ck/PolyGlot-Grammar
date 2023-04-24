<?php

class Test {
    public function method() {
        IntlChar::enumCharTypes([$this, 'privateMethod']);
        IntlChar::enumCharTypes('self::privateMethod');
    }

    private function privateMethod($start, $end, $name) {
    }
}

(new Test)->method();

?>
