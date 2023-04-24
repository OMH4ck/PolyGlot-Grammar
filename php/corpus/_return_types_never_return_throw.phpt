<?php

function foo() : never {
    return throw new Exception('bad');
}

// Note the lack of function call: function validated at compile-time
