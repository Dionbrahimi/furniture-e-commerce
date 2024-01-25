<?php 

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $db = "furniture-e-commerce";

    $conn = mysqli_connect($servername,$username,$password,$db);

    if(!$conn){
        die ("Lidhja deshtoi" . mysqli_connect_error());
    }
    echo "Sukses";


?>