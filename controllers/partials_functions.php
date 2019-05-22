<?php 


if(!function_exists('get_headBlade')){
    function get_headBlade(){
        ?>
            <title>FileRack</title>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
            <!-- VENDOR CSS -->
            <link rel="stylesheet" href="resources/css/bootstrap.min.css">
            <link rel="stylesheet" href="resources/vendor/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="resources/vendor/linearicons/style.css">
            <!-- MAIN CSS -->
            <link rel="stylesheet" href="resources/css/main.css">
            <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
            <link rel="stylesheet" href="resources/css/demo.css">
            <!-- GOOGLE FONTS -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
            <!-- ICONS -->
            <link rel="apple-touch-icon" sizes="76x76" href="resources/img/apple-icon.png">
            <link rel="icon" type="image/png" sizes="96x96" href="resources/img/favicon.png">
        <?php
    }
}

if(!function_exists('get_navBlade')){
    function get_navBlade(){
        ?>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="brand">
                    <a href="dashboard.php"><img src="resources/img/logo-dark.png" alt="FileRack Logo" class="img-responsive logo"></a>
                </div>
                <div class="container-fluid">
                    <div class="navbar-btn">
                        <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                    </div>                                        
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">                                                       
                            <li class="dropdown">
                                <?php
                                    if(isset($_SESSION['role_type'])){
                                        if($_SESSION['role_type'] == "Admin"){
                                            ?>
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="resources/img/user.png" class="img-circle" alt="Avatar"> <span>Administrator</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>        
                                            <?php
                                        }else{
                                                include "database/config.php";
                                                include "controllers/users_functions.php";
                                                include "controllers/residents_functions.php";
                                            ?>
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="resources/img/user.png" class="img-circle" alt="Avatar"> <span><?php echo getResidentDetailsById($conn, getUserDetailsByUsername($conn, $_SESSION['username'])[0])[1] ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>                
                                            <?php
                                        }
                                    }                                    
                                ?>                                
                                <ul class="dropdown-menu">
                                    <li><a href="user_profile.php"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                    <?php
                                        if($_SESSION['role_type'] == "Admin"){
                                            ?> <li><a href="settings.php"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li> <?php
                                        }
                                    ?>                                    
                                    <li><a href="logout_action.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        <?php
    }
}

if(!function_exists('get_sideBlade')){
    function get_sideBlade(){
        ?>
            <div id="sidebar-nav" class="sidebar">
                <div class="sidebar-scroll">
                    <nav>
                        <?php
                            if(isset($_SESSION['role_type'])){
                                if($_SESSION['role_type'] == "Admin"){
                                    ?>
                                        <ul class="nav">
                                            <li><a href="dashboard.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                                            <li><a href="residents.php" class=""><i class="lnr lnr-list"></i> <span>Residents</span></a></li>
                                            <li><a href="certificates.php" class=""><i class="lnr lnr-printer"></i> <span>Certificates</span></a></li>
                                            <li><a href="blotters.php" class=""><i class="lnr lnr-calendar-full"></i> <span>Blotters</span></a></li>
                                            <li><a href="officials.php" class=""><i class="lnr lnr-shirt"></i> <span>Officials</span></a></li>
                                            <li><a href="user_management.php" class=""><i class="lnr lnr-users"></i> <span>User Management</span></a></li>                                            
                                        </ul>
                                    <?php    
                                }elseif($_SESSION['role_type'] == "Official"){
                                    ?>
                                        <ul class="nav">
                                            <li><a href="dashboard.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>                                        
                                            <li><a href="certificates.php" class=""><i class="lnr lnr-printer"></i> <span>Certificates</span></a></li>
                                            <li><a href="blotters.php" class=""><i class="lnr lnr-calendar-full"></i> <span>Blotters</span></a></li>                                        
                                        </ul>
                                    <?php
                                }else{
                                    ?>
                                        <ul class="nav">
                                            <li><a href="dashboard.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>                                        
                                            <li><a href="certificates.php" class=""><i class="lnr lnr-printer"></i> <span>Certificates</span></a></li>
                                            <li><a href="blotters.php" class=""><i class="lnr lnr-calendar-full"></i> <span>Blotters</span></a></li>                                        
                                        </ul>
                                    <?php
                                }
                            }                            
                        ?>                            
                    </nav>
                </div>
            </div>
        <?php
    }
}

if(!function_exists('get_footerBlade')){
    function get_footerBlade(){
        ?>
            <div class="clearfix"></div>
            <footer>
                <div class="container-fluid">
                    <p class="copyright">&copy; 2019 <a href="https://www.csfp-delapaz.com" target="_blank">Brgy. Dela Paz Norte</a>. All Rights Reserved.</p>
                </div>
            </footer>
        <?php
    }
}

if(!function_exists('get_scriptBlade')){
    function get_scriptBlade(){
        ?>
            <script src="resources/vendor/jquery/jquery.min.js"></script>
            <script src="resources/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="resources/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
            <script src="resources/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
            <script src="resources/vendor/chartist/js/chartist.min.js"></script>
            <script src="resources/scripts/klorofil-common.js"></script>        
        <?php
    }
}
?>