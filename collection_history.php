<?php
require_once('connectdb.php');
require_once('validuser.php');
?>
<html>
    <body>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >
            <link href="style.css" rel="stylesheet" >
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
           
    <div class="conteiner-fluid">
    <!--navbar start-->
        <div>
          <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <h1>
          <a class="navbar-brand text-" href="deshboard.php"><b>CMS</b><span class="text-info"><b><i>soft</i></b> </span></a></h1>
          <button class="navbar-toggler btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <div >
            <button class="btn btn-outline-success me-2" type="submit">Search</button>
            </div>
        
              <button class="btn btn-outline-danger bg-danger " type="button" style="height:38px;width:130px"><a href="logout.php">Log Out</a> </button>
            </form>
          </div>
        </div>
      </nav>
      </div>
      <!--navbar end-->
      <!--main-body strat-->
      <div class="container-fluid mt-2">
          <div class="row">
              <div class="col-2 bg-light " style="height:550px">
            <!-- collaps-start -->
            <p class="mt-1">
                <a href="student_manage.php">
                <button class="btn btn-info" type="button" name="menu-btn1"  style="width:210px;height:35px; align:center;">
                  <b>Student Manage</b> 
                </button>
                </a>
              </p>
              <p class="mt-1">
                <a href="student-table.php">
                <button class="btn btn-info" type="button" name="menu-btn1"  style="width:210px;height:35px; align:center;">
                <b> Student Information</b>
                </button>
                </a>
              </p>
              <!-- collaps-end -->
              <!-- collaps-start -->
            <p class="mt-1">
                <a href="batch_manage.php">
                <button class="btn btn-info" type="button"  name="menu-btn2"   style="width:210px;height:35px; align:center;">
                 <b>Batch Manage</b> 
                </button>
                </a>
              </p>
              <!-- collaps-end -->
              <p class="mt-1">
                <a href="collection_manage.php">
                <button class="btn btn-info" type="button"  name="menu-btn2"   style="width:210px;height:35px; align:center;">
                 <b>Payment</b>
                </button>
                </a>
              </p>
              <p class="mt-1">
                <button class="btn btn-info" type="button"  name="menu-btn2"  style="width:210px;height:35px; align:center;">
                 <b>Resource</b> 
                </button>
              </p>
              <p class="mt-1">
              <a href="teacher-manage.php">
                <button class="btn btn-warning" type="button"  name="menu-btn2"   style="width:210px;height:35px; align:center;">
                <b>Teacher List</b> 
                </button>
                </a>
              </p>
              <p class="mt-1">
              <a href="deu-amount.php">
                <button class="btn btn-danger" type="button"  name="menu-btn2"   style="width:210px;height:35px; align:center;">
                <b>Deu-Amount</b> 
                </button>
                </a>
              </p>
            </div>
            <!-- body-start -->
            <div class="col-10 ">
              <div class=" container-fluid text-white">
                <div class="row">
                 <div class="col-3"></div>
                 <!-- form strat -->
                 <div class="col-4">
                 <p>      
            <?php
                $sid = $_REQUEST['sid'];
                $sql05 = "SELECT * from student WHERE sid = '$sid'";
                $result05 = mysqli_query($conn, $sql05);
                $rows05 = mysqli_fetch_assoc($result05);
                $bid = $rows05['bid'];
                $studentname = $rows05['studentname'];
                $stdcontact = $rows05['stdcontact'];
                $stdimage = $rows05['stdimage'];
                $stdaddress = $rows05['stdaddress'];
                $totalfee = $rows05['totalfee'];
                $collectedfee = $rows05['collectedfee'];
                $dueamount = $rows05['dueamount'];

                $sqls="SELECT * from batchmanage where bid='$bid'";
                $results =mysqli_query($conn, $sqls);
                $rowss= mysqli_fetch_assoc($results);
                $coursename=$rowss['coursename'];
            ?>
            <div class="mb-3 mt-3">
                <label for="company" class="form-label">
                    <img src="<?php echo $stdimage; ?>" width="80" height="110">
                </label>                
            </div>

            <div class="mb-3 mt-3">
                <label for="contactno" class="form-label">
                    <?php 
                        echo $studentname . "<br>"; 
                        echo $stdcontact . "<br>";
                        echo $stdaddress . "<br>";                   
                    ?> 
                </label>           

              </div>            
            <div class="mb-3 mt-3">
                <label for="contactno" class="form-label"> 
                    Course Name: <?php echo $coursename. "<br>"; ?>
                    Course Fee: <?php echo $totalfee. "<br>"; ?>
                    Collected Amount: <?php echo $collectedfee. "<br>"; ?>
                    Due Amount: <?php echo $dueamount. "<br>"; ?>

                </label>
            </div>
            <div class="mb-3 mt-3">
                <label for="contactemail" class="form-label"> Colection History 

                </label>                
            </div>
            <div class="mb-3 mt-3">
            <table class="table table-Success table-hover">
                <thead>
                <tr>
                    <th>SN</th>           
                    <th>collection date</th>
                    <th>collection amount</th>
                    <th>collection note</th>
                    
                </tr>
                </thead>
                <tbody>
                    <?php
                    $sn = 1;
                    $sql2="SELECT * FROM collectionfee WHERE sid = '$sid'";
                    $result2=mysqli_query($conn,$sql2);
                    while($rows2=mysqli_fetch_assoc($result2))
                    {                    
                    ?>
                <tr>
                    <td><?php echo $sn++; ?></td>
                    <td><?php echo $rows2['colldate'];?></td>
                    <td><?php echo $rows2['collamount'];?></td>
                    <td><?php echo $rows2['collnote'];?></td>
                    
                </tr>
                <?php
                }
                ?>
                </tbody>
            </table>


            </div>
            
      

         </div>
         <!-- form end -->
          <div class="col-3"></div>
                 
        </div>
    </div>
  </div>
  <!-- body-end -->
<!-- main-body-end -->
<!-- footer-start -->
  <div class="container-fluid bg-Secondary">
    <div class="row">
      <div class="col-12 text-center mt-1 text-light ">
        <p><i>All &copyCopyright Resarved By-Ruhul Amin</i></p>
      </div>
    </div>
  </div>
  <!-- footer-end -->
  
    </body>
</html>