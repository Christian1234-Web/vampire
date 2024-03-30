<?php
 include('../../database/connection.php');
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Vampire Inu - vampireinu.com</title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="../assets/images/logo.svg">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.svg">
    <!-- style -->
    <link rel="stylesheet" href="../assets/css/font.css" type="text/css" />
    <!-- build:css ../assets/css/app.min.css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/app.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />

    <script src="../assets/js/ckeditor/ckeditor.js"></script>


</head>

<body>
    <style>
    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 250px;
    }
    body{
        color:white;
        background-color:black!important
    }
    </style>
    <div class="app" id="app">
        <!-- ############ LAYOUT START-->
        <!-- ############ Aside START-->
        <div id="aside" style="background-color:black!important" class="app-aside fade box-shadow-x nav-expand " aria-hidden="true">
            <div class="sidenav modal-dialog dk" style="background-color:black!important">
                <!-- sidenav top -->
                <div class="navbar bg">
                    <!-- brand -->
                    <a href="index.html" class="navbar-brand">
                        
                        <img src="../assets/images/logo.jpeg" alt="." class="">
                        <span class="hidden-folded d-inline">Vampire Inu</span>
                    </a>
                    <!-- / brand -->
                </div>
                <!-- Flex nav content -->
                <div class="flex hide-scroll">
                    <div class="scroll">
                        <div class="nav-stacked nav-active-theme" data-nav>
                            <ul class="nav bg">
                                <li class="nav-header">
                                    <span class="text-xs hidden-folded">Main</span>
                                </li>
                                <li>
                                    <a href="index_.php?admin=dashboard">
                                        <span class="nav-icon"><i class="fa fa-dashboard"></i></span>
                                        <span class="nav-text">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index_.php?admin=about">
                                        <span class="nav-icon no-fade">
                                            <i class="badge badge-xs badge-o md red"></i>
                                        </span>
                                        <span class="nav-text">About Us</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index_.php?admin=roadmap">
                                        <span class="nav-icon no-fade">
                                            <i class="badge badge-xs badge-o md red"></i>
                                        </span>
                                        <span class="nav-text">Road Map</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index_.php?admin=partners">
                                        <span class="nav-icon no-fade">
                                            <i class="badge badge-xs badge-o md red"></i>
                                        </span>
                                        <span class="nav-text">Partners</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index_.php?admin=features">
                                        <span class="nav-icon no-fade">
                                            <i class="badge badge-xs badge-o md red"></i>
                                        </span>
                                        <span class="nav-text">Features</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index_.php?admin=tokenomics">
                                        <span class="nav-icon no-fade">
                                            <i class="badge badge-xs badge-o md red"></i>
                                        </span>
                                        <span class="nav-text">Tokenomics</span>
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="index_.php?admin=settings">
                                        <span class="nav-icon no-fade">
                                            <i class="badge badge-xs badge-o md red"></i>
                                        </span> <span class="nav-text">Settings</span>
                                    </a>
                                </li>
                                <li class="pb-2 hidden-folded"></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- sidenav bottom -->
                <div class="no-shrink lt">
                    
                </div>
            </div>
        </div>
        <!-- ############ Aside END-->
        <!-- ############ Content START-->
        <div id="content" class="app-content box-shadow-2 box-radius-2" role="main">
            <!-- Header -->
            <div class="content-header   box-shadow-2" id="content-header" style="background-color:black!important">
                <div class="navbar navbar-expand-lg">
                    <!-- btn to toggle sidenav on small screen -->
                    <a class="d-lg-none mx-2" data-toggle="modal" data-target="#aside">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                            <path d="M80 304h352v16H80zM80 248h352v16H80zM80 192h352v16H80z" />
                        </svg>
                    </a>
                    <!-- Page title -->
                    <div class="navbar-text nav-title flex" id="pageTitle">Dashboard</div>
                    <ul class="nav flex-row order-lg-2">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                           
                            <!-- dropdown -->
                            <div class="dropdown-menu dropdown-menu-right w-md animate fadeIn mt-2 p-0">
                                <div class="scrollable hover" style="max-height: 250px">
                                    <div class="list">
                                        <div class="list-item " data-id="item-2">
                                            <span class="w-24 avatar circle light-blue">
                                                <span class="fa fa-git"></span>
                                            </span>
                                            <div class="list-body">
                                                <a href="" class="item-title _500">Kygo</a>
                                                <div class="item-except text-sm text-muted h-1x">
                                                    What&#x27;s the project progress now
                                                </div>
                                                <div class="item-tag tag hide">
                                                </div>
                                            </div>
                                            <div>
                                                <span class="item-date text-xs text-muted">08:05</span>
                                            </div>
                                        </div>
                                        <div class="list-item " data-id="item-14">
                                            <span class="w-24 avatar circle brown">
                                                <span class="fa fa-bell"></span>
                                            </span>
                                            <div class="list-body">
                                                <a href="" class="item-title _500">Brielle Williamson</a>
                                                <div class="item-except text-sm text-muted h-1x">
                                                    Looking for some client-work
                                                </div>
                                                <div class="item-tag tag hide">
                                                </div>
                                            </div>
                                            <div>
                                                <span class="item-date text-xs text-muted">08:00</span>
                                            </div>
                                        </div>
                                        <div class="list-item " data-id="item-6">
                                            <span class="w-24 avatar circle brown">
                                                <span class="fa fa-envelope"></span>
                                            </span>
                                            <div class="list-body">
                                                <a href="" class="item-title _500">Rita Ora</a>
                                                <div class="item-except text-sm text-muted h-1x">
                                                    Homepage mockup design
                                                </div>
                                                <div class="item-tag tag hide">
                                                </div>
                                            </div>
                                            <div>
                                                <span class="item-date text-xs text-muted">13:23</span>
                                            </div>
                                        </div>
                                        <div class="list-item " data-id="item-9">
                                            <span class="w-24 avatar circle cyan">
                                                <span class="fa fa-puzzle-piece"></span>
                                            </span>
                                            <div class="list-body">
                                                <a href="" class="item-title _500">Pablo Nouvelle</a>
                                                <div class="item-except text-sm text-muted h-1x">
                                                    It&#x27;s been a Javascript kind of day
                                                </div>
                                                <div class="item-tag tag hide">
                                                </div>
                                            </div>
                                            <div>
                                                <span class="item-date text-xs text-muted">15:00</span>
                                            </div>
                                        </div>
                                        <div class="list-item " data-id="item-7">
                                            <span class="w-24 avatar circle indigo">
                                                <span class="fa fa-bug"></span>
                                            </span>
                                            <div class="list-body">
                                                <a href="" class="item-title _500">Fifth Harmony</a>
                                                <div class="item-except text-sm text-muted h-1x">
                                                    Send you a invitation to SWO
                                                </div>
                                                <div class="item-tag tag hide">
                                                </div>
                                            </div>
                                            <div>
                                                <span class="item-date text-xs text-muted">05:35</span>
                                            </div>
                                        </div>
                                        <div class="list-item " data-id="item-10">
                                            <span class="w-24 avatar circle blue">
                                                <span class="fa fa-google"></span>
                                            </span>
                                            <div class="list-body">
                                                <a href="" class="item-title _500">Postiljonen</a>
                                                <div class="item-except text-sm text-muted h-1x">
                                                    Looking for some client-work
                                                </div>
                                                <div class="item-tag tag hide">
                                                </div>
                                            </div>
                                            <div>
                                                <span class="item-date text-xs text-muted">08:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            <!-- / dropdown -->
                        </li>
                        <!-- User dropdown menu -->
                        <li class="dropdown d-flex align-items-center">
                            <a href="#" data-toggle="dropdown" class="d-flex align-items-center">
                                <span class="avatar w-32">
                                    <img src="../assets/images/placeholder.png" alt="...">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right w pt-0 mt-2 animate fadeIn">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="docs.html">
                                    Need help?
                                </a>
                                <a class="dropdown-item" href="signin.html">Sign out</a>
                            </div>
                        </li>
                        <!-- Navarbar toggle btn -->
                        <li class="d-lg-none d-flex align-items-center">
                            <a href="#" class="mx-2" data-toggle="collapse" data-target="#navbarToggler">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 512 512">
                                    <path d="M64 144h384v32H64zM64 240h384v32H64zM64 336h384v32H64z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <!-- Navbar collapse -->
                    <div class="collapse navbar-collapse no-grow order-lg-1" id="navbarToggler">
                        <form class="input-group m-2 my-lg-0">
                            <span class="input-group-btn">
                                <button type="button" class="btn no-border no-bg no-shadow"><i
                                        class="fa fa-search"></i></button>
                            </span>
                            <input type="text" class="form-control no-border no-bg no-shadow"
                                placeholder="Search...">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Main -->
            <div class="content-main " id="content-main" style="background-color:black!important">
                <!-- ############ Main START-->
                <?php  
                       $page = $_GET['admin'];                                                    
                                                     
                     if($page === 'settings'){
                        include("../pages/settings.php");
                     }
                     elseif ($page === 'about') {
                        include("../pages/about.php");
                       }
                     elseif ($page === 'roadmap') {
                        include("../pages/roadmap.php");
                       }
                     elseif ($page === 'partners') {
                     include("../pages/partners.php");
                    }
                    elseif ($page === 'tokenomics') {   
                        include("../pages/tokenomics.php");
                       }
                       elseif ($page === 'features') {   
                        include("../pages/features.php");
                       }
                       elseif ($page === 'dashboard') {
                        include("../pages/dashboard.php");
                       }
                   
                      else {
                     include("../pages/story.php");
                         }
                            
                     ?>
                <!-- ############ Main END-->
            </div>
            <!-- Footer -->
            <div class="content-footer" style="background-color:black!important" id="content-footer">
                <div class="d-flex p-3">
                    <span class="text-sm text-muted flex">&copy; Copyright. vampireinu</span>
                    <div class="text-sm text-muted">Version 1.2.0</div>
                </div>
            </div>
        </div>
        <!-- ############ Content END-->
        <!-- ############ LAYOUT END-->
    </div>

    <!-- build:js ../assets/js/app.min.js -->
    <!-- jQuery -->

    <script>
    // Define the functions outside the DOMContentLoaded event listener
    function addSection() {
        var lastItem = document.querySelector('.item:last-child');
        var newItem = lastItem.cloneNode(true);
        var newItemId = "item" + (document.querySelectorAll('.item').length + 1);
        newItem.id = newItemId;
        var inputs = newItem.querySelectorAll('.phase');
        inputs.forEach(function(input) {
            input.value = '';
            input.id = input.id.slice(0, -1) + (document.querySelectorAll('.phase').length + 1);
        });
        document.getElementById("mainForm").insertBefore(newItem, document.getElementById("mainForm").lastElementChild);
    }

    function removeSection() {
        var items = document.querySelectorAll('.item');
        if (items.length > 1) {
            items[items.length - 1].remove();
        }
    }
    
    document.addEventListener("DOMContentLoaded", function() {
        // JavaScript code here
    });
</script>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/nav.js"></script>
    <!-- <script>
    tinymce.init({
        selector: '#newNews',
        height: 400
    });
    </script> -->
    <!-- endbuild -->
</body>

</html>