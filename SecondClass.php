<?php
/**
 * Created by andrii
 * Date: 11.10.19
 * Time: 09:50
 */
include 'FirstClass.php';

class SecondClass
{
    public function getData(){

        $fobj = new FirstClass();

        return $fobj->getSomeData();
    }
}