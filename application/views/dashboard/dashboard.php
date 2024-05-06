<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

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
                <div class="">

                <div class="font-sans bg-white flex flex-col min-h-screen w-full">
        <div>
        <style>

.absolute {
  position: absolute;
}

.relative {
  position: relative;
}

.right-0 {
  right: 0px;
}

.bottom-0 {
  bottom: 0px;
}

.top-0 {
  top: 0px;
}

.left-0 {
  left: 0px;
}

.z-20 {
  z-index: 20;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.-mx-4 {
  margin-left: -1rem;
  margin-right: -1rem;
}

.-mx-2 {
  margin-left: -0.5rem;
  margin-right: -0.5rem;
}

.my-10 {
  margin-top: 2.5rem;
  margin-bottom: 2.5rem;
}

.mr-6 {
  margin-right: 1.5rem;
}

.mb-6 {
  margin-bottom: 1.5rem;
}

.-mb-64 {
  margin-bottom: -16rem;
}

.-mr-48 {
  margin-right: -12rem;
}

.-mr-40 {
  margin-right: -10rem;
}

.mt-32 {
  margin-top: 8rem;
}

.-ml-10 {
  margin-left: -2.5rem;
}

.-mt-10 {
  margin-top: -2.5rem;
}

.-ml-32 {
  margin-left: -8rem;
}

.mt-12 {
  margin-top: 3rem;
}

.mb-10 {
  margin-bottom: 2.5rem;
}

.mb-4 {
  margin-bottom: 1rem;
}

.mr-4 {
  margin-right: 1rem;
}

.mb-1 {
  margin-bottom: 0.25rem;
}

.mb-12 {
  margin-bottom: 3rem;
}

.mb-2 {
  margin-bottom: 0.5rem;
}

.ml-auto {
  margin-left: auto;
}

.mr-2 {
  margin-right: 0.5rem;
}

.mt-10 {
  margin-top: 2.5rem;
}

.block {
  display: block;
}

.inline-block {
  display: inline-block;
}

.flex {
  display: flex;
}

.hidden {
  display: none;
}

.h-40 {
  height: 10rem;
}

.h-5 {
  height: 1.25rem;
}

.h-20 {
  height: 5rem;
}

.h-10 {
  height: 2.5rem;
}

.h-2 {
  height: 0.5rem;
}

.h-32 {
  height: 8rem;
}

.h-4 {
  height: 1rem;
}

.h-8 {
  height: 2rem;
}

.h-24 {
  height: 6rem;
}

.h-6 {
  height: 1.5rem;
}

.min-h-screen {
  min-height: 100vh;
}

.w-full {
  width: 100%;
}

.w-40 {
  width: 10rem;
}

.w-5 {
  width: 1.25rem;
}

.w-20 {
  width: 5rem;
}

.w-32 {
  width: 8rem;
}

.w-10 {
  width: 2.5rem;
}

.w-2\/3 {
  width: 66.666667%;
}

.w-1\/4 {
  width: 25%;
}

.w-64 {
  width: 16rem;
}

.w-1\/2 {
  width: 50%;
}

.w-8 {
  width: 2rem;
}

.w-16 {
  width: 4rem;
}

.w-1\/3 {
  width: 33.333333%;
}

.w-12 {
  width: 3rem;
}

.w-6 {
  width: 1.5rem;
}

.w-4 {
  width: 1rem;
}

.w-24 {
  width: 6rem;
}

.max-w-4xl {
  max-width: 56rem;
}

.flex-1 {
  flex: 1 1 0%;
}

.grow {
  flex-grow: 1;
}

.transform {
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.flex-col {
  flex-direction: column;
}

.flex-wrap {
  flex-wrap: wrap;
}

.items-center {
  align-items: center;
}

.justify-end {
  justify-content: flex-end;
}

.justify-between {
  justify-content: space-between;
}

.overflow-hidden {
  overflow: hidden;
}

.rounded-lg {
  border-radius: 0.5rem;
}

.rounded-full {
  border-radius: 9999px;
}

.rounded-t-lg {
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}

.rounded-bl-lg {
  border-bottom-left-radius: 0.5rem;
}

.border-b {
  border-bottom-width: 1px;
}

.border-gray-100 {
  --tw-border-opacity: 1;
  border-color: rgb(243 244 246 / var(--tw-border-opacity));
}

.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-gray-200 {
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.bg-blue-800 {
  --tw-bg-opacity: 1;
  background-color: rgb(30 64 175 / var(--tw-bg-opacity));
}

.bg-yellow-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(234 179 8 / var(--tw-bg-opacity));
}

.bg-blue-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(59 130 246 / var(--tw-bg-opacity));
}

.bg-gray-300 {
  --tw-bg-opacity: 1;
  background-color: rgb(209 213 219 / var(--tw-bg-opacity));
}

.bg-green-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(22 163 74 / var(--tw-bg-opacity));
}

.bg-blue-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(37 99 235 / var(--tw-bg-opacity));
}

.bg-orange-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(251 146 60 / var(--tw-bg-opacity));
}

.bg-gray-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.bg-green-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(74 222 128 / var(--tw-bg-opacity));
}

.bg-orange-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(234 88 12 / var(--tw-bg-opacity));
}

.fill-current {
  fill: currentColor;
}

.p-6 {
  padding: 1.5rem;
}

.p-2 {
  padding: 0.5rem;
}

.p-4 {
  padding: 1rem;
}

.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}

.py-4 {
  padding-top: 1rem;
  padding-bottom: 1rem;
}

.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.py-1 {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.py-16 {
  padding-top: 4rem;
  padding-bottom: 4rem;
}

.py-6 {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

.px-8 {
  padding-left: 2rem;
  padding-right: 2rem;
}

.px-2 {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}

.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.pt-2 {
  padding-top: 0.5rem;
}

.text-center {
  text-align: center;
}

.text-right {
  text-align: right;
}

.font-sans {
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

.text-2xl {
  font-size: 1.5rem;
  line-height: 2rem;
}

.text-xl {
  font-size: 1.25rem;
  line-height: 1.75rem;
}

.font-bold {
  font-weight: 700;
}

.leading-tight {
  line-height: 1.25;
}

.text-gray-800 {
  --tw-text-opacity: 1;
  color: rgb(31 41 55 / var(--tw-text-opacity));
}

.text-gray-600 {
  --tw-text-opacity: 1;
  color: rgb(75 85 99 / var(--tw-text-opacity));
}

.text-gray-500 {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.text-gray-700 {
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}

.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.text-blue-500 {
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

.shadow-lg {
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow {
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.filter {
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.hover\:bg-gray-100:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.hover\:text-gray-600:hover {
  --tw-text-opacity: 1;
  color: rgb(75 85 99 / var(--tw-text-opacity));
}

@media (min-width: 640px) {
  .sm\:text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
  }
}

@media (min-width: 768px) {
  .md\:mx-auto {
    margin-left: auto;
    margin-right: auto;
  }

  .md\:block {
    display: block;
  }

  .md\:flex {
    display: flex;
  }

  .md\:hidden {
    display: none;
  }

  .md\:max-w-6xl {
    max-width: 72rem;
  }

  .md\:max-w-2xl {
    max-width: 42rem;
  }

  .md\:items-center {
    align-items: center;
  }

  .md\:justify-between {
    justify-content: space-between;
  }

  .md\:overflow-hidden {
    overflow: hidden;
  }

  .md\:py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .md\:text-5xl {
    font-size: 3rem;
    line-height: 1;
  }

  .md\:text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
  }
}

  </style>
        
        <div class="bg-gray-200 md:overflow-hidden">
          <div class="px-4 py-16">
            <div class="relative w-full md:max-w-2xl md:mx-auto text-center">
              <h1
                class="font-bold text-gray-700 text-xl sm:text-2xl md:text-5xl leading-tight mb-6"
              >
                An attempt to enhance E - Learning using web technologies
              </h1>
        
              <p class="text-gray-600 md:text-xl md:px-18 mb-10">
              Hack - O - Vation CGEC 2022 By "405 Found"
              </p>
        
              <div
                class="hidden md:block h-40 w-40 rounded-full bg-blue-800 absolute right-0 bottom-0 -mb-64 -mr-48"
              ></div>
        
              <div
                class="hidden md:block h-5 w-5 rounded-full bg-yellow-500 absolute top-0 right-0 -mr-40 mt-32"
              ></div>
            </div>
          </div>
        
          <svg
            class="fill-current bg-gray-200 text-white hidden md:block"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320"
          >
            <path
              fill-opacity="1"
              d="M0,64L120,85.3C240,107,480,149,720,149.3C960,149,1200,107,1320,85.3L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"
            ></path>
          </svg>
        </div>
        
        <div
          class="max-w-4xl mx-auto bg-white shadow-lg relative z-20 hidden md:block"
          style="margin-top: -320px; border-radius: 20px;"
        >
          <div
            class="h-20 w-20 rounded-full bg-yellow-500 absolute top-0 left-0 -ml-10 -mt-10"
            style="z-index: -1;"
          ></div>
        
          <div
            class="h-5 w-5 rounded-full bg-blue-500 absolute top-0 left-0 -ml-32 mt-12"
            style="z-index: -1;"
          ></div>
        
          <div class="h-10 bg-white rounded-t-lg border-b border-gray-100"></div>
          <div class="flex" style="height: 550px;">
            <div class="w-32 bg-gray-200 p-6 overflow-hidden rounded-bl-lg">
              <div class="text-center mb-10">
                <div class="w-10 h-10 rounded-full bg-blue-800 mb-4 mx-auto"></div>
                <div class="h-2 rounded-full bg-blue-800"></div>
              </div>
        
              <div class="text-center mb-10">
                <div class="w-10 h-10 rounded-full bg-gray-300 mb-4 mx-auto"></div>
                <div class="h-2 rounded-full bg-gray-300"></div>
              </div>
        
              <div class="text-center mb-10">
                <div class="w-10 h-10 rounded-full bg-gray-300 mb-4 mx-auto"></div>
                <div class="h-2 rounded-full bg-gray-300"></div>
              </div>
        
              <div class="text-center">
                <div class="w-10 h-10 rounded-full bg-gray-300 mb-4 mx-auto"></div>
                <div class="h-2 rounded-full bg-gray-300"></div>
              </div>
            </div>
            <div class="flex-1 py-6 px-8">
              <div class="flex flex-wrap -mx-4">
                <div class="w-2/3 px-4">
                  <div class="flex flex-wrap -mx-4 mb-10">
                    <div class="w-1/4 px-4">
                      <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                        <div
                          class="w-10 h-10 rounded-full bg-green-600 mb-4 mx-auto"
                        ></div>
                        <div class="h-2 rounded-full bg-gray-200"></div>
                      </div>
                    </div>
                    <div class="w-1/4 px-4">
                      <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                        <div
                          class="w-10 h-10 rounded-full bg-blue-600 mb-4 mx-auto"
                        ></div>
                        <div class="h-2 rounded-full bg-gray-200"></div>
                      </div>
                    </div>
                    <div class="w-1/4 px-4">
                      <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                        <div
                          class="w-10 h-10 rounded-full bg-orange-400 mb-4 mx-auto"
                        ></div>
                        <div class="h-2 rounded-full bg-gray-200"></div>
                      </div>
                    </div>
                    <div class="w-1/4 px-4">
                      <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                        <div
                          class="w-10 h-10 rounded-full bg-blue-800 mb-4 mx-auto"
                        ></div>
                        <div class="h-2 rounded-full bg-gray-200"></div>
                      </div>
                    </div>
                  </div>
        
                  <div class="h-32 percentage mb-10 pt-2">
                    <div class="h-4 bg-gray-200 w-64 mb-4 block"></div>
                    <div class="h-4 bg-gray-200 w-32 mb-4 block"></div>
                    <div class="h-4 bg-gray-200 w-40 mb-4 block"></div>
                    <div class="h-4 bg-gray-200 w-20 mb-4 block"></div>
                  </div>
        
                  <div class="w-full flex flex-wrap mb-6">
                    <div class="w-1/2">
                      <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                        <div>
                          <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                          <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-1/2">
                      <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                        <div>
                          <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                          <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                        </div>
                      </div>
                    </div>
                  </div>
        
                  <div class="w-full flex flex-wrap">
                    <div class="w-1/2">
                      <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                        <div>
                          <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                          <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-1/2">
                      <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                        <div>
                          <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                          <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-1/3 px-4">
                  <div class="rounded-lg shadow-lg p-6">
                    <div class="block w-12 h-2 rounded-full bg-gray-200 mb-6"></div>
        
                    <svg
                      height="150"
                      width="150"
                      viewBox="0 0 20 20"
                      class="mx-auto mb-12"
                    >
                      <circle r="10" cx="10" cy="10" fill="#4299e1" />
                      <circle
                        r="5"
                        cx="10"
                        cy="10"
                        fill="transparent"
                        stroke="#2b6cb0"
                        stroke-width="10"
                        stroke-dasharray="11 31.4"
                        transform="rotate(-90) translate(-20)"
                      />
                    </svg>
        
                    <div class="flex flex-wrap -mx-2 mb-10">
                      <div class="w-1/3 px-2">
                        <div class="block h-2 rounded-full bg-gray-200"></div>
                      </div>
                      <div class="w-1/3 px-2">
                        <div class="block h-2 rounded-full bg-gray-200"></div>
                      </div>
                      <div class="w-1/3 px-2">
                        <div class="block h-2 rounded-full bg-gray-200"></div>
                      </div>
                    </div>
                  </div>
        
                  <div class="flex justify-between my-10">
                    <div>
                      <div class="h-2 w-10 bg-gray-300 rounded-full mb-2"></div>
                      <div class="h-2 w-16 bg-gray-300 rounded-full mb-2"></div>
                      <div class="h-2 w-8 bg-gray-300 rounded-full"></div>
                    </div>
                    <div>
                      <div
                        class="ml-auto h-2 w-5 bg-gray-300 rounded-full mb-2"
                      ></div>
                      <div
                        class="ml-auto h-2 w-6 bg-gray-300 rounded-full mb-2"
                      ></div>
                      <div class="ml-auto h-2 w-8 bg-gray-300 rounded-full"></div>
                    </div>
                  </div>
        
                  <div class="text-right flex justify-end">
                    <div class="rounded-lg h-8 w-20 px-4 bg-gray-200 mr-2"></div>
                    <div class="rounded-lg h-8 w-20 px-4 bg-green-400"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="px-4 md:hidden">
          <div
            class="-mt-10 max-w-4xl mx-auto bg-white shadow-lg relative z-20"
            style="border-radius: 20px;"
          >
            <div class="h-10 bg-white rounded-t-lg border-b border-gray-100"></div>
            <div class="flex" style="height: 340px;">
              <div class="w-16 bg-gray-200 px-2 py-6 overflow-hidden rounded-bl-lg">
                <div class="text-center mb-6">
                  <div class="w-4 h-4 rounded-full bg-blue-800 mb-2 mx-auto"></div>
                  <div class="h-2 w-8 mx-auto rounded-full bg-blue-800"></div>
                </div>
                <div class="text-center mb-6">
                  <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
                  <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
                </div>
                <div class="text-center mb-6">
                  <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
                  <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
                </div>
                <div class="text-center">
                  <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
                  <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
                </div>
              </div>
              <div class="flex-1 py-6 px-4">
                <div class="flex flex-wrap -mx-2">
                  <div class="w-1/3 px-2">
                    <div
                      class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3"
                    >
                      <div
                        class="w-4 h-4 rounded-full bg-green-600 mb-2 mx-auto"
                      ></div>
                      <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                    </div>
                  </div>
                  <div class="w-1/3 px-2">
                    <div
                      class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3"
                    >
                      <div
                        class="w-4 h-4 rounded-full bg-blue-600 mb-2 mx-auto"
                      ></div>
                      <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                    </div>
                  </div>
                  <div class="w-1/3 px-2">
                    <div
                      class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3"
                    >
                      <div
                        class="w-4 h-4 rounded-full bg-orange-600 mb-2 mx-auto"
                      ></div>
                      <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                    </div>
                  </div>
                </div>
        
                <div class="flex flex-wrap -mx-2 mb-6">
                  <div class="w-1/2 px-2">
                    <div class="shadow h-24 p-2 rounded-lg">
                      <div class="h-20 percentage pt-2">
                        <div class="h-2 bg-gray-200 w-24 mb-2 block"></div>
                        <div class="h-2 bg-gray-200 w-12 mb-2 block"></div>
                        <div class="h-2 bg-gray-200 w-20 mb-2 block"></div>
                        <div class="h-2 bg-gray-200 w-8 mb-2 block"></div>
                      </div>
                    </div>
                  </div>
                  <div class="w-1/2 px-2">
                    <div class="rounded-lg shadow px-2 py-2">
                      <div
                        class="block w-8 h-2 rounded-full bg-gray-200 mb-2"
                      ></div>
        
                      <div class="mb-2">
                        <svg
                          height="50"
                          width="50"
                          viewBox="0 0 20 20"
                          class="mx-auto"
                        >
                          <circle r="10" cx="10" cy="10" fill="#ddd" />
                          <circle
                            r="5"
                            cx="10"
                            cy="10"
                            fill="transparent"
                            stroke="#eee"
                            stroke-width="10"
                            stroke-dasharray="11 31.4"
                            transform="rotate(-90) translate(-20)"
                          />
                        </svg>
                      </div>
        
                      <div class="flex flex-wrap -mx-2">
                        <div class="w-1/3 px-2">
                          <div class="block h-2 rounded-full bg-gray-200"></div>
                        </div>
                        <div class="w-1/3 px-2">
                          <div class="block h-2 rounded-full bg-gray-200"></div>
                        </div>
                        <div class="w-1/3 px-2">
                          <div class="block h-2 rounded-full bg-gray-200"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="w-full flex flex-wrap mb-2">
                  <div class="w-1/2">
                    <div class="flex items-center">
                      <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                      <div>
                        <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                        <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                      </div>
                    </div>
                  </div>
                  <div class="w-1/2">
                    <div class="flex items-center">
                      <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                      <div>
                        <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                        <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="w-full flex flex-wrap mb-6">
                  <div class="w-1/2">
                    <div class="flex items-center">
                      <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                      <div>
                        <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                        <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                      </div>
                    </div>
                  </div>
                  <div class="w-1/2">
                    <div class="flex items-center">
                      <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                      <div>
                        <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                        <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="text-right flex justify-end">
                  <div class="rounded-lg h-6 w-16 px-4 bg-gray-200 mr-2"></div>
                  <div class="rounded-lg h-6 w-16 px-4 bg-green-400"></div>
                </div>
              </div>
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