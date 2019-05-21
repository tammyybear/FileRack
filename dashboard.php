<?php
session_start();
include "controllers/partials_functions.php";
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
            
            <?php get_footerBlade() ?>
        </div>
        <?php get_scriptBlade() ?>
    </body>
</html>
