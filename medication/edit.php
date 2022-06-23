<?php

require_once("connection.php");
$MedicationID = $_GET['GetID'];
$query = " select * from medication where MedicationID='".$MedicationID."'";
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
{
    $MedicationID = $row['MedicationID'];
    $MedicationName = $row['MedicationName'];
    $CostPerUnit = $row['CostPerUnit'];
    $Currency = $row['Currency'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card mt-5">
                <div class="card-title">
                    <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                </div>
                <div class="card-body">

                    <form action="update.php?ID=<?php echo $MedicationID ?>" method="post">
                        <input type="text" class="form-control mb-2" placeholder=" Medication ID " name="ID" value="<?php echo $MedicationID ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Medication Name " name="Med" value="<?php echo $MedicationName ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Cost" name="Cos" value="<?php echo $CostPerUnit ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Currency " name="Cur" value="<?php echo $Currency ?>">
                        <button class="btn btn-primary" name="update">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>