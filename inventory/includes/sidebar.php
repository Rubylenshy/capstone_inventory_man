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
            /* font-size: 15px;
           font-family: 'Prompt', sans-serif; */
        }
        #sidenav{
            bottom: 0;
            height: 100%;
            width: 20%;
            float: left;
            min-height: 100%;
            padding: 0 0 60px;
        }
        .sidebar ul li a{
            color: white;
            font-size: 15px;
            font-weight: 500;
            display: block;
            line-height: 50px;
            padding-left: 20px;
            transition: .2s;
            text-decoration: none;
        }
        #text{
            text-transform: uppercase;
            color: black;
            font-weight: 700;
            font-size: small;
            padding-left: 10px;
        }
        ul li:hover #a{
            padding-left: 30px;
            text-decoration: none;
            color: #16003B;
        }
    </style>
    
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
 
    <link href="../bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../bootstrap/sb-admin-2.css" rel="stylesheet">
    <body class="page-bottom">
        <div id="sidenav" class="sidebar">

           <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                        <li class="nav-item">
                        <a href="index.php" id="a">
                            <span id="tables">Home</span></a>
                        </li>
                        <hr class="sidebar-divider">
                        <div class="sidebar-heading" id="text">
                        Tables
                        </div>
                        <li class="nav-item">
                        <a href="orders.php" id="a">
                            <span id="tables">Purchase Orders</span></a>
                        </li>
                        <li class="nav-item">
                        <a href="recipes.php" id="a">
                            <span id="tables">Recipes</span></a>
                        </li>
                        <li class="nav-item">
                        <a href="menu.php" id="a">
                            <span id="tables">Menu Cost</span></a>
                        </li>
                        <li class="nav-item">
                        <a href="stocklevel.php" id="a">
                            <span id="tables">Ingredient Stock Level</span></a>
                        </li>
                    </hr>
            </ul>        
        </div>
    </body>        
</html>

