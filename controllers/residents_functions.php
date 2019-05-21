<?php
if(!function_exists('getResidentDetailsById')){
    function getResidentDetailsById($conn, $id){
        $residents_details = array();
        $query = mysqli_query($conn, "SELECT * from residents_tb where users_id = '$id'");
        while($row = mysqli_fetch_array($query)){
            array_push($residents_details, $row['users_id'], $row['first_name'], $row['middle_name'], $row['last_name'], $row['nick_name'], $row['street_address'], $row['barangay_address'], $row['city_address'], $row['province_address'], $row['birthdate'], $row['gender'], $row['civil_status'], $row['religion'], $row['nationality'], );
        }        
        return $residents_details;
    }
}

?>