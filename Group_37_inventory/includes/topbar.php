<?php
    session_start();
    include("../includes/connection.php");
    include("../includes/functions.php");
    $user_data = check_login($connect);
?>

<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<style>
    #nav {
        height: 50px;
        list-style: none;
    }
    #img{
        height: 30px;
        width: 30px;
    }
    #logout{
        font-weight: 500;
        color: white;
    }
</style>

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="nav">

<!-- Sidebar Toggle (Topbar) -->

        
    
            <!-- Nav Item - User Information -->
        <ul class="navbar-nav ml-auto" style="align-items: center;">        
            <li>       
                <div class="bg-success">
                    <a id="logout" class="dropdown-item" href="../inventory_pages/logout.php">Logout</a>
                </div>
            </li>       
            <div class="topbar-divider d-none d-sm-block"></div>     
            <li class="nav-item dropdown" onclick="on()" >
                <a class="nav-link">
                <span style="text-transform: uppercase;"><?php echo  $user_data['user_name'] ;?></span>
                <img class="img-profile rounded-circle" id="img" src="../img/profile.jpg">
                </a>
            </li> 
        </ul>  
</nav>
            <script src="js/jquery.min.js"></script>
                    
            <script src="js/bootstrap.min.js"></script>