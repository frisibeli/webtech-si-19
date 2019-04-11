<?php
class MyClass
{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }

    public function saySomething(){
        echo "Hello, my name is $this->name";
    }
}
