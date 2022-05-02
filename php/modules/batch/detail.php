<?php

require_once __DIR__.'/../../common/dbconnection.php';

$id =$_GET['id'];
$sql = "select * from batch where id=$id";
$con = new DBConnection();
$result = $con->query($sql);

$batch = $result->fetch_object();
if($batch == null){
    exit("batch not found");
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
            <td><?=$batch->id?></td>
        </tr>

        <tr>
            <td>Name</td>
            <td><?=$batch->name?></td>
        </tr>

        <tr>
            <td>Fee</td>
            <td><?=$batch->fee?></td>
        </tr>

        <tr>
            <td>Start date</td>
            <td><?=$batch->sdate?></td>
        </tr>

        <tr>
            <td>End date</td>
            <td><?=$batch->edate?></td>
        </tr>

        <tr>
            <td>Cordinatior</td>
            <td><?=$batch->cordinatior?></td>
        </tr>


    </table> 
    <br>
    <br>  
    <a class="my-btn" href = "table.php">All Batches</a>
    <br>
    <br>
    <a class="my-delete-btn" href ="Delete.php?id=<?= $batch->id?>">Delete</a>
    <br>
    <br>
    <a class="my-update-btn" href ="update-form.php?id=<?= $batch->id?>">Update</a>
    </body>
</html>