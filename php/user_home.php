<?php
session_start();
    if(isset($_SESSION['user_data'])){
        if($_SESSION['user_data']['usertype']!=2){
            header("Location:admin_home.php");
        }

        echo "Hello, User".$_SESSION['user_data']['usertype'];
    }
    else
        {
                "Location:index.php?error=Unauthorized Access";
        }