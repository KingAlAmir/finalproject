<?php

require_once("connection.php");

if(isset($_POST['update']))
{
    $MedicationID = $_POST['ID'];
    $MedicationName = $_POST['Med'];
    $CostPerUnit = $_POST['Cos'];
    $Currency = $_POST['Cur'];

    $query = " update medication set MedicationID = '".$MedicationID."', MedicationName='".$MedicationName."',CostPerUnit='".$CostPerUnit."', Currency='".$Currency."' where MedicationID='".$MedicationID."'";
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