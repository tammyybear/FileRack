<?php 
if(!function_exists('selectQuery')){
    function selectQuery($conn, $query){
        $query = mysqli_query($conn, $query);
        $result = mysqli_num_rows($query);
        return $result;
    }
}

if(!function_exists('DatabaseQuery')){
    function SqlQuery($conn, $query){
        reset($result);
        if($query = mysqli_query($conn, $query)){ $result = 1; }
        else{ $result = mysqli_error($conn); }
        return $result;
    }
}
?>