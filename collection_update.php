<?php
    require_once('connectdb.php');
    require_once('validuser.php');

        $sid=$_REQUEST['sid'];
        $coursename=$_REQUEST['colldate'];
        $startingdate=$_REQUEST['collamount'];
        $coursefee=$_REQUEST['coursefee'];
        $timeduration=$_REQUEST['collnote'];

     $sql1="UPDATE collectionfee set sid='$sid',colldate='$colldate',collamount='$collamount',collnote='$collnote' where sid='$sid'";

    $update=mysqli_query($conn,$sql1);
    if($update){
    header("Location:batch-table.php");
    }

    ?>