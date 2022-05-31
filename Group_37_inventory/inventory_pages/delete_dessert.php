<?php
        include('../includes/connection.php');
        
        $id=$_GET['del_dessert_id'];
        if (isset($_GET['del_dessert_id'])) {

            $query = "DELETE FROM `desserts` where `id`=$id";
            $delete = mysqli_query($connect,$query);
            if ($delete) {
                header('location:menu.php');
            } else {
                die;
            }

        }
        
    ?>