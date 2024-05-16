<?php
// Start the PHP session and include the database connection file
session_start();
include "db_conn.php";

// Check if the username and password are submitted via POST method
if (isset($_POST['uname']) && isset($_POST['password'])) {

    // Function to sanitize and validate input data
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    
    // Retrieve and validate the submitted username and password
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    $user_data = "uname=" . $uname;  // Additional user information can be added here
    // Check if the username or password fields are empty
    if (empty($uname)) {
        header("Location: Loginform.php?error=User Name is required&$user_data");
        exit();
    }else if (empty($pass)) {
        header("Location: Loginform.php?error=Password is required");
        exit();
    }else {
         // Construct SQL query to retrieve user data based on username and password
        $sql = "SELECT * FROM user WHERE username='$uname'";
        
        // Execute the SQL query
        $result = mysqli_query($conn, $sql);

        // Check if exactly one row is returned
        if (mysqli_num_rows($result) === 1) {

            // Fetch the user data
            $row = mysqli_fetch_assoc($result);

            // verify the password  with hashed password in database
            if (password_verify($pass, $row["password"])) {

                // verify the email if its valid or not
                if($row['Is_verified'] == 0){
                    header("Location: Loginform.php?error=Email is not valid.");
                    exit();
                }
                // Set session variables for the user   
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['Email'] = $row['Email'];
                $_SESSION['v_code'] = $row['Verification_code'];

                // Redirect to the home page upon successful login
                header("Location: home.php");
                exit();
            }else{
                 // Redirect back to the login form with an error message for incorrect credentials
                header("Location: Loginform.php?error=Incorrect User name or password");
                exit();
            } 
        }else {
            // Redirect back to the login form with an error message for incorrect credentials
            header("Location: Loginform.php?error=Incorrect User name or password");
            exit();
        }
    }
}else {
     // Redirect to the login form if no form data is submitted
    header("Location: Loginform.php");
    exit();
}
