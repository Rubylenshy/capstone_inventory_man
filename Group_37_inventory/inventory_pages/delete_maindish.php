<?php
        include('../includes/connection.php');
        
        $id=$_GET['del_maindish_id'];
        if (isset($_GET['del_maindish_id'])) {

            $query = "DELETE FROM `main_dish` where `id`=$id";
            $delete = mysqli_query($connect,$query);
            if ($delete) {
                header('location:menu.php');
            } else {
                die;
            }

        }
        
    ?>