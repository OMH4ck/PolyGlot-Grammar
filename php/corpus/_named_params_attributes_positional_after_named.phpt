<?php

#[Attribute]
class MyAttribute { }

#[MyAttribute(a: 'A', 'B')]
class Test {}

