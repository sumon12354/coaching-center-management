<?php
require_once('validuser.php');
?>
<html>
    <body>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >
            <link href="style.css" rel="stylesheet" >
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
            <link rel="stylesheet" href="/resources/demos/style.css">
            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
           
            <script src="teacher-manage.js"></script>
           
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
                <b> Peyment</b>
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
            <!-- sub-body-start -->
            <div class="col-10 ">
              <div class=" container-fluid">
                <div class="row">
                  <!-- first-menu-start -->
                 <div class="col-2">
                 <div class="toggler">
                <div id="effect" class="ui-widget-content ui-corner-all">
                    <h5 class="ui-widget-header ui-corner-all">Colsantent</h5>
                    <p>Moshaidul Islam</p>
                    <p>
                        <img src="img/t0.jpg" alt="">
                    </p>
                </div>
                </div>
                
                <select name="effects" id="effectTypes">
                <option value="blind">Blind</option>
                <option value="clip">Clip</option>
                <option value="drop">Drop</option>
                <option value="explode">Explode</option>
                </select>
                
                <button id="button" class="ui-state-default ui-corner-all btn btn-danger">Colsantent</button>
 
                 </div>
                 <div class="col-2">
                    <span id="button1">
                    <button class="btn btn-info">PWAD_53</button>
                    </span>
                    <div id="img1">
                    <img src="img/t1.jpg" alt=""  height="200px" width="140px" >
                    <p class="text-light text-center" >Soyebur Rahman Sohag</p>
                    </div>
                 </div>
                 <div class="col-2">
                    <span id="button2">
                    <button class="btn btn-light text-center">JEE_45</button>
                    </span>
                    <div id="img2">
                    <img src="img/t2.jpg" alt=""  height="200px" width="140px" >
                    <p class="text-light text-center" >Estiak Ahmed</p>
                    </div>
                 </div>
                 <div class="col-2">
                    <span id="button3">
                    <button class="btn btn-success">AUTO CAD</button>
                    </span>
                    <div id="img3">
                    <img src="img/t3.jpg" alt=""  height="200px" width="140px" >
                    <p class="text-light text-center" >Imran Jamal</p>
                    </div>
                 </div>
                 <div class="col-2">
                    <span id="button4">
                    <button class="btn btn-danger">DDD-50</button>
                    </span>
                    <div id="img4">
                    <img src="img/t4.jpg" alt=""  height="200px" width="140px" >
                    <p class="text-light text-center" >Rahman Ahmed</p>
                    </div>
                 </div>
                 <div class="col-2">
                    <span id="button5">
                    <button class="btn btn-warning">GRAPHICS</button>
                    </span>
                    <div id="img5">
                    <img src="img/t5.jpg" alt=""  height="200px" width="140px" >
                    <p class="text-light text-center" >Jalal Uddhin</p>
                    </div>
                 </div>
                
                 
                
                </div>
                <div id="draggable" class="ui-widget-content">
                <p class="text-center text-danger">Note: All Teacher List Click To Visible Details</p>
                </div>
 
            </div>
           
                <!-- sub-body-end-->
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