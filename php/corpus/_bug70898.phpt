<?php
function m($f,$a){
    return array_map($f,0);
}

try {
    echo implode(m("",m("",m("",m("",m("0000000000000000000000000000000000",("")))))));
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
