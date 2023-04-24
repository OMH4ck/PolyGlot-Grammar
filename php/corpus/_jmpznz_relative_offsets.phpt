<?php
function test($c) {
    L1:
    if ($c) {
        goto L1;
        goto L1;
    }
}
test(false);
?>
