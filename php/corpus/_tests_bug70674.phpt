<?php
var_dump(((new ReflectionFunction("strlen"))->getClosure())("hello"));
