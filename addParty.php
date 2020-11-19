<?php
include "config.php";

if (empty($_POST["party"])) {
    $error = "Party is Required.";
    echo '<script> alert("error")</script>';
    echo $error;
} else {
  
    $party = test_input($_POST['party']);

    //Check
    if (!$conn) {
        die("Connection Failed : " . mysqli_connect_error());
    }
    
    //no of party present
    $count_rows = "SELECT vote FROM party";
    $row = 0;
    if ($count_rows_query = mysqli_query($conn,$count_rows)) {
        // Fetch one and one row
        while ($f_row  = mysqli_fetch_row($count_rows_query)) {
          $row = $row + 1;
        }
        mysqli_free_result($count_rows_query);
      }
    //next party sno
    $next_sno = $row + 1 ;
    //insert party
    $sql = "INSERT INTO party(sno, nameParty, vote, actionAdmin) VALUES ('".$next_sno."', '".$party."',0,0)";
    $query = mysqli_query($conn, $sql);
    mysqli_close($conn);
}