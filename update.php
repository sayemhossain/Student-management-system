
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

    <?php

    include "config.php";

    $id= $_GET['id'];

    $selectquery = "select * from students where id= $id";
    $query = mysqli_query($conn, $selectquery);

    $result = mysqli_fetch_assoc($query);

    if(isset($_POST["submit"])){

        $name = $_POST["name"];
        $class = $_POST["class"];
        $section = $_POST["section"];
        $status = $_POST["status"];
        
        $updatequery = "update students set id=$id, name='$name', class='$class', section='$section', status='$status' where id=$id ";
        $query = mysqli_query($conn, $updatequery);
    


        if($query){
            ?>
            <script>alert("Update Successfull !")</script>
            <?php
            header ("location: table.php");
            
        }
        else{
            ?>
            <script>alert("Updatation faild !")</script>
            <?php
        }

    }
?>


            <div>
                <input type="text" name="name" class="form-control my-3" value="<?php echo $result['name'] ?>" placeholder="Enter your name">
            </div>
            <div>
                <input type="text" name="class" class="form-control my-3" value="<?php echo $result['class'] ?>" placeholder="Enter your class">
            </div>
            <div>
                <input type="text" name="section" class="form-control my-3" value="<?php echo $result['section'] ?>" placeholder="Enter your section">
            </div>
            <div>
                <input type="text" name="status" class="form-control" value="<?php echo $result['status'] ?>" placeholder="your status">
            </div>
            
            <div>
                <input type="submit" name="submit" class="btn btn-primary my-3" value="Update"></input>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>
</html>