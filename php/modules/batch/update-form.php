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
        <title>
            <?=$batch->name?>
        </title>
        <link rel="stylesheet" href="../../assets/css/style.css"/>
    </head>
    <body>
        <h1>Update detils of <?=$batch->name?> </h1>
        <form action="update.php" method="post" id="form">
        <input type="hidden" name="id" value="<?=$batch->id?>">
        <table cellspacing="5">
            <tr valign="top">
                <td>
                    <label>Name</label>
                </td>
                 <td>
                     <input value="<?=$batch->name?>" type="text" name="name" id="nameFild"></br>
                
                </td>
            </tr>
        
             <tr valign="top">
                <td>
                    <label>Fee</label>
                </td>
                <td>
                    <input value="<?=$batch->fee?>" type="number" name="fee" id="feeFild"></br>
                    
                </td>
            </tr>

            <tr valign="top">
                <td>
                    <label>start date</label>
                </td>
                <td>
                    <input value="<?=$batch->sdate?>" type="date" name="sdate" id="sdateFild"></br>

                </td>
            </tr>

            <tr valign="top">
                <td>
                    <label>end date</label>
                </td>
                <td>
                    <input value="<?=$batch->edate?>" type="date" name="edate" id="edateFild"></br>
                </td>
            </tr>

            <tr valign="top">
                <td>
                    <label>cordinatior</label>
                </td>
                <td>
                    <input value="<?=$batch->cordinatior?>" type="text" name="cordinatior" id="cordinatiorFild"></br>
                </td>
            </tr>

            <tr><td colspan="2" align="right"><button type="submit">Save Changes</button></td></tr>
        </table>
        <br>
    <br>  
    <a class="my-btn" href = "table.php">All batches</a>
    </form>
    </body>
</html>