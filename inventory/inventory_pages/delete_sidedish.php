<?php
        include('../includes/connection.php');
        
        $id=$_GET['del_sidedish_id'];
        if (isset($_GET['del_sidedish_id'])) {

            $query = "DELETE FROM `side_dish` where `id`=$id";
            $delete = mysqli_query($connect,$query);
            if ($delete) {
                header('location:menu.php');
            } else {
                die;
            }

        }
        
    ?>