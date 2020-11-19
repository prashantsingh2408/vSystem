<?php
    include "config.php";
    if (    empty($_POST["email"])
            || 
            empty($_POST["pass"])
        ) {
      $error = "UserName or Password is Required.";
      echo $error;
    } else {
      $email = test_input($_POST['email']);
      $pass = test_input($_POST['pass']);
      //Check
      if (!$conn) {
        die("Connection Failed : " . mysqli_connect_error());
      }

      //For admin
      $sqlAdmin = "SELECT * FROM adminuser WHERE email='" . $email . "' AND pass='" . $pass . "'";
      $queryAdmin = mysqli_query($conn,$sqlAdmin);

      //$temp = (mysqli_num_rows($queryAdmin) >= 1);
      //echo $temp;
      //For user
      //Match user in database 
      $sql = "SELECT * FROM user WHERE email='" . $email . "' AND pass='" . $pass . "'";
      $query = mysqli_query($conn, $sql);



      if (mysqli_num_rows($query) >= 1) {

        header("location:voter.php");
      }
      else if (mysqli_num_rows($queryAdmin) >= 1){
        header("location:admin.php");
      }
      else {
        $error = "Sorry !! Authentication Failed";

        echo "<p class='alert alert-danger'><strong>$error</strong></p>";

        echo "<p class='normalFont text-primary'><strong>Your Combination of UserName and Password is In-correct. Better, You contact to the developer of system.</strong> </p>";
        echo "<br><a href='login.html' class='btn btn-primary'><span class='glyphicon glyphicon-refresh'></span> <strong>Try Again</strong></a>";
      }

      mysqli_close($conn);
    }
