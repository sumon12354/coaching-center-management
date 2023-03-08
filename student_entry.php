<?php 
require_once("validuser.php");
require_once("connectdb.php");
require_once("uploadimage.php");

$studentname=$_REQUEST['studentname'];

$bid = $_REQUEST['bid'];
$sql22 ="SELECT * FROM batchmanage WHERE bid = '$bid'";
$result2 = mysqli_query($conn,$sql22);
$rows22 = mysqli_fetch_assoc($result2);
$coursefee = $rows22['coursefee'];

$stdcontact=$_REQUEST['stdcontact'];
$stdmail=$_REQUEST['stdmail'];
$stdaddress=$_REQUEST['stdaddress'];

$sql1="INSERT INTO student (studentname,bid, stdcontact, stdmail, stdaddress, stdimage, totalfee, dueamount) VALUES ('$studentname', '$bid', '$stdcontact','$stdmail','$stdaddress', '$newimagepath', '$coursefee', '$coursefee')";

$entry=mysqli_query($conn,$sql1);   

if($entry){
    ?>
    <script>
    alert("Yes data inserted");
    location.replace("student-table.php");
    </script>
    <?php
}else{
    ?>
    <script>
    alert("No Try Again");
    location.replace("student_manage.php");
    </script>
    <?php
}

?>