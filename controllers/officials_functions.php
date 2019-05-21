<?php
if(!function_exists('getOfficialDetailsById')){
    function getOfficialDetailsById($conn, $id){
        $officials_details = array();
        $query = mysqli_query($conn, "SELECT * from officials_tb where users_id = '$id'");
        while($row = mysqli_fetch_array($query)){
            array_push($officials_details, $row['users_id'], $row['position']);
        }        
        return $officials_details;
    }
}

?>