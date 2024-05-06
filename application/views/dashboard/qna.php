<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Question</title>

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
                    <div class="container px-5">
                        <div class="row gx-5">
                            <div class="col-lg-4 col-xl-3 mb-5">
                                <div class="card">
                                    <div class="list-group list-group-flush small">
                                        <button class="list-group-item list-group-item-action p-3" data-toggle="modal" data-target="#exampleModal">
                                            <svg class="svg-inline--fa fa-plus fa-fw me-2 text-gray-400" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><!-- <i class="fas fa-plus fa-fw me-2 text-gray-400"></i> Font Awesome fontawesome.com -->
                                            New Question
                                        </button>
                                        <a class="list-group-item list-group-item-action p-3" href="<?= base_url('dashboard/qna?q=m'); ?>">
                                            <svg class="svg-inline--fa fa-box-archive fa-fw me-2 text-gray-400" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M32 432C32 458.5 53.49 480 80 480h352c26.51 0 48-21.49 48-48V160H32V432zM160 236C160 229.4 165.4 224 172 224h168C346.6 224 352 229.4 352 236v8C352 250.6 346.6 256 340 256h-168C165.4 256 160 250.6 160 244V236zM480 32H32C14.31 32 0 46.31 0 64v48C0 120.8 7.188 128 16 128h480C504.8 128 512 120.8 512 112V64C512 46.31 497.7 32 480 32z"></path></svg><!-- <i class="fas fa-archive fa-fw me-2 text-gray-400"></i> Font Awesome fontawesome.com -->
                                            View My Question
                                        </a>
                                        <a class="list-group-item list-group-item-action p-3" href="<?= base_url('dashboard/qna?q=u'); ?>">
                                            <svg class="svg-inline--fa fa-box-archive fa-fw me-2 text-gray-400" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M32 432C32 458.5 53.49 480 80 480h352c26.51 0 48-21.49 48-48V160H32V432zM160 236C160 229.4 165.4 224 172 224h168C346.6 224 352 229.4 352 236v8C352 250.6 346.6 256 340 256h-168C165.4 256 160 250.6 160 244V236zM480 32H32C14.31 32 0 46.31 0 64v48C0 120.8 7.188 128 16 128h480C504.8 128 512 120.8 512 112V64C512 46.31 497.7 32 480 32z"></path></svg><!-- <i class="fas fa-archive fa-fw me-2 text-gray-400"></i> Font Awesome fontawesome.com -->
                                            View My Answers
                                        </a>
                                        <a class="list-group-item list-group-item-action p-3" href="<?= base_url('dashboard/qna'); ?>">
                                            <svg class="svg-inline--fa fa-box-archive fa-fw me-2 text-gray-400" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M32 432C32 458.5 53.49 480 80 480h352c26.51 0 48-21.49 48-48V160H32V432zM160 236C160 229.4 165.4 224 172 224h168C346.6 224 352 229.4 352 236v8C352 250.6 346.6 256 340 256h-168C165.4 256 160 250.6 160 244V236zM480 32H32C14.31 32 0 46.31 0 64v48C0 120.8 7.188 128 16 128h480C504.8 128 512 120.8 512 112V64C512 46.31 497.7 32 480 32z"></path></svg><!-- <i class="fas fa-archive fa-fw me-2 text-gray-400"></i> Font Awesome fontawesome.com -->
                                            View Other Questions
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-9">
                                <div class="card mb-3">
                                    
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <div class="me-2 text-dark">
                                        <?= $question["user_name"]." "; ?><?php
                                                    if(intval($question['status']) != 0){
                                                        echo '<span class="badge bg-success text-light">Solved</span>';
                                                    }else{
                                                        echo '<span class="badge bg-warning text-light">Not Solved</span>';
                                                    }
                                                ?>
                                            <div class="text-xs text-muted"><?=date_format(date_create_from_format("Y-m-d H:i:s",$question['created_at']), 'F j, Y, g:i a');?></div>
                                        </div>
                                        <?php if($user_id == $question['user_id']) : ?>
                                        <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Actions :</div>
                                            <a class="dropdown-item" href="<?= base_url('dashboard/qna?q='.$question['id']."&s=1"); ?>">Mark As Solved</a>
                                            <a class="dropdown-item" href="<?= base_url('dashboard/qna?q='.$question['id']."&d=1"); ?>">Delete</a>
                                        </div>

                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body">
                                        <p><?= $question['body']; ?></p>
                                    </div>
                                </div>

                                <div>
                                    <h4>Answers</h4>
                                    <!-- Timeline -->
                                    <style>/*
                                        *
                                        * ==========================================
                                        * CUSTOM UTIL CLASSES
                                        * ==========================================
                                        *
                                        */
                                        
                                        /* Timeline holder */
                                        ul.timeline {
                                            list-style-type: none;
                                            position: relative;
                                            padding-left: 1.5rem;
                                        }
                                        
                                         /* Timeline vertical line */
                                        ul.timeline:before {
                                            content: ' ';
                                            background: #e6e6e6;
                                            display: inline-block;
                                            position: absolute;
                                            left: 16px;
                                            width: 1px;
                                            height: 100%;
                                            z-index: 400;
                                            border-radius: 1rem;
                                        }
                                        
                                        li.timeline-item {
                                            margin: 20px 0;
                                        }
                                        
                                        /* Timeline item circle marker */
                                        li.timeline-item::before {
                                            content: ' ';
                                            background: #e6e6e6;
                                            display: inline-block;
                                            position: absolute;
                                            border-radius: 50%;
                                            border: 0.5px solid #e6e6e6;
                                            left: 11px;
                                            width: 9px;
                                            height: 9px;
                                            z-index: 400;
                                        }</style>
                                <ul class="timeline">
                                    <?php foreach($answers as $answer) : ?>
                                    <li class="timeline-item bg-white rounded ml-3 p-4">
                                        <div class="timeline-arrow"></div>
                                        <h2 class="h5 mb-0"><?=$answer['user_name']; ?> on</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i><?=date_format(date_create_from_format("Y-m-d H:i:s",$answer['created_at']), 'F j, Y, g:i a');?></span>
                                        <p class="text-small mt-2 font-weight-light"><?= $answer['body'];?></p>
                                    </li>
                                    <?php endforeach; ?>
                                    
                                </ul><!-- End -->
                                </div>

                                <div class="card">
                                    <div class="card-header">Add Reply</div>
                                    <div class="card-body">
                                        <?= form_open('dashboard/qna?q='.$question['id']);?>
                                        <textarea name="reply" class="form-control mb-2" rows="4"></textarea>
                                        <input type="hidden" name="code" value="2"/>
                                        <button type="submit" class="btn btn-primary btn-md me-2">Submit</button>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                            </div>
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
                        <span>Hack - O - Vation CGEC 2022 By "405 Found"</span>
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
                <button class="btn btn-primary" type="submit">Ask</button>
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