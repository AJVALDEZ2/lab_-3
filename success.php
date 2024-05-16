<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
    <!-- Link to external stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <form action="verify.php" method="post" class="border shadow p-3 rounded" style="width: 500px;">
            <h1 class="text-center p-3">Email Verification</h1>
            <div class="container">
                <!-- Display a greeting message with the username -->
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger">
                        <?php echo $_GET['error']; ?>
                    </div>
                <?php } ?>
                <?php if (isset($_GET['success'])) { ?>
                    <div class="alert alert-success">
                        <?php echo $_GET['success']; ?>
                    </div>
                <?php } ?>

                <div class="mb-3">
                    <i class="bi bi-shield-lock-fill"></i>
                    <label for="Verification_code" class="form-label">Verification Code</label>
                    <input type="text" class="form-control" name="v_code" placeholder="Code*">
                </div>

                <!-- Submit button -->
                <div class="text-center mt-3">
                    <button class="btn btn-primary float-end" type="submit">Submit</button>
                </div>

                
                <div>
                    <a href="Loginform.php">Login</a>
                </div>
                <style>
        body {
            background-image: url('44443.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            color: white; 
        }
    </style>

                

            </div>
        </form>
    </div>
</body>
</html>
