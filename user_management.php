<?php
session_start();
include "database/config.php";
include "controllers/partials_functions.php";
include "controllers/sql_functions.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <?php get_headBlade() ?>
    </head>
    <body>        
        <div id="wrapper">            
            <?php get_navBlade() ?>                        
            <?php get_sideBlade() ?>
            <div class="main">
                <div class="main-content">
                    <div class="container-fluid">
                        <h3 class="page-title">User Management</h3>                        
                        <div class="row">                            
                            <div class="col-md-12">
                                <!-- TABLE HOVER -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="col-md-2">
                                            <button class="btn btn-primary" type="button">"Add User"<span class="badge"><?php ?></span> </button>
                                            <button class="btn btn-primary" type="button">Unverified List: <span class="badge"><?php echo selectQuery($conn, "SELECT COUNT(*) from verify_residents_tb where status = 'Unverified'") ?></span> </button>                                                                                        
                                        </div>                                        
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END TABLE HOVER -->
                            </div>
                        </div>                        
                    </div>
                </div>
                <!-- END MAIN CONTENT -->
            </div>
            <!-- END MAIN -->
            <?php get_footerBlade() ?>
        </div>
        <?php get_scriptBlade() ?>
    </body>
</html>
