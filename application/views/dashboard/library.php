<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Library</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ProSolver</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url('dashboard');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Qna</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Question and Answers:</h6>
                        <a class="collapse-item" data-toggle="modal" data-target="#exampleModal">New Question</a>
                        <a class="collapse-item" href="<?=base_url('dashboard/qna'); ?>">View Questions</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#vlab"
                    aria-expanded="true" aria-controls="vlab">
                    <i class="fas fa-fw fa-flask"></i>
                    <span>Virtual Lab</span>
                </a>
                <div id="vlab" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Depertment:</h6>
                        <a class="collapse-item" href="<?=base_url('dashboard/lab/cse');?>">CSE</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#mbooks"
                    aria-expanded="true" aria-controls="mbooks">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Library</span>
                </a>
                <div id="mbooks" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Depertment:</h6>
                        <a class="collapse-item" href="<?=base_url('dashboard/library/cse');?>">CSE</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('dashboard/videos');?>">
                    <i class="fas fa-fw fa-play"></i>
                    <span>Videos</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Others
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('credits');?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Credits</span>
                </a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('about');?>">
                    <i class="fas fa-fw fa-info"></i>
                    <span>About</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form action="https://www.google.com/search" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="get" name="searchform" target="_blank">
                        <input type="text" name="q" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2" placeholder="Search in google ..">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search fa-sm"></i></button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->

                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form method="get" class="form-inline mr-auto w-100 navbar-search inline-group" action="https://www.google.com/search">
                                    <input type="text" name="q" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2" placeholder="Search in google ..">
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-search fa-sm"></i></button>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$user_name?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?=base_url('assets/');?>img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" data-toggle="modal" data-target="#settingModal">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="px-lg-5">
                      <div class="row">
                        <!-- Gallery item -->
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                          <div class="bg-white rounded shadow-sm"><img src="data:image/jpg;base64,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" alt="" class="img-fluid card-img-top">
                            <div class="p-4">
                              <h5> <a href="https://www.pdfdrive.com/let-us-c-yashwant-kanetkar-15th-edition-d200738567.html" class="text-dark">Let us c yashwant kanetkar 15th edition</a></h5>
                              <p class="small text-muted mb-0">Author: Yashwant Kanethar</p>
                              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">#Programming</span></p>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End -->
                  
                        <!-- Gallery item -->
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                          <div class="bg-white rounded shadow-sm"><img src="https://cdn.asaha.com/assets/thumbs/b4b/b4be4dcdd639da88374a2481c63856aa.jpg" alt="" class="img-fluid card-img-top">
                            <div class="p-4">
                              <h5> <a href="https://www.pdfdrive.com/theory-of-computer-science-automata-languages-and-computation-third-edition-d32191342.html" class="text-dark">Theory of Computer Science</a></h5>
                              <p class="small text-muted mb-0">Author: K.L.P Mishra & N. Chandrasekaran</p>
                              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">#Automata</span></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End -->
                  
                        <!-- Gallery item -->
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                          <div class="bg-white rounded shadow-sm"><img src="https://cdn.asaha.com/assets/thumbs/3b8/3b8b833ae40326bde45fa1926e57adae.jpg" alt="" class="img-fluid card-img-top">
                            <div class="p-4">
                              <h5> <a href="https://www.pdfdrive.com/discrete-mathematics-for-computer-science-d15324843.html" class="text-dark">Discrete Mathematics for Computer Science</a></h5>
                              <p class="small text-muted mb-0">Author: Gary Haggard & John Sehlipf & Sue Whitesides</p>
                              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">#Math</span></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End -->
                  
                        <!-- Gallery item -->
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                          <div class="bg-white rounded shadow-sm"><img src="https://cdn.asaha.com/assets/thumbs/6b1/6b11804596aef6423d5dcb4d4f03b364.jpg" alt="" class="img-fluid card-img-top">
                            <div class="p-4">
                              <h5> <a href="https://www.pdfdrive.com/python-data-analytics-data-analysis-and-science-using-pandas-matplotlib-and-the-python-programming-language-d158003322.html" class="text-dark">Python Data Analytics: Data Analysis and Science</a></h5>
                              <p class="small text-muted mb-0">Author: Fabio Nelli</p>
                              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">#Python</span></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End -->
                      </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Hack - o - Vation CGEC 2022 By "405 Found"</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=base_url('auth/logout');?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- setting Modal-->
    <div class="modal fade" id="settingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Settings</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="mb-3">
                <?= form_open('auth'); ?>
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Current Password</label>
                        <input type="password" name="current_password" class="form-control" id="exampleFormControlInput1" placeholder="Current Password">
                        </div>
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">New Password</label>
                        <input type="password" name="new_password" class="form-control" id="exampleFormControlInput1" placeholder="New Password">
                        </div>
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Repeat Password</label>
                        <input type="password" name="confirm_password" class="form-control" id="exampleFormControlInput1" placeholder="Repeat Password">
                        </div>
                        <input type="hidden" name="code" value="3"/>
                        <button class="btn btn-primary" type="submit">Change</button>
                        <?= form_close(); ?>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Question  Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('dashboard/qna'); ?>
                <div class="mb-3">
                    <textarea name="body" class="form-control" placeholder="Ask anything .." ></textarea>
                </div>
                <input type="hidden" name="code" value="1"/>
                <button class="btn btn-danger" type="submit">Ask</button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assets/');?>js/sb-admin-2.min.js"></script>

</body>

</html>