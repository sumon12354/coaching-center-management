<?php
    require_once('connectdb.php');
    require_once('validuser.php');

        $sid=$_REQUEST['sid'];
        $studentname=$_REQUEST['studentname'];
        $stdcontact=$_REQUEST['stdcontact'];
        $stdmail=$_REQUEST['stdmail'];
        $stdimage=$_REQUEST['stdimage'];
        $stdaddress=$_REQUEST['stdaddress'];

     $sql1="UPDATE student set studentname='$studentname',stdcontact='$stdcontact',stdmail='$stdmail',stdimage='$stdimage',stdaddress='$stdaddress' where sid='$sid'";

 

    $update=mysqli_query($conn,$sql1);
    if($update){
        header("Location:student-table.php");
    }

    ?>