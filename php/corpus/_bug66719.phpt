<?php

class A
{
    public static function who()
    {
        var_dump(get_called_class());
    }
}
class B extends A
{
    public static function who()
    {
        parent::who();
    }
}

class C
{
    public static function test() {
        B::who();
        call_user_func(array(A::class, 'who'));
        call_user_func(array(B::class, 'parent::who'));
    }
}

B::who();
call_user_func(array(A::class, 'who'));
call_user_func(array(B::class, 'parent::who'));

C::test();

