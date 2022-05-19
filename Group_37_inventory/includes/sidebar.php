<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <style>
        #tables{
            font-weight: 700;
            font-size: 15px;
           /* font-family: 'Prompt', sans-serif; */
        }
        #sidenav{
            top: 0;
            z-index: 1000;
            height: auto;
            width: 20%;
            float: left;
            min-height: 100%;
            padding: 0 0 60px;
        }
        @import url('');
    </style>
    
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
 
    <link href="../bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../bootstrap/sb-admin-2.css" rel="stylesheet">
    <body class="page-bottom">
        <div id="sidenav">

           <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                        <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <span id="tables">Home</span></a>
                        </li>
                        <hr class="sidebar-divider">
                        <div class="sidebar-heading" style="font-size: 13px;">
                        Tables
                        </div>
                        <!-- Tables Buttons -->

                        <li class="nav-item">
                        <a class="nav-link" href="orders.php">
                            <span id="tables">Purchase Orders</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="recipes.php">
                            <span id="tables">Recipes</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="menu.php">
                            <span id="tables">Menu Cost</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="stocklevel.php">
                            <span id="tables">Ingredient Stock Level</span></a>
                        </li>
                    </hr>
            </ul>        
        </div>
    </body>        
</html>

