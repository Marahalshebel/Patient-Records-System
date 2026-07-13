<?php

include "config.php";

if(isset($_POST['name']) && isset($_POST['age'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = (int)$_POST['age'];

    $sql = "INSERT INTO patients (name, age, status)
            VALUES ('$name', '$age', 0)";

    if(mysqli_query($conn, $sql)){
        echo "success";
    }else{
        echo "error";
    }

}

?>