<?php 
require_once("validuser.php");
require_once("connectdb.php");

$sid=$_REQUEST['sid'];


$sql1="DELETE FROM student where sid='$sid'";
$delete=mysqli_query($conn, $sql1);
?>

<script>
    alert("Successfuly delete your Student information");
    location.replace("student-table.php");
</script>