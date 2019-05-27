<?php
if(!function_exists('getUserDetailsByUsername')){
    function getUserDetailsByUsername($conn, $username){
        $users_details = array();
        $query = mysqli_query($conn, "SELECT * from users_tb where username = '$username'");
        while($row = mysqli_fetch_array($query)){
            array_push($users_details, $row['users_id'], $row['username'], $row['password'], $row['role'], $row['date_created'], $row['status']);
        }        
        return $users_details;
    }
}

if(!function_exists('getUserList')){
    function getUserList($conn){
        $query = mysqli_query($conn, "SELECT * from users_tb ORDER BY date_created DESC ");
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_array($query)){
                include "residents_functions.php";
                ?>
                    <tr>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo getResidentDetailsById($conn, $row['users_id'])[1]?></td>
                        <td><?php echo getResidentDetailsById($conn, $row['users_id'])[3] ?></td>
                        <td><?php echo $row['role']?> </td>                   
                    </tr>
               <?php
            }
        }else{
            echo "No Ticket Found";
        }
    }
}

?>