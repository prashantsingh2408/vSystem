<?php
include 'config.php';
echo '<script> hi </script>';

foreach($_POST as $key => $value){
    if ($key == 'removeParty') {
        $value = $_POST['removeParty'];
        $sql = "DELETE FROM party WHERE sno ='".$value."'";
        mysqli_query($conn, $sql);
    }   
}