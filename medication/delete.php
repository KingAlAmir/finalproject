<?php

require_once("connection.php");

if(isset($_GET['Del']))
{
    $MedicationID = $_GET['Del'];
    $query = " delete from medication where MedicationID = '".$MedicationID."'";
    $result = mysqli_query($con,$query);
    if($result)
    {
        header("location:view.php");
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}
else
{
    header("location:view.php");
}
