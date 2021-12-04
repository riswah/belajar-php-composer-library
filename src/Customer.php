<?php

namespace ProgrammerZamanNow\Belajar;

class Customer 
{
    public function __construct(private string $name)
    {

    }
    public function sayhello (string $name) : string
    {
        return "helllo $name, nama saya $this->nama";
    }
}