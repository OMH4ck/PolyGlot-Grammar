<?php

function foo(): never {
    return "hello"; // not permitted in a never function
}

// Note the lack of function call: function validated at compile-time
