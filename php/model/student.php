<?php
require_once __DIR__.'/../common/dbconnection.php';
class Student{

    public $id;
    public $name;
    public $city;
    public $nic;

    public static function getAll(){

        $con = new DBConnection();
        $sql = "select * from student";
        $result = $con->query($sql);
        $con->close();
        return $result;
    }
}