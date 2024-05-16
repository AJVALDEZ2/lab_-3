<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Linking Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        
         <!-- The Loginform link to index using action -->
        <form action="index.php" method="post" class="border shadow p-3 rounded" style="width: 500px;">
            <h1 class="text-center p-3">LOGIN</h1>
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
                <i class="bi bi-people"></i>
                <label for="username" class="form-label">User name</label>
                <input type="text" class="form-control" name="uname" placeholder="username" value="<?php echo $_GET['uname'] ?? ''; ?>">
            </div>

            <!-- Password Input Field -->
            <div class="mb-3">
                <i class="bi bi-lock"></i>
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" name="password" placeholder="password">
            </div>
            <style>
        body {
            background-image: url('77.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            color: white; 
    </style>

            <hr>
            <!-- Login button -->
                        
            <button class="btn btn-primary float-end" type="submit">Login</button>

            <!-- Link for Register form -->
            <div>
                Don't have an account? <a href="registerform.php">Register</a>
            </div>
        </form> 
    </div>
</body>
</html>