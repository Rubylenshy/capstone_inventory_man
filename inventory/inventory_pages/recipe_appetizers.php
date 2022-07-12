<?php
    include('../includes/connection.php');

    $id=$_GET['recipe_id'];
    $query = "SELECT * FROM `appetizers_bev` where `id`='$id'";
    $result = mysqli_query($connect, $query);
    If($row = $result->fetch_assoc()){
        $ingredients=$row['ingredients'];
        $make_it=$row['make_it'];
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe | Appetizers</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <style>
        #padding{
            padding: 30px;
        }
        button a{
            text-decoration: none;
            color: white;
        }
        button a:hover{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div style="padding-top: 50px;">
        <div class="container col-lg-7 bg-light shadow-lg" id="padding">
        <h3 class="text-center"><?php echo 'Name of the Item' ?></h3>    
        <form action="" method="post">
                <div class="form-group">
                    <label for="" class="form-label">Recipe Ingredients:</label>
                    <textarea type="text" name="ingredients" rows="7" class="form-control" 
                    value="<?php echo"$ingredients" ?>" ></textarea>
                </div><br>
                <div class="form-group">
                    <label for="" class="form-label">Procedures:</label>
                    <textarea type="text" name="make_it"  rows="7" class="form-control" readonly></textarea>
                </div><br>
                <button type="button" class="btn btn-primary"><?php echo "<a href='edit_recipe_appetizer.php?edit_appetizer=".$id."'>Edit</a>"?>
                </button>
                <button class="btn btn-danger" type="button"><a href="recipes.php">Cancel</a></button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    // include('../includes/footer.php');
?>