<?php

require_once("connection.php");

if(isset($_POST['update']))
{
    $PaymentCode = $_POST['ID'];
    $AdmissionID = $_POST['Adm'];
    $PatientID = $_POST['Pat'];
    $AmountPaid = $_POST['Amo'];
    $PaymentDate = $_POST['Pay'];

    $query = " update payment set PaymentCode = '".$PaymentCode."', AdmissionID='".$AdmissionID."',PatientID='".$PatientID."', AmountPaid='".$AmountPaid."', PaymentDate='".$PaymentDate."' where PaymentCode='".$PaymentCode."'";
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