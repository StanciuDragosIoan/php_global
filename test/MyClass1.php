<?php

class MyClass1
{
    public $name = "test";

    public function getName($name)
    {
        $this->name = $name;
        return $name;
    }
}