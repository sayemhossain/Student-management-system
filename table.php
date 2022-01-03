<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <div class="container">
        <h1 class="my-5 text-center">List of Student</h1>
        <table class="table table-dark text-center">
            <thead>
                <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Section</th>
                <th>Status</th>
                <th colspan="2">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "config.php";

                    $selectquery = "select * from students";
                    $query = mysqli_query($conn, $selectquery);

                    
                    while($result = mysqli_fetch_assoc($query)){
                ?>  
                    <tr>
                        <td><?php echo $result['name'] ?></td>
                        <td><?php echo $result['class'] ?></td>
                        <td><?php echo $result['section'] ?></td>
                        <td><?php echo $result['status'] ?></td>
                        <td><a href="update.php? id=<?php echo $result['id'] ?>"><i class="fa fa-edit"></i></a></td>
                        <td><a href="delete.php? ids=<?php echo $result['id'] ?>"><i class="fa fa-trash text-danger"></i></a></td>
                        
                    </tr>
                <?php
                }
            ?>
            </tbody>
        </table>
        <div class="text-center">
        <a href="insertDataForStudent.php" type="submit" class="btn btn-warning" >Add Another</a>
        <a href="home.php" type="submit" class="btn btn-danger" >Go to Home</a>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>
</html>