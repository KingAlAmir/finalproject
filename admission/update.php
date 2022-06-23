<?php

require_once("connection.php");

if(isset($_POST['update']))
{
    $AdmissionID = $_POST['ID'];
    $PatientID = $_POST['Patient'];
    $WardID = $_POST['War'];
    $AdmissionDate = $_POST['AdmDate'];
    $DischargeDate = $_POST['DisDate'];
    $Status = $_POST['Stat'];
    $Description = $_POST['Des'];

    $query = " update admission set AdmissionID = '".$AdmissionID."', PatientID='".$PatientID."',WardID='".$WardID."', AdmissionDate='".$AdmissionDate."', DischargeDate='".$DischargeDate."', Status='".$Status."', Description='".$Description."' where AdmissionID='".$AdmissionID."'";
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


?>