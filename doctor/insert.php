<?php

require_once("connection.php");

if(isset($_POST['submit']))
{
    if(empty($_POST['ID']) || empty($_POST['LastName']) || empty($_POST['FirstName']) || empty($_POST['Address']) || empty($_POST['Sub']) || empty($_POST['Cit']) || empty($_POST['Phone']) || empty($_POST['Special']) || empty($_POST['Sal']))
    {
        echo ' Please Fill in the Blanks ';
    }
    else
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

        $query = " insert into doctor (DoctorID,LName,FName,StreetAddress,Suburb,City,PhoneNo,Speciality,Salary) values('$DoctorID','$LName','$FName','$StreetAddress','$Suburb','$City','$PhoneNo','$Speciality','$Salary')";
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