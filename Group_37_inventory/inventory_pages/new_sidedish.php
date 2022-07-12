<?php
    include('../includes/connection.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $dish=$_POST['dish'];
        $cost=$_POST['cost'];
        $duration=$_POST['duration'];
        
        $query="INSERT INTO `side_dish`(dish,cost,duration) 
        VALUES ('$dish','$cost','$duration')";
        $result = mysqli_query($connect,$query);
        
        if ($result) {
            header('location:menu.php');
        } else {
            die;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New | Side Dish</title>
    <style>
        /* html, body{
            background-color: grey;
        } */
        #column{
            padding-top: 50px;
        }
        #padding{
            padding: 30px;
        }
        div a{
            text-decoration: none;
            color: white;
        }
        div a:hover{
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <div id="column">
    <div class="container col-lg-6 bg-light shadow-lg" id="padding">
        <h3 class="text-center">New Side Dish</h3>
        <form action="" method="post">
        <div class="form-group">
                <label  class="form-label">Dish/Food:</label>
                <input type="text" class="form-control" name="dish" placeholder="Enter Dish">
            </div>
            <div class="form-group">
                <label  class="form-label">Cost:</label>
                <input type="text" class="form-control" name="cost" placeholder="Cost per plate">
            </div> 
            <div class="form-group">
                <label  class="form-label">Duration:</label>
                <input type="text" class="form-control" name="duration" placeholder="Preparation duration">
            </div><br>
            <button type="submit" class="btn btn-primary text-center">Add Dish</button>
            <a class="btn btn-danger" href="menu.php">Cancel</a>
        </form>
    </div>
    </div>
</body>
</html>

<?php
    include('../includes/footer.php')
?>