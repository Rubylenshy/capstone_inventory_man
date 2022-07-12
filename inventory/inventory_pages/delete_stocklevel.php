    
    <?php
        include('../includes/connection.php');
        
        $id=$_GET['delete_id'];
        if (isset($_GET['delete_id'])) {

            $query = "DELETE FROM `stock_level` where `id`=$id";
            $delete = mysqli_query($connect,$query);
            if ($delete) {
                header('location:stocklevel.php');
            } else {
                die;
            }

        }
        
    ?>