<?php

namespace ProgrammerZamanNow\Belajar;

class Customer 
{
    public function __construct(private string $name)
    {

    }
    public function sayhello (string $name = "Guest") : string
    {
        return "helllo $name, nama saya $this->nama";
    }
}