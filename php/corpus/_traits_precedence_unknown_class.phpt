<?php

trait T {}
class C {
    use T {
        WrongClass::method insteadof C;
    }
}

