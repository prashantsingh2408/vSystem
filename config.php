<?php
// Credentials
$hostname = "localhost";
$username = "root";     
$password = "";
$database = "evote";


//Establish Connection
$conn = mysqli_connect($hostname, $username, $password, $database);


// UserInput Test
if (!function_exists('test_input')) {
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}
?>