<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Linking Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Container for registration form -->
    <div class ="container d-flex justify-content-center align-items-center"
         style="min-height: 100vh">
        
         <!-- Registration Form -->
        <form action="register.php"
              method="post"
              class="border shadow p-3 rounded"
              style="width: 500px;">
              <h1 class="text-center p-3">REGISTER</h1>
              <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>
                    
            <!-- First Name Input Field -->
            <div class="mb-3">
                <label for="First_name" class="form-label">Firstname</label>
                <input type="text"
                    class="form-control"
                    name="fname"
                    placeholder="Firstname"
                    value="<?php echo $_GET['fname'] ?? ''; ?>"
                    pattern="[A-Za-z ]+"
                    title="numbers are not allowed!">
            </div>
                    
            <!-- Middle Name Input Field -->
            <div class="mb-3">
                <label for="middle_name" class="form-label">Middle name</label>
                <input type="text"
                    class="form-control"
                    name="mname"
                    placeholder="Middle name / optional"
                    value="<?php echo $_GET['mname'] ?? ''; ?>"
                    pattern="[A-Za-z.]+"
                    title="numbers are not allowed!">
            </div>

            <!-- Last Name Input Field -->
            <div class="mb-3">
                <label for="Last_name" class="form-label">Lastname</label>
                <input type="text"
                    class="form-control"
                    name="lname"
                    placeholder="Lastname"
                    value="<?php echo $_GET['lname'] ?? ''; ?>"
                    pattern="[A-Za-z]+"
                    title="numbers are not allowed!">
            </div>

            <!-- Username Input Field -->
            <div class="mb-3">
                <label for="username" class="form-label">User name</label>
                <input type="text"
                    class="form-control"
                    name="uname"
                    placeholder="User name*"
                    value="<?php echo $_GET['uname'] ?? ''; ?>">
            </div>

            <!-- Email Input Field -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email"
                    class="form-control"
                    name="email"
                    placeholder="Email*"
                    value="<?php echo $_GET['email'] ?? ''; ?>"
                    pattern="^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$"
                    title='please include " . " in  your email!'>
            </div>

            <!-- Password Input Field -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="password*">
            </div>

            <!-- Re-enter Password Input Field -->
            <div class="mb-3">
                <label for="re_password" class="form-label">Re password</label>
                <input type="password" class="form-control" name="repassword" placeholder="Re password*">
            </div>

            <hr>
             <!-- Submit Button -->
            <button class="btn btn-primary float-end" 
                type="submit" 
            >Create account</button>

           
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name='terms'> I agree to the terms and conditions
                    </label>
                </div>
                <style>
        body {
            background-image: url('111.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            color: white; 
        }
    </style>

            <!-- Link to Login Form -->
            <div>
                Already have an account? <a href="Loginform.php">Login</ 
            </div>

        </div>
    
   </form> 
</body>
</html>
