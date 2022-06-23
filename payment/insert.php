<?php

require_once("connection.php");

if(isset($_POST['submit']))
{
    if(empty($_POST['ID']) || empty($_POST['Adm']) || empty($_POST['Pat']) || empty($_POST['Amo']) || empty($_POST['Pay']))
    {
        echo ' Please Fill in the Blanks ';
    }
    else
    {
        $PaymentCode = $_POST['ID'];
        $AdmissionID = $_POST['Adm'];
        $PatientID = $_POST['Pat'];
        $AmountPaid = $_POST['Amo'];
        $PaymentDate = $_POST['Pay'];

        $query = " insert into payment (PaymentCode,AdmissionID,PatientID,AmountPaid,PaymentDate) values('$PaymentCode','$AdmissionID','$PatientID','$AmountPaid','$PaymentDate')";
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