<?php
namespace Miapenso\HelloWorld;

class HelloWorld
{
    public function say(){
        $say = 'Hello,world!';
        $say .= 'This is version update';
        return $say;
    }
}