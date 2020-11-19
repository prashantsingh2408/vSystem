<?php
    include "config.php";
    $sql = "UPDATE party SET vote = 0";
    mysqli_query($conn, $sql);
?>