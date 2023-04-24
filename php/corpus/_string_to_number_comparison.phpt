<?php

// This tests the examples from the RFC.

function format($val) {
    if (is_float($val)) {
        if (is_nan($val)) return "NAN";
        if ($val == INF) return "INF";
        if ($val == -INF) return "-INF";
    }
    return json_encode($val);
}

function compare_eq($val1, $val2) {
    echo format($val1), " == ", format($val2), ": ", format($val1 == $val2), "\n";
}

function compare_3way($val1, $val2) {
    echo format($val1), " <=> ", format($val2), ": ", format($val1 <=> $val2), "\n";
}

compare_eq(42, "000042");
compare_eq(42, "42.0");
compare_eq(42.0, "+42.0E0");
compare_eq(0, "0e214987142012");
echo "\n";

compare_eq("42", "000042");
compare_eq("42", "42.0");
compare_eq("42.0", "+42.0E0");
compare_eq("0", "0e214987142012");
echo "\n";

compare_eq(42, "   42");
compare_eq(42, "42   ");
compare_eq(42, "42abc");
compare_eq(42, "abc42");
compare_eq( 0, "abc42");
echo "\n";

compare_eq(INF, "INF");
compare_eq(-INF, "-INF");
compare_eq(NAN, "NAN");
compare_eq(INF, "1e1000");
compare_eq(-INF, "-1e1000");
echo "\n";

$float = 1.75;

echo "precision=14:\n";
ini_set('precision', 14);
compare_3way($float, "1.75abc");
compare_3way((string) $float, "1.75abc");

echo "precision=0:\n";
ini_set('precision', 0);
compare_3way($float, "1.75abc");
compare_3way((string) $float, "1.75abc");

