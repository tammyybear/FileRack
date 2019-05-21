<?php
if(!function_exists('getUserDetailsByUsername')){
    function getUserDetailsByUsername($conn, $username){
        $users_details = array();
        $query = mysqli_query($conn, "SELECT * from users_tb where username = '$username'");
        while($row = mysqli_fetch_array($query)){
            array_push($users_details, $row['users_id'], $row['username'], $row['password'], $row['role']);
        }        
        return $users_details;
    }
}

?>