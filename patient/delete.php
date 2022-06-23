<?php

require_once("connection.php");

if(isset($_GET['Del']))
{
    $PatientID = $_GET['Del'];
    $query = " delete from patient where PatientID = '".$PatientID."'";
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
