<?php
require_once __DIR__.'/../../common/dbconnection.php';

$name = $_POST['name'];
$fee = $_POST['fee'];
$cordinatior = $_POST['cordinatior'];
$sdate = $_POST['sdate'];
$edate = $_POST['sdate'];
$id =$_POST['id'];

$name = trim($name);
$fee = trim($fee);
$cordinatior = trim($cordinatior);
$sdate = trim($sdate);
$edate = trim($sdate);



$con = new DBConnection();



$sql ="update batch set name='$name', fee='$fee', sdate='$sdate', edate='$edate', cordinatior='$cordinatior' where id=$id";
$success = $con->query($sql);
$con->close;

if($success){
    header("location:detail.php?id=$id");
}else{
 echo "something is wrong";
}
