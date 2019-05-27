<?php
session_start();
include "database/config.php";
include "controllers/partials_functions.php";
include "controllers/sql_functions.php";
include "controllers/users_functions.php";
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
                                <div class="panel">
                                    <div class="panel-heading">
                                        <button type="button" class="btn btn-primary btn-block">
                                            <a href="user_management_add.php">Manual Add User</a>
                                        </button>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Role Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php getUserList($conn) ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
