<?php
    include('../includes/connection.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $cust_name=$_POST['cust_name'];
        $orders=$_POST['orders'];
        $quantity=$_POST['quantity'];
        $cost=$_POST['cost'];
        $contact=$_POST['contact'];
        
        $query="INSERT INTO `purchase_orders`(cust_name,orders,quantity,cost,contact) 
        VALUES ('$cust_name','$orders','$quantity','$cost','$contact')";
        $result = mysqli_query($connect,$query);
        
        if ($result) {
            echo'Data inserted successfully';
            // header('location:orders.php');
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
    <div class="container col-lg-6 bg-light" id="padding">
        <h3 class="text-center">Order Form</h3>
        <form action="" method="post">
            <!-- <div class="form-group">
                <label  class="form-label">Customer ID:</label>
                <input type="number" class="form-control" name="id" placeholder="Enter ID number">
            </div> -->
            <div class="form-group">
                <label  class="form-label">Customer Name:</label>
                <input type="text" class="form-control" name="cust_name" placeholder="Enter Fullname">
            </div>
            <div class="form-group">
                <label  class="form-label">Order:</label>
                <input type="text" class="form-control" name="orders" placeholder="Your Order">
            </div> 
            <div class="form-group">
                <label  class="form-label">Quantity:</label>
                <input type="number" class="form-control" name="quantity" placeholder="How many plates?">
            </div>
            <div class="form-group">
                <label  class="form-label">Cost:</label>
                <input type="text" class="form-control" name="cost" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label class="form-label">Contact:</label>
                <input type="text" class="form-control" name="contact" placeholder="Enter phone number">
            </div><br>
            <button type="submit" class="btn btn-primary text-center"> Place New Order</button>
            <a class="btn btn-danger" href="orders.php">Cancel</a>
        </form>
    </div>
    </div>
</body>
</html>

<?php
    include('../includes/footer.php')
?>