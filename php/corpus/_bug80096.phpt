<?php

function println($arg) {
    echo $arg, "\n";
}

println(htmlentities("The < character is encoded as &lt;", double_encode: false));

