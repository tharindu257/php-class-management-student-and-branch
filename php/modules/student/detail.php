<?php

require_once __DIR__.'/../../common/dbconnection.php';

$id =$_GET['id'];
$sql = "select * from student where id=$id";
$con = new DBConnection();
$result = $con->query($sql);

$student = $result->fetch_object();
if($student == null){
    exit("student not found");
}
?>

<html>
    <head>
        <title>More detail of <?php $student->name ?></title>
        <link rel="stylesheet" href="../../assets/css/style.css"/>
    </head>
    <body>
        <table border= "1" cellspacing ="0" cellpadding ="5">
        <tr>
            <td>ID</td>
            <td><?=$student->id?></td>
        </tr>

        <tr>
            <td>Name</td>
            <td><?=$student->name?></td>
        </tr>

        <tr>
            <td>City</td>
            <td><?=$student->city?></td>
        </tr>

        <tr>
            <td>NIC</td>
            <td><?=$student->nic?></td>
        </tr>
    </table> 
    <br>
    <br>  
    <a class="my-btn" href = "table.php">All Students</a>
    <br>
    <br>
    <a class="my-delete-btn" href ="Delete.php?id=<?= $student->id?>">Delete</a>
    <br>
    <br>
    <a class="my-update-btn" href ="update-form.php?id=<?= $student->id?>">Update</a>
    </body>
</html>