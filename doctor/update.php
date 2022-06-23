<?php

require_once("connection.php");

if(isset($_POST['update']))
{
    $DoctorID = $_POST['ID'];
    $LName = $_POST['LastName'];
    $FName = $_POST['FirstName'];
    $StreetAddress = $_POST['Address'];
    $Suburb = $_POST['Sub'];
    $City = $_POST['Cit'];
    $PhoneNo = $_POST['Phone'];
    $Speciality = $_POST['Special'];
    $Salary = $_POST['Sal'];

    $query = " update doctor set DoctorID = '".$DoctorID."', LName='".$LName."',FName='".$FName."', StreetAddress='".$StreetAddress."', Suburb='".$Suburb."', City='".$City."', Speciality='".$Speciality."', Salary='".$Salary."' where DoctorID='".$DoctorID."'";
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