<?php

require_once("connection.php");

if(isset($_POST['submit']))
{
    if(empty($_POST['ID']) || empty($_POST['LastName']) || empty($_POST['FirstName']) || empty($_POST['Address']) || empty($_POST['Sub']) || empty($_POST['Cit']) || empty($_POST['email']) || empty($_POST['Phone']) || empty($_POST['Code']))
    {
        echo ' Please Fill in the Blanks ';
    }
    else
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

        $query = " insert into patient (PatientID,LName,FName,StreetAddress,Suburb,City,Email,PhoneNo,InsuranceCode) values('$PatientID','$LName','$FName','$StreetAddress','$Suburb','$City','$Email','$PhoneNo','$InsuranceCode')";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo '  Please Check Your Query ';
        }
    }
}
else
{
    header("location:index.php");
}



?>