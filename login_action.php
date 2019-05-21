<?php
session_start();
include "database/config.php";
include "controllers/basic_functions.php";
include "controllers/sql_functions.php";
include "controllers/users_functions.php";
include "controllers/residents_functions.php";
include "controllers/officials_functions.php";

$username = $_POST['username'];
$password = $_POST['password'];

if(selectQuery($conn, "SELECT * from admin_tb where admin_username = '$username' and admin_password = '$password'") == 1){
    $_SESSION['role_type'] = "Admin";
    $_SESSION['username'] = $username;
    redirectPagewithAlert("dashboard.php", "Welcome Admin");
}elseif(selectQuery($conn, "SELECT * from users_tb where username = '$username' and password = '$password'") == 1){
    $role_type = getUserDetailsByUsername($conn, $username)[3];
    $position = getOfficialDetailsById($conn, getUserDetailsByUsername($conn, $username)[0])[1];
    $firstname = getResidentDetailsById($conn, getUserDetailsByUsername($conn, $username)[0])[1];
    if($role_type == "Official"){
        $_SESSION['role_type'] = $role_type;
        $_SESSION['username'] = $username;
        redirectPagewithAlert("dashboard.php", "Welcome ".$position." ".$firstname."");
    }else{
        $_SESSION['role_type'] = "Resident";
        $_SESSION['username'] = $username;
        redirectPagewithAlert("dashboard.php", "Welcome ".$firstname."");
    }
}else{
    redirectPagewithAlert("login.php", "Invalid Username/Password");
}
?>