<?php
   require_once __DIR__.'/../../common/dbconnection.php';

    $id = $_GET['id'];

   
    $con = new DBConnection();
    
    $sql ="delete from batch where id = $id";

    $success = $con->query($sql);

    if($success){
        header('location:table.php');
    }  else{
            echo "Not successfull";
        }
    

