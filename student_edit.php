    <?php
    require_once('connectdb.php');
    require_once('validuser.php');

    $sid=$_REQUEST['sid'];
    $sqls="SELECT * from student where sid='$sid'";
    $results =mysqli_query($conn, $sqls);
    $rowss= mysqli_fetch_assoc($results);
    $studentname=$rowss['studentname'];
    $stdcontact=$rowss['stdcontact'];
    $stdmail=$rowss['stdmail'];
    $stdimage=$rowss['stdimage'];
    $stdaddress=$rowss['stdaddress'];

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
          <a class="navbar-brand text-" href="#"><b>CMS</b><span class="text-info"><b><i>soft</i></b> </span></a></h1>
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
                  Student Manage
                </button>
                </a>
              </p>
              <p class="mt-1">
                <a href="student-table.php">
                <button class="btn btn-info" type="button" name="menu-btn1"  style="width:210px;height:35px; align:center;">
                  Student Information
                </button>
                </a>
              </p>
              <!-- collaps-end -->
              <!-- collaps-start -->
            <p class="mt-1">
                <button class="btn btn-info" type="button"  name="menu-btn2"   style="width:210px;height:35px; align:center;">
                 Teacher Manage
                </button>
              </p>
              <!-- collaps-end -->
              <p class="mt-1">
                <button class="btn btn-info" type="button"  name="menu-btn2"   style="width:210px;height:35px; align:center;">
                  Class Schedule
                </button>
              </p>
              <p class="mt-1">
                <button class="btn btn-info" type="button"  name="menu-btn2"  style="width:210px;height:35px; align:center;">
                 Course
                </button>
              </p>
            </div>
            <!-- body-start -->
            <div class="col-10 ">
              <div class=" container-fluid">
                <div class="row">
                 <div class="col-3"></div>
                 <!-- form strat -->
                 <div class="col-4">
                 <p>
      <form action="student_update.php" method="POST" enctype="multipart/form-data "class="bg-light p-2">
          <input type="hidden" id="sid" name="sid" value="<?php echo $sid;?>">
            <div class="mb-3 mt-3">
                <label for="studentname" class="form-label">Student Name:</label>
                <input type="text" class="form-control" id="studentname" value="<?php echo $studentname;?>" name="studentname">
            </div>
            <div class="mb-3 mt-3">
                <label for="contactno" class="form-label">Contact Number:</label>
                <input type="text" class="form-control" id="stdcontact" value="<?php echo $stdcontact;?>" name="stdcontact">
            </div>
            <div class="mb-3 mt-3">
                <label for="contactemail" class="form-label">Student Email:</label>
                <input type="email" class="form-control" id="stdmail" value="<?php echo $stdmail;?>" name="stdmail">
            </div>
            <div class="mb-3 mt-3">
                <label for="studentimage" class="form-label">Student Image:</label>
                <input type="file" class="form-control" id="stdimage" value="<?php echo $stdimage;?>" name="stdimage">
            </div>
            <div class="mb-3 mt-3">
                <label for="adress" class="form-label">Address:</label>
                <input type="text" class="form-control" id="stdaddress" value="<?php echo $stdaddress;?>"  name="stdaddress">
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>

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