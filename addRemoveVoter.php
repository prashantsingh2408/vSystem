<?php 
include "config.php";
empty($_POST["email"]);
empty($_POST["email"]);

if (
    !(isset($_POST["radioA"]) || isset($_POST["radioR"])) 
    ||
    (empty($_POST["email"]) ||  empty($_POST["email"]))
    )
    {
        $error = "UserName or Password is Required.";
        echo $error;
    } 
else {
        $email = test_input($_POST["email"]);
        $name = test_input($_POST["name"]);
        //Add user
        if(isset($_POST["radioA"])){
            //$radioR = $_POST["radioA"];
            //Create random message
            $pass = rand(1000,999);

            $sql = "INSERT INTO user(nameUser, email, pass) 
                    VALUES('$name', '$email', '$pass')
                    ";
 
            //Display password
            echo "
                <script> alert('your password' + {$pass}); </script>  
                ";
            mysqli_query($conn, $sql);
        }

        //Remove user
        else{

            $radioR = $_POST["radioR"];
            $sql = "DELETE 
            FROM user        
            WHERE nameUser='".$name."' 
                  AND 
                  email = '".$email."'
            ";  
            //message
            echo "
                <script> alert('User removed') </script>";
            mysqli_query($conn, $sql);
        }

    mysqli_close($conn);
}
?>