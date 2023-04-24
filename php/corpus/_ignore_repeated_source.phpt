<?php

// Not a repeated error due to different variables names.
$u1 + $u2;

// Repeated error.
$u + $u;

// Also a repeated error, because we're ignoring the different source.
$u + 1;

