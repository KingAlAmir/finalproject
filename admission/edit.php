<?php

require_once("connection.php");
$AdmissionID = $_GET['GetID'];
$query = " select * from admission where AdmissionID='".$AdmissionID."'";
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
{
    $AdmissionID = $row['AdmissionID'];
    $PatientID = $row['PatientID'];
    $WardID = $row['WardID'];
    $AdmissionDate = $row['AdmissionDate'];
    $DischargeDate = $row['DischargeDate'];
    $Status = $row['Status'];
    $Description = $row['Description'];
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

                    <form action="update.php?ID=<?php echo $AdmissionID ?>" method="post">
                        <input type="number" class="form-control mb-2" placeholder=" Admission ID " name="ID" value="<?php echo $AdmissionID ?>">
                        <input type="number" class="form-control mb-2" placeholder=" Patient ID " name="Patient" value="<?php echo $PatientID ?>">
                        <input type="number" class="form-control mb-2" placeholder=" Ward ID " name="War" value="<?php echo $WardID ?>">
                        <input type="date" class="form-control mb-2" placeholder=" Admission Date " name="AdmDate" value="<?php echo $AdmissionDate ?>">
                        <input type="date" class="form-control mb-2" placeholder=" Discharge Date " name="DisDate" value="<?php echo $DischargeDate ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Status " name="Stat" value="<?php echo $Status ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Description " name="Des" value="<?php echo $Description ?>">
                        <button class="btn btn-primary" name="update">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>