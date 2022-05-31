
    <?php
        include('../includes/connection.php');
        
        $id=$_GET['delete_orders_id'];
        if (isset($_GET['delete_orders_id'])) {

            $query = "DELETE FROM `purchase_orders` where `id`=$id";
            $delete = mysqli_query($connect,$query);
            if ($delete) {
                header('location:orders.php');
            } else {
                die;
            }

        }
        
    ?>