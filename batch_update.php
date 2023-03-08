<?php
    require_once('connectdb.php');
    require_once('validuser.php');

        $bid=$_REQUEST['bid'];

        $coursename=$_REQUEST['coursename'];
        $startingdate=$_REQUEST['startingdate'];
        $coursefee=$_REQUEST['coursefee'];
        $timeduration=$_REQUEST['timeduration'];

     $sql1="UPDATE batchmanage set coursename='$coursename', startingdate='$startingdate',coursefee='$coursefee',timeduration='$timeduration' where bid='$bid'";

        $update=mysqli_query($conn,$sql1);
        if($update){
        header("Location:batch_table.php");
    }

    ?>