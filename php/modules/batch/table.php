<!DOCTYPE html>
<html>
<head>
    <title>All Batches</title>
    <link rel="stylesheet" href="../../assets/css/style.css"/>
</head>
<body>
    <h1>ALL Batches</h1>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Fee</th>
                <th>Starting Date</th>
                <th>Endding Date</th>
                <th>Coordinatior</th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            <?php

            $con = require_once __DIR__.'/../../model/batch.php';
            $result = batch::getAll();

            while($row = $result->fetch_object()){
                echo'<tr>';
                echo '<td>'.$row->id.'</td>';
                echo '<td>'.$row->name.'</td>';
                echo '<td>'.$row->fee.'</td>';
                echo '<td>'.$row->sdate.'</td>';
                echo '<td>'.$row->edate.'</td>';
                echo '<td>'.$row->cordinatior.'</td>';
                echo '<td><a class="my-detail-btn" href="detail.php?id='.$row->id.'">More...</a></td>';
                echo '<td><a class="my-delete-btn" href="Delete.php?id='.$row->id.'">Delete</a></td>';
                echo '<td><a class="my-update-btn" href="update-form.php?id='.$row->id.'">Update</a></td>';
                echo'</tr>';
            }

            ?>  
        </tbody>
    </table>
    <br>
    <br>
    <a class="my-btn" href = "form.html">Add new Batches</a>
</body>
</html>