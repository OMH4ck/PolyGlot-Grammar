<?php

interface a {
    const b = 2;
}

interface b extends a {
    const c = self::b;
}

var_dump(b::c, a::b);

