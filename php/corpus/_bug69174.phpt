<?php
function test() {
    class C1 {
        use T1, T2 {
            T1::foo insteadof T2;
            T1::bar insteadof T2;
        }
    }
}
?>
