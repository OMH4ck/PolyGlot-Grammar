<?php

class Test implements IteratorAggregate
{
    function getIterator(): Traversable
    {
        throw new Exception();
    }
}

try
{
    $it = new Test;
    foreach($it as $v)
    {
        echo "Fail\n";
    }
    echo "Wrong\n";
}
catch(Exception $e)
{
    echo "Caught\n";
}

