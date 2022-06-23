<?php

require_once("connection.php");
$query = " select * from admission ";
$result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
    <style>
        .button {
            position: relative;
            background-color: #4CAF50;
            border: none;
            font-size: 22px;
            color: #FFFFFF;
            padding: 20px;
            margin-left: 1450px !important;
            width: 150px;
            text-align: center;
            transition-duration: 0.4s;
            text-decoration: none;
            overflow: hidden;
            cursor: pointer;
            border-radius: 50%;
        }

        .button:after {
            content: "";
            background: #f1f1f1;
            display: block;
            position: absolute;
            padding-top: 300%;
            padding-left: 350%;
            margin-left: -20px !important;
            margin-top: -120%;
            opaStatus: 0;
            transition: all 0.8s
        }

        .button:active:after {
            padding: 0;
            margin: 0;
            opaStatus: 1;
            transition: 0s
        }
    </style>
</head>
<body class="bg-dark">
<div class="card-title">
    <h3 class="bg-success text-white text-center py-3"> Table View </h3>
</div>
<div class="container">
    <div class="row">
        <div class="col m-auto">
            <div class="card mt-5">
                <table class="table table-bordered">
                    <tr>
                        <td> Admission ID </td>
                        <td> Patient ID </td>
                        <td> Ward ID </td>
                        <td> Admission Date </td>
                        <td> Discharge Date </td>
                        <td> Status </td>
                        <td> Description </td>
                        <td> Edit  </td>
                        <td> Delete </td>
                    </tr>

                    <?php

                    while($row=mysqli_fetch_assoc($result))
                    {
                        $AdmissionID = $row['AdmissionID'];
                        $PatientID = $row['PatientID'];
                        $WardID = $row['WardID'];
                        $AdmissionDate = $row['AdmissionDate'];
                        $DischargeDate = $row['DischargeDate'];
                        $Status = $row['Status'];
                        $Description = $row['Description'];
                        ?>
                        <tr>
                            <td><?php echo $AdmissionID ?></td>
                            <td><?php echo $PatientID ?></td>
                            <td><?php echo $WardID ?></td>
                            <td><?php echo $AdmissionDate ?></td>
                            <td><?php echo $DischargeDate ?></td>
                            <td><?php echo $Status ?></td>
                            <td><?php echo $Description ?></td>

                            <td><a href="edit.php?GetID=<?php echo $AdmissionID ?>">Edit</a></td>
                            <td><a href="delete.php?Del=<?php echo $AdmissionID ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                        </tr>
                        <?php
                    }
                    ?>


                </table>
            </div>
        </div>
    </div>
</div>
<button class="button" onclick="location.href='index.php'">Add More</button>
</body>
</html>