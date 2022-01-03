<?php

    include "config.php";

    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $class = $_POST["class"];
        $section = $_POST["section"];
        $status = $_POST["status"];
        
        $insertquery = "INSERT INTO students(Name, class, section, status) VALUES ('$name', '$class', '$section', '$status') ";
        $query = mysqli_query($conn, $insertquery);

        if($query){
            ?>
            <script>alert("Inserted Successfull !")</script>
            <?php
            header('location: table.php');
        }
        else{
            ?>
            <script>alert("Inserted faild !")</script>
            <?php
        }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5" style="border: 2px solid black;">
    <h1 class="text-center">Registration Form</h1>

        <form action="" method="POST">
            <div>
                <input type="text" name="name" class="form-control my-3" placeholder="Enter your name">
            </div>
            <div>
                <input type="text" name="class" class="form-control my-3" placeholder="Enter your class">
            </div>
            <div class="form-group">
                <input type="text" name="section" class="form-control my-3" placeholder="Enter your section">
            </div>
            <div>
                <input type="text" name="status" class="form-control" placeholder="your status">
            </div>
            
            <div>
                <input type="submit" name="submit" class="btn btn-primary my-3" value="Add Student"></input>
                <a href="table.php" class="btn btn-warning ">Check Student</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>
</html>