<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">

    <style>
        /* CSS to set background image */
        body {
            /* Add your JPG image path and set properties */
            background-image: url('111.jpg');
            /* Adjust background properties as needed */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        /* CSS to make the card transparent */
        .transparent-card {
            background-color: rgba(255, 255, 255, 0.5); /* Adjust the opacity as needed */
            border: none; /* Remove border */
        }
    </style>
</head>
<body class="bg-warning">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 rounded-0" style="background-color: rgba(255, 255, 255, 0.9);">
                    <div class="card-header bg-warning text-white">
                        <h1 class="display-4 text-center">Welcome!</h1>
                    </div>
                    <div class="card-body">
                        <h2 class="display-2 text-center text-danger">User</h2>
                    </div>
                    <div class="card-footer">
                        <a href="loginform.php" class="btn btn-outline-danger d-grid gap-2 col-6 mx-auto">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>