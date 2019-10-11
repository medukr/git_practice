<?php

class FirstClass
{

    private $some_data;


    public function __construct($data)
    {
        $this->some_data = $data;
    }

    public function getSomeData(){
        return $this->some_data;
    }

}