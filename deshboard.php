<?php
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
          <a class="navbar-brand text-" href="deshboard.php"><b>CMS</b><span class="text-info"><b><i>soft</i></b></span></a></h1>
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
              <div class="col-2 bg-light " style="height:500px">
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
                  <b>Student Information</b> 
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
                <b>Add Peyment</b> 
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
              <div class=" container-fluid">
                <div class="row">
                  <!-- first-menu-start -->
                 
                  <div class="col-3 ">
                  <a href="batch_manage.php" class="link-line">
                  <div class="card mt-2 mb-2" style="width:15rem; height:13rem;">
                      <div class="card-body">
                      <img src="img/class.png" alt="" class="container-fluid" width="100%" height="100%">
                      </div>
                    </div>
                    </a>
                  </div>
                  <!-- first-menu-end -->
                     <!--2nd-menu-start -->
                  <div class="col-3">
                  <a href="batch_manage.php" class="link-line">
                  <div class="card mt-2 mb-2" style="width:15rem; height:13rem;">
                      <div class="card-body">
                      <img src="img/course.png" alt="" class="container-fluid" width="100%" height="100%">
                      </div>
                    </div>
                    </a>
                  </div>
                   <!--2nd-menu-end -->
                    <!--3nd-menu-start -->
                  <div class="col-3">
                  <a href="" class="link-line">
                  <div class="card mt-2 mb-2 " style="width:15rem; height:13rem;">
                      <div class="card-body">
                      <img src="img/document.png" alt="" class="container-fluid" width="100%" height="100%">
                      </div>
                    </div>
                    </a>
                  </div>
                  <!--3nd-menu-end -->
                  <!--4th-menu-start -->
                  <div class="col-3 ">
                  <a href="collection_manage.php" class="link-line">
                  <div class="card mt-2 mb-2 " style="width:15rem; height:13rem;">
                      <div class="card-body">
                      <img src="img/payment.png" alt="" class="container-fluid" width="100%" height="100%">
                      </div>
                    </div>
                    </a>
                  </div>
                   <!--4th-menu-end -->
                </div>
              </div>
              <!-- body-2nd-div -->
              <div class="container-fluid">
              <div class="row">
              <div class="col-3 ">
                  <a href="student_manage.php" class="link-line" >
                  <div class="card mt-2 mb-2 " style="width:15rem; height:15rem;">
                      <div class="card-body">
                        <img src="img/student-manage.png" alt="" class="container-fluid" width="100%" height="100%">
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-3 ">
                  <a href="teacher-manage.php" class="link-line">
                  <div class="card mt-2 mb-2 " style="width:15rem; height:15rem;">
                      <div class="card-body">
                      <img src="img/teacher-manage.png" alt="" class="container-fluid" width="100%" height="100%">
                      </div>
                    </div>
                    </a>
                  </div>
                   <!-- body-2nd-div -->
                  <!--progress-bar-startd-->
                  <div class="col-6 ">
                  <a href="" class="link-line">
                  <div class="card mt-2 mb-2 bg-light" style="width:32rem; height:15rem;">
                  <h5 class="card-title text-center pt-5 font-weight-bold">CM Rank</h5>
                  </a>
                      <div class="card-body">
                      <div class="progress mt-2">
                          <p class="pe-1">2000-22</p>
                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-Success " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
                        </div>
                        <div class="progress mt-2">
                          <p class="pe-1">2015-20</p>
                          <div class="progress-bar progress-bar-striped progress-bar-animated
                          bg-info " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
                        </div>
                        <div class="progress mt-2">
                          <p class="pe-1">2010-15</p>
                          <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 55%">55%</div>
                        </div>
                    
                          
                    </div>
                      </div>
                       <!--progress-bar-startd-->
                  </div>
              </div>
              </div>
               <!-- body-2nd-div -->
            </div>
        </div>
      </div>
      <!-- body-end -->
    </div>
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