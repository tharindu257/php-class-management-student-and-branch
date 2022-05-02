<?php
require_once __DIR__.'/../common/dbconnection.php';
class batch{

    public $id;
    public $name;
    public $fee;
    public $sdete;
    public $edate;
    public $cordinatior;

    public static function getAll(){

        $con = new DBConnection();
        $sql = "select * from batch";
        $result = $con->query($sql);
        $con->close();
        return $result;
    }
}