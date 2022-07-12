<?php
    include('../includes/connection.php');
        $id= $_GET['up_desserts_id'];

        $sql="SELECT * FROM `desserts` where `id`='$id'";
        $select=mysqli_query($connect,$sql);
        if($row=$select->fetch_assoc()){
            $dish=$row['dish'];
            $cost=$row['cost'];
            $duration=$row['duration'];
        }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $dish=$_POST['dish'];
        $cost=$_POST['cost'];
        $duration=$_POST['duration'];
        
        $query="UPDATE `desserts` set dish='$dish', cost='$cost', duration='$duration' where id='$id'";
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
    <title>Desserts</title>
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
        form a{
            text-decoration: none;
            color: white;
        }
        form a:hover{
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <div id="column">
    <div class="container col-lg-6 bg-light shadow-lg" id="padding">
        <h3 class="text-center">Edit Dessert</h3>
        <form action="" method="post">
        <div class="form-group">
                <label  class="form-label">Dessert:</label>
                <input type="text" class="form-control" name="dish" placeholder="Enter Dessert"
                value="<?php echo "$dish"?>">
            </div>
            <div class="form-group">
                <label  class="form-label">Cost:</label>
                <input type="text" class="form-control" name="cost" placeholder="Cost per plate"
                value="<?php echo "$cost"?>">
            </div> 
            <div class="form-group">
                <label  class="form-label">Duration:</label>
                <input type="text" class="form-control" name="duration" placeholder="Preparation duration"
                value="<?php echo "$duration"?>">
            </div><br>
            <button type="submit" class="btn btn-primary text-center">Update Dessert</button>
            <a class="btn btn-danger" href="menu.php">Cancel</a>
        </form>
    </div>
    </div>
</body>
</html>

<?php
    include('../includes/footer.php')
?>