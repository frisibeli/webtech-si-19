<?php
class MyClass
{
    private $message;
    public function __construct($message){
        $this->message = $message;
    }

    public function saySomething(){
        echo "The message is $this->message";
    }
}
