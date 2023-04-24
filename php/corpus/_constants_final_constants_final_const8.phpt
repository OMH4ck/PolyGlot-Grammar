<?php

interface I1
{
    const C = 1;
}

interface I2
{
    const C = 1;
}

class C implements I1, I2
{
}

