<?php
session_start();
require_once('connectdb.php');
$loginuser=$_REQUEST['username'];
$loginpassword=$_REQUEST['pswd'];
$sql="SELECT* FROM userpanel where adminname='$loginuser'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)){
    $row=mysqli_fetch_assoc($result);
    $userpassword=$row['adminpassword'];
    if( $userpassword==$loginpassword){
        $_SESSION['ruha']="dear";
        header("Location:deshboard.php");
    }else{
        header("Location:login.php");
    }
}else{
    header("Location:login.php");
}

?>