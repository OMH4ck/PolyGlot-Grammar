<?php

const a = 'a';
const A = 'b';


class a {
    const a = 'c';
    const A = 'd';
}

var_dump(a, A, a::a, a::A);

