<?php

include "config.php";

if(isset($_POST['id'])){

    $id = (int)$_POST['id'];

    $sql = "UPDATE patients
            SET status = IF(status = 1, 0, 1)
            WHERE id = $id";

    if(mysqli_query($conn, $sql)){
        echo "success";
    }else{
        echo "error";
    }

}

?>