<?php

require_once("connection.php");
$PaymentCode = $_GET['GetID'];
$query = " select * from payment where PaymentCode='".$PaymentCode."'";
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
{
    $PaymentCode = $row['PaymentCode'];
    $AdmissionID = $row['AdmissionID'];
    $PatientID = $row['PatientID'];
    $AmountPaid = $row['AmountPaid'];
    $PaymentDate = $row['PaymentDate'];
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

                    <form action="update.php?ID=<?php echo $PaymentCode ?>" method="post">
                        <input type="text" class="form-control mb-2" placeholder=" Payment Code " name="ID" value="<?php echo $PaymentCode ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Admission ID " name="Adm" value="<?php echo $AdmissionID ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Patient ID " name="Pat" value="<?php echo $PatientID ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Amount Paid " name="Amo" value="<?php echo $AmountPaid ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Payment Date " name="Pay" value="<?php echo $PaymentDate ?>">
                        <button class="btn btn-primary" name="update">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>