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
        <title>
            <?=$student->name?>
        </title>
    </head>
    <body>
        <h1>Update detils of <?=$student->name?> </h1>
        <form action="update.php" method="post" id="form">
        <input type="hidden" name="id" value="<?=$student->id?>">
        <table cellspacing="5">
            <tr valign="top">
                <td>
                    <label>Name</label>
                </td>
                 <td>
                     <input value="<?=$student->name?>" type="text" name="name" id="nameFild"></br>
                     <span class="error-msg" id="nameFildMsg"></span>
                </td>
            </tr>
        
             <tr valign="top">
                <td>
                    <label>City</label>
                </td>
                <td>
                    <input value="<?=$student->city?>" type="text" name="city" id="cityFild"></br>
                    <span class="error-msg" id="cityFildMsg"></span>
                </td>
            </tr>

            <tr valign="top">
                <td>
                    <label>NIC</label>
                </td>
                <td>
                    <input value="<?=$student->nic?>" type="text" name="nic" id="nicFild"></br>
                    <span class="error-msg" id="nicFildMsg"></span>
                </td>
            </tr>
            <tr><td colspan="2" align="right"><button type="submit">Save Changes</button></td></tr>
        </table>
    </form>
    </body>
</html>