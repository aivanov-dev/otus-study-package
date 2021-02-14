<?php

namespace OTUS\Greetings;

class Greeting
{
    /**
     * @param string $name
     *
     * @return string
     */
    public function sayHello(string $name = 'world')
    {
        return "Hello, {$name}}!";
    }
}
