<?php

#[AllowDynamicProperties]
class a {
    private static $prop1;
    private static $prop2;
    private $prop3;
    private $prop4;
    private static $prop5;
    private static $prop6;
    public function __construct() {
        $this->prop1 = 1;
        $this->prop2 = 2;
        $this->prop3 = 3;
        $this->prop4 = 4;
        $this->prop5 = 5;
        $this->prop6 = 6;
        var_dump(self::$prop1);
        var_dump(self::$prop2);
        var_dump(self::$prop5);
        var_dump(self::$prop6);
        var_dump($this);
    }
}
class c extends a {
    public $prop1;
    protected $prop2;
    public static $prop3;
    protected static $prop4;
    public static $prop5;
    protected static $prop6;
}

$c = new c;

