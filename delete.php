<?php

    include 'config.php';

    $id = $_GET['ids'];

    $deletequery = "delete from students where id='$id'";
    $query = mysqli_query($conn, $deletequery);

    if($query){
        ?>
        <script>alert("Deleted Successfull !")</script>
        <?php
        header('location: table.php');

    }
    else{
        ?>
        <script>alert("Deletation faild !")</script>
        <?php
    }


?>