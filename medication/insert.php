<?php

require_once("connection.php");

if(isset($_POST['submit']))
{
    if(empty($_POST['ID']) || empty($_POST['Med']) || empty($_POST['Cos']) || empty($_POST['Cur']))
    {
        echo ' Please Fill in the Blanks ';
    }
    else
    {
        $MedicationID = $_POST['ID'];
        $MedicationName = $_POST['Med'];
        $CostPerUnit = $_POST['Cos'];
        $Currency = $_POST['Cur'];

        $query = " insert into medication (MedicationID,MedicationName,CostPerUnit,Currency) values('$MedicationID','$MedicationName','$CostPerUnit','$Currency')";
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