<?php
        include('../includes/connection.php');
        
        $id=$_GET['del_appetizer_id'];
        if (isset($_GET['del_appetizer_id'])) {

            $query = "DELETE FROM `appetizers_bev` where `id`=$id";
            $delete = mysqli_query($connect,$query);
            if ($delete) {
                header('location:menu.php');
            } else {
                die;
            }

        }
        
    ?>