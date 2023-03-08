<?php 
require_once("validuser.php");
require_once("connectdb.php");

$bid = $_REQUEST['bid'];

$sql1 = "DELETE FROM batchmanage WHERE bid = '$bid'";
$delete = mysqli_query($conn, $sql1);

?>

<script>
    alert("Successfuly delete your course information");
    location.replace("batch_table.php");
</script>