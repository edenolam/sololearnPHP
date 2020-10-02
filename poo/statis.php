<?php
class myClass {
    static $myStaticProperty = 42;
}

echo myClass::$myStaticProperty;


class myClass2 {
    static $myProperty = 42;
    static function myMethod() {
        echo self::$myProperty;
    }
}

myClass2::myMethod();
