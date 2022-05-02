<?php

require_once __DIR__.'/../../common/dbconnection.php';

$name = $_POST['name'];
$city = $_POST['city'];
$nic = $_POST['nic'];
$id = $_POST['id'];

$name = trim($name);
$city = trim($city);
$nic = trim($nic);

//Basic validation
$crit1 = $name != "";
$crit2 = $city != "";
$crit3 = $nic != "";
$crit4 = strlen($name) >=3;
$crit5 = strlen($city) >=3;


if(!$crit1){echo "Name is requred </br>";}
if(!$crit2){echo "City is requred </br>";}
if(!$crit3){echo "NIC is requred </br>";}
if(!$crit4){echo "Name not valid </br>";}
if(!$crit5){echo "City is not valid </br>";}


if(!$crit1 || !$crit2 || !$crit3 || !$crit4 || !$crit5) exit();

$con = new DBConnection();

//database validation
$nicsql = "select * from student where nic='$nic'";
$result = $con->query($nicsql);
$studentByNIC = $result->fetch_object();
if($studentByNIC !=null){
    if($studentByNIC->id !=$id){
        exit("NIsC alredy exits");
    }

}



$sql ="update student set name='$name', city='$city', nic='$nic' where id=$id";
$success = $con->query($sql);
$con->close;

if($success){
    header("location:detail.php?id=$id");
}else{
 echo "something is wrong";
}
