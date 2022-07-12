
    <?php
        include('../includes/connection.php');
<<<<<<< HEAD
        
        $id=$_GET['delete_id'];
        if (isset($_GET['delete_id'])) {

=======

        $id=$_GET['delete_orders_id'];
        if (isset($_GET['delete_orders_id'])) {
>>>>>>> aa0c9eb8af9088c003c986b6ac61a5e4268f0bc6
            $query = "DELETE FROM `purchase_orders` where `id`=$id";
            $delete = mysqli_query($connect,$query);
            if ($delete) {
                header('location:orders.php');
            } else {
                die;
            }

        }
        
    ?>