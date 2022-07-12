<?php
    include('../includes/connection.php');
        $id= $_GET['update_id'];

        $sql="SELECT * FROM `purchase_orders` where `id`='$id'";
        $select=mysqli_query($connect,$sql);
        if($row=$select->fetch_assoc()){
            $id=$row['id'];
            $cust_name=$row['cust_name'];
            $orders=$row['orders'];
            $quantity=$row['quantity'];
            $cost=$row['cost'];
            $contact=$row['contact'];
        }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $cust_name=$_POST['cust_name'];
        $orders=$_POST['orders'];
        $quantity=$_POST['quantity'];
        $cost=$_POST['cost'];
        $contact=$_POST['contact'];
        
        $query="UPDATE `purchase_orders` set id='$id', cust_name='$cust_name', orders='$orders', 
        quantity='$quantity', cost='$cost', contact='$contact' where id='$id'";
        $result = mysqli_query($connect,$query);
        
        if ($result) {
           header('location:orders.php');
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
    <title>New Order</title>
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
        <h3 class="text-center">Order Form</h3>
        <form action="" method="post">
            <div class="form-group">
                <label  class="form-label">Customer Name:</label>
                <input type="text" class="form-control" name="cust_name" placeholder="Enter Fullname" 
                value="<?php echo "$cust_name" ?>">
            </div>
            <div class="form-group">
                <label  class="form-label">Order:</label>
                <input type="text" class="form-control" name="orders" placeholder="Your Order"
                value="<?php echo "$orders" ?>">
            </div> 
            <div class="form-group">
                <label  class="form-label">Quantity:</label>
                <input type="number" class="form-control" name="quantity" placeholder="How many plates?"
                value="<?php echo "$quantity" ?>">
            </div>
            <div class="form-group">
                <label  class="form-label">Cost:</label>
                <input type="text" class="form-control" name="cost" placeholder="Enter amount"
                value="<?php echo "$cost" ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Contact:</label>
                <input type="text" class="form-control" name="contact" placeholder="Enter phone number"
                value="<?php echo "$contact" ?>">
            </div><br>
            <button type="submit" class="btn btn-primary text-center">Update Order</button>
            <a class="btn btn-danger" href="orders.php">Cancel</a>
        </form>
    </div>
    </div>
</body>
</html>

<?php
    include('../includes/footer.php')
?>