<?php
include 'DBController.php';

if(isset($_POST['add_author'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    $sql = "INSERT INTO users (username,name,email,password,usertype) VALUES ('$name', '$email','$username', '$password','$usertype')";

    if(mysqli_query($con,$sql)){
        echo "<div class='alert alert-success' role='alert'>
       Author added succesfully!
      </div>";
      header("Location:". $_SERVER['PHP_SELF']);
    } else {
        echo "<div class='alert alert-danger' role='alert'>
       Author Denied Error!
      </div>" . $sql . "" . mysqli_error($con);
    }

    mysqli_close($con);
}