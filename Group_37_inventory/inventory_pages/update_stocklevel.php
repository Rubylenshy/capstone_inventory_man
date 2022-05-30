<?php
    include('../includes/connection.php');
        $id= $_GET['update_id'];

        $sql="SELECT * FROM `stock_level` where `id`='$id'";
        $select=mysqli_query($connect,$sql);
        if($row=$select->fetch_assoc()){
            $id=$row['id'];
            $item=$row['item'];
            $quantity=$row['quantity'];
            $cost_per_unit=$row['cost_per_unit'];
        }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $item=$_POST['item'];
        $quantity=$_POST['quantity'];
        $cost_per_unit=$_POST['cost_per_unit'];
        
        $query="UPDATE `stock_level` set id='$id', item='$item', quantity='$quantity', 
        cost_per_unit='$cost_per_unit' where id='$id'";
        $result = mysqli_query($connect,$query);
        
        if ($result) {
            header('location:stocklevel.php');
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
    <title>Update Ingredient</title>
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
    <div class="container col-lg-6 bg-light" id="padding">
        <h3 class="text-center">Ingredient Form</h3>
        <form action="" method="post">
            <div class="form-group">
                <label  class="form-label">Ingredient:</label>
                <input type="text" class="form-control" name="item" placeholder="Enter Ingredient" 
                value="<?php echo "$item" ?>">
            </div>
            <div class="form-group">
                <label  class="form-label">Quantity:</label>
                <input type="text" class="form-control" name="quantity" placeholder="How many?"
                value="<?php echo "$quantity" ?>">
            </div> 
            <div class="form-group">
                <label  class="form-label">Cost Per Unit:</label>
                <input type="text" class="form-control" name="cost_per_unit" placeholder="Enter cost per unit"
                value="<?php echo "$cost_per_unit" ?>">
            </div><br>
            <button type="submit" class="btn btn-primary text-center">Update Ingredient</button>
            <a class="btn btn-danger" href="stocklevel.php">Cancel</a>
        </form>
    </div>
    </div>
</body>
</html>

<?php
    include('../includes/footer.php')
?>