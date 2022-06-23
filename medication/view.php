<?php

require_once("connection.php");
$query = " select * from medication ";
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
            opacity: 0;
            transition: all 0.8s
        }

        .button:active:after {
            padding: 0;
            margin: 0;
            opacity: 1;
            transition: 0s
        }
    </style>
</head>
<body class="bg-dark">
<div class="card-title">
    <h3 class="bg-success text-white text-center py-3"> Medication Report </h3>
</div>
<div class="container">
    <div class="row">
        <div class="col m-auto">
            <div class="card mt-5">
                <table class="table table-bordered">
                    <tr>
                        <td> Medication ID </td>
                        <td> Medication Name </td>
                        <td> Cost Per Unit </td>
                        <td> Currency </td>
                        <td> Edit  </td>
                        <td> Delete </td>
                    </tr>

                    <?php

                    while($row=mysqli_fetch_assoc($result))
                    {
                        $MedicationID = $row['MedicationID'];
                        $MedicationName = $row['MedicationName'];
                        $CostPerUnit = $row['CostPerUnit'];
                        $Currency = $row['Currency'];
                        ?>
                        <tr>
                            <td><?php echo $MedicationID ?></td>
                            <td><?php echo $MedicationName ?></td>
                            <td><?php echo $CostPerUnit ?></td>
                            <td><?php echo $Currency ?></td>
                            <td><a href="edit.php?GetID=<?php echo $MedicationID ?>">Edit</a></td>
                            <td><a href="delete.php?Del=<?php echo $MedicationID ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
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