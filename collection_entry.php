<?php 
require_once("validuser.php");
require_once("connectdb.php");
//require_once("uploadimage.php");

$studentid=$_REQUEST['sid'];

$colldate=$_REQUEST['colldate'];
$collamount=$_REQUEST['collamount'];
$collnote=$_REQUEST['collnote'];

$sql22 ="SELECT * FROM student WHERE sid = '$studentid'";
$result2 = mysqli_query($conn,$sql22);
$rows22 = mysqli_fetch_assoc($result2);

$update_collectedfee = $rows22['collectedfee'] + $collamount;
$update_dueamount = $rows22['dueamount'] - $collamount;

//echo $update_collectedfee;

$sql22="UPDATE student set collectedfee='$update_collectedfee', dueamount='$update_dueamount' where sid = '$studentid'";
$deupay=mysqli_query($conn,$sql22);

$sql1="INSERT INTO collectionfee
       VALUES (Null, '$studentid', '$colldate','$collamount','$collnote')";

$amount = mysqli_query($conn,$sql1);   

if($amount){
    ?>
    <script>
    alert("Yes data inserted");
    location.replace("collection_table.php");
    </script>
    <?php
}else{
    ?>
    <script>
    alert("No Try Again");
    location.replace("collection_table.php");
    </script>
    <?php
}

?>