<?php

class C
{
    const C = 1;
}

interface I
{
    const C = 1;
}

class C2 extends C implements I
{
}

