<?php
require_once __DIR__.'/../../common/dbconnection.php';

$name = $_POST['name'];
$fee = $_POST['fee'];
$cordinatior = $_POST['Cordinatior'];
$sdate = $_POST['Sdate'];
$edate = $_POST['Edate'];

$name = trim($name);
$fee = trim($fee);
$cordinatior = trim($cordinatior);
$sdate = trim($sdate);
$edate = trim($sdate);


//Basic validation
$crit1 = $name != "";
$crit2 = $fee != "";
$crit3 = $cordinatior != "";
$crit4 = $sdate != "";
$crit5 = $edate != "";

if(!$crit1){echo "Name is requred </br>";}
if(!$crit2){echo "City is requred </br>";}
if(!$crit3){echo "Coordinatior is requred </br>";}
if(!$crit4){echo "Starting Date not valid </br>";}
if(!$crit5){echo "Ending Date is not valid </br>";}


if(!$crit1 || !$crit2 || !$crit3 || !$crit4 || !$crit5) exit();

$con = new DBConnection();

$sql ="insert into batch values(null, '$name', '$fee', '$sdate', '$edate', '$cordinatior')";
$success = $con->query($sql);
$id = $con->insert_id;

$con->close();

if($success){
    header("location:detail.php?id=$id");
}else{
 echo "something is wrong";
}

