<?php
set_error_handler(function($code, $message){
    throw new \Exception($message);
});
function test1(){
    $a[] = $b;
}
function test2(){
    $a[$c] = $b;
}
try{
    test1();
}catch(\Exception $e){
    var_dump($e->getMessage());
}
try{
    test2();
}catch(\Exception $e){
    var_dump($e->getMessage());
}
