<?php
require_once('connectdb.php');

$FirstName=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$address=$_POST['address'];

$sql ="INSERT INTO signup VALUES('','$FirstName','$lastname','$email','$phonenumber','$address')";
$entry =mysqli_query($conn,$sql);
if($entry){
  //header("Location:login.php");
  echo "Succsessfuly Ragistration";
}else{
  echo "Try Again";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>sign up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="style.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid">
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4 bg-info mt-3 p-3">
        <form action="" method="POST">
            <h3>Sign Up</h3>
            <div class="mb-3">
            <label for="fristname" class="form-label">FirstName</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Ruhul">
            </div>
            <div class="mb-3">
            <label for="lastname" class="form-label">LastName</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Amin">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">PhoneNumber</label>
            <input type="number" class="form-control" id="phonenumber" name="phonenumber" placeholder="0191-xxxxx">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="location:mirpur">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
      </div>
      </form>
      <div class="col-4"></div>
    </div>
  </div>
</div>

</body>
</html>