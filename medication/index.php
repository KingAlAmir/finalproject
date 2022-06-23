<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Registration Form</title>
</head>
<body class="bg-dark">

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card mt-5">
                <div class="card-title">
                    <h3 class="bg-info text-white text-center py-3"> Medication Registration Form</h3>
                </div>
                <div class="card-body">

                    <form action="insert.php" method="post">
                        <input type="text" class="form-control mb-2" placeholder=" Medication ID " name="ID">
                        <input type="text" class="form-control mb-2" placeholder=" Medication Name " name="Med">
                        <input type="text" class="form-control mb-2" placeholder=" Cost " name="Cos">
                        <input type="text" class="form-control mb-2" placeholder=" Currency " name="Cur">
                        <button class="btn btn-primary" name="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>