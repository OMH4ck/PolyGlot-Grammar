<?php

var_dump(Closure::fromCallable([new DateTime(), 'getTimestamp'])->call(new DateTime('@123')));

