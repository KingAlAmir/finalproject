<?php

require_once("connection.php");

if(isset($_GET['Del']))
{
    $DoctorID = $_GET['Del'];
    $query = " delete from doctor where DoctorID = '".$DoctorID."'";
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
