<?php
/**
 * Created by andrii
 * Date: 11.10.19
 * Time: 09:50
 */
include 'FirstClass.php';

class SecondClass
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }


    public function getData(){

        $fobj = new FirstClass($this->message);

        return $fobj->getSomeData();
    }
}