<?php

require_once("connection.php");

if(isset($_POST['submit']))
{
    if(empty($_POST['ID']) || empty($_POST['Patient']) || empty($_POST['War']) || empty($_POST['AdmDate']) || empty($_POST['DisDate']) || empty($_POST['Stat']) || empty($_POST['Des']))
    {
        echo ' Please Fill in the Blanks ';
    }
    else
    {
        $AdmissionID = $_POST['ID'];
        $PatientID = $_POST['Patient'];
        $WardID = $_POST['War'];
        $AdmissionDate = $_POST['AdmDate'];
        $DischargeDate = $_POST['DisDate'];
        $Status = $_POST['Stat'];
        $Description = $_POST['Des'];

        $query = " insert into admission (AdmissionID,PatientID,WardID,AdmissionDate,DischargeDate,Status,Description) values('$AdmissionID','$PatientID','$WardID','$AdmissionDate','$DischargeDate','$Status','$Description')";
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