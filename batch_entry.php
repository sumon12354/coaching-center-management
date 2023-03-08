<?php 
require_once("validuser.php");
require_once("connectdb.php");
//require_once("uploadimage.php");

$coursename=$_REQUEST['coursename'];
$startingdate=$_REQUEST['startingdate'];
$coursefee=$_REQUEST['coursefee'];
$timeduration=$_REQUEST['timeduration'];

$sql1="INSERT INTO batchmanage (coursename,startingdate,coursefee,timeduration) 
       VALUES ('$coursename', '$startingdate','$coursefee','$timeduration')";

$batch=mysqli_query($conn,$sql1);   

if($batch){
    ?>
    <script>
    alert("Yes data inserted");
    location.replace("batch_table.php");
    </script>
    <?php
}else{
    ?>
    <script>
    alert("No Try Again");
    location.replace("batch_table.php");
    </script>
    <?php
}

?>