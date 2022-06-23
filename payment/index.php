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
                    <h3 class="bg-info text-white text-center py-3"> Payment Registration Form</h3>
                </div>
                <div class="card-body">

                    <form action="insert.php" method="post">
                        <input type="text" class="form-control mb-2" placeholder=" Payment Code " name="ID">
                        <input type="text" class="form-control mb-2" placeholder=" Admission ID " name="Adm">
                        <input type="text" class="form-control mb-2" placeholder=" Patient ID " name="Pat">
                        <input type="text" class="form-control mb-2" placeholder=" Amount Paid " name="Amo">
                        <input type="text" class="form-control mb-2" placeholder=" Payment Date " name="Pay">
                        <button class="btn btn-primary" name="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>