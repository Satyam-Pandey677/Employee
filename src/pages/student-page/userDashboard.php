<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href=".../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="nav-profile-img">
                    <img src="../../assets/images/faces/face1.jpg" alt="image">
                    <span class="availability-status online"></span>
                  </div>
                  <div class="nav-profile-text">
                    <p class="mb-1 text-black">David Greymaax</p>
                  </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="./pages/student page/profile.html">
                    <i class="mdi mdi-cached me-2 text-success"></i> Update profile </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                  <div class="nav-profile-image">
                    <img src="../../assets/images/faces/face1.jpg" alt="profile" />
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                  </div>
                  <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                  </div>
                  <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./userDashboard.php">
                  <span class="menu-title">Dashboard</span>
                  <i class="mdi mdi-home menu-icon"></i>
                  <!-- <i class="mdi mdi-contacts menu-icon"></i> -->
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="./studentDetails.php">
                  <span class="menu-title"> STUDENT DETAILS </span>
                  <i class="mdi mdi-home menu-icon"></i>
                  <!-- <i class="mdi mdi-contacts menu-icon"></i> -->
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="studentCertificate.php">
                  <span class="menu-title"> STUDENT APPLY FOR SERVICES </span>
                  <i class="mdi mdi-home menu-icon"></i>
                  <!-- <i class="mdi mdi-contacts menu-icon"></i> -->
                </a>
              
              
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <button type="button" class="btn btn-primary rounded-1" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply for Leave</button>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    
                    <div class="modal-body">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Apply for leave</h4>
                          <form class="forms-sample">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Reason For Leave</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your Reason">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Date</label>
                              <input type="Date" class="form-control" id="exampleInputPassword1">
                            </div>
                            
                            
                            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                          </form>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>

            <div class="row">
                <div class="col-md-5">
                 <div class="card p-3 my-3">
                    <h3>Student Name : </h3>
                    <p>Your Id :  <span  id="idnumber">6546231254</span></p>
                    <p>Course :  <span>MERN STACK</span></p>
                    <p>Your DoB : <span id="Dob">12/02/65</span></p>
                 </div> 
                 <div class="card  my-3">
                    <div class="card">
                        <div class="card-body">
                          <h4 class="card-title text-dark">Todo List</h4>
                          <div class="add-items d-flex">
                            <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                            <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
                          </div>
                          <div class="list-wrapper">
                            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                              <li>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="checkbox" type="checkbox"> Meeting with Alisa </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                              </li>
                              
                              
                            </ul>
                          </div>
                        </div>
                      </div>
                 </div>
                </div>

                <div class="col-md-7">
                    <div class="card p-3 my-3">
                       <h3>Balance Payment : 1000</h3>
                       <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Last Payment slip</h4>
                          </p>
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Date </th>
                                <th>Transaction Id</th>
                                <th>Payment Paid</th>
                                <th class="text-center">Slip</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>30/02/26</td>
                                <td>6545653232138</td>
                                <td class="text-success">4000</td>
                                <td><button class="btn p-2 rounded-1 bg-primary">Download</button></td>
                              </tr>
                              <tr>
                                <td>30/02/26</td>
                                <td>6545653232138</td>
                                <td class="text-success">4000</td>
                                <td><button class="btn p-2 rounded-1 bg-primary">Download</button></td>
                              </tr><tr>
                                <td>30/02/26</td>
                                <td>6545653232138</td>
                                <td class="text-success">4000</td>
                                <td><button class="btn p-2 rounded-1 bg-primary">Download</button></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                       
                    </div> 
                </div>
            </div>

            

           
           
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/chart.js/chart.umd.js"></script>
    <script src="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <script src="../../assets/js/jquery.cookie.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>