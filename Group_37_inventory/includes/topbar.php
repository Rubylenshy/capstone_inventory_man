<?php
    include("../includes/connection.php");
    include("../includes/functions.php");
    $user_data = check_login($connect);
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Parisienne&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap');
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
    .nav-title{
        left: 0;
    }
    #cheffings{
        font-family: 'Parisienne', cursive;
        font-weight:700;
        font-size: 25px;
    }
</style>

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="nav">

<!-- Sidebar Toggle (Topbar) -->
            <div>
                <a class="navbar-brand pull-left"  href="index.php" id="cheffings">
					<img src="../img/carrot.jpg" width="30" height="28">Cheffings
			 	</a>
            </div>    
            <!-- Nav Item - User Information -->
        <ul class="navbar-nav ml-auto" style="align-items: center;">        
            <li>       
                <div class="bg-primary" style="border-radius: 5px; border: none; ">
                    <a id="logout" class="" href="../inventory_pages/logout.php">Logout</a>
                </div>
            </li>       
            <div class="topbar-divider d-none d-sm-block"></div>     
            <li class="nav-item">
                <a class="nav-link">
                <span style="text-transform: uppercase; color:darkslategray; font-weight: 600; font-family: 'Julius Sans One', sans-serif;"><?php echo  $user_data['user_name'] ;?></span>
                <img class="img-profile rounded-circle" id="img" src="../img/profile.jpg">
                </a>
            </li> 
        </ul>  
</nav>
            <script src="js/jquery.min.js"></script>
                    
            <script src="js/bootstrap.min.js"></script>

</html>