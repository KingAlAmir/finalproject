<?php

require_once("connection.php");

if(isset($_POST['update']))
{
    $PatientID = $_POST['ID'];
    $LName = $_POST['LastName'];
    $FName = $_POST['FirstName'];
    $StreetAddress = $_POST['Address'];
    $Suburb = $_POST['Sub'];
    $City = $_POST['Cit'];
    $Email = $_POST['email'];
    $PhoneNo = $_POST['Phone'];
    $InsuranceCode = $_POST['Code'];

    $query = " update patient set PatientID = '".$PatientID."', LName='".$LName."',FName='".$FName."', StreetAddress='".$StreetAddress."', Suburb='".$Suburb."', City='" .$City."', Email='".$Email."', InsuranceCode='".$InsuranceCode."'where PatientID='".$PatientID."'";
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