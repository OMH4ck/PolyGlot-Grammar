<?php

$contrivedMixedKeyTypesExample = [
    7 => "the best PHP version",
    "elePHPant" => "the cutest mascot"
];

list(5 => $five, "duke" => $duke) = $contrivedMixedKeyTypesExample;

var_dump($five, $duke);

