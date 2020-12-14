<?php
    $conn = mysqli_connect("Localhost", "root", "", "seven");
    $name = $_POST['name'];  
    echo $_POST['name'];
    // echo json_encode($result = mysqli_query($conn,"select * from supplier where companay like %'$name'%"));
    // echo json_encode($result);
?>