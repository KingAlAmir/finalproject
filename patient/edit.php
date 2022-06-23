<?php

require_once("connection.php");
$PatientID = $_GET['GetID'];
$query = " select * from patient where PatientID='".$PatientID."'";
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
{
    $PatientIDID = $row['PatientID'];
    $LName = $row['LastName'];
    $FName = $row['FirstName'];
    $StreetAddress = $row['Address'];
    $Suburb = $row['Sub'];
    $City = $row['Cit'];
    $Email = $row['email'];
    $PhoneNo = $row['Phone'];
    $InsuranceCode = $row['Code'];
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

                    <form action="update.php?ID=<?php echo $PatientID ?>" method="post">
                        <input type="text" class="form-control mb-2" placeholder=" ID " name="ID" value="<?php echo $PatientID ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Last Name " name="LastName" value="<?php echo $LName ?>">
                        <input type="text" class="form-control mb-2" placeholder=" First Name " name="FirstName" value="<?php echo $FName ?>">
                        <input type="text" class="form-control mb-2" placeholder=" StreetAddress " name="Address" value="<?php echo $StreetAddress ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Suburb " name="Sub" value="<?php echo $Suburb ?>">
                        <input type="text" class="form-control mb-2" placeholder=" City " name="Cit" value="<?php echo $City ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Email " name="email" value="<?php echo $Email ?>">
                        <input type="text" class="form-control mb-2" placeholder=" PhoneNumber " name="Phone" value="<?php echo $PhoneNo ?>">
                        <input type="text" class="form-control mb-2" placeholder=" Insurance Code " name="Code" value="<?php echo $InsuranceCode ?>">
                        <button class="btn btn-primary" name="update">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>