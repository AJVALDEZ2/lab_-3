<?php
// Include the database connection file
include "db_conn.php";

// Start the session
session_start();

// If the verification code is present in the POST request
if (isset($_POST['v_code'])) {

    // Function to sanitize and validate input data
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Retrieve and validate the submitted verification code
    $v_code = validate($_POST['v_code']);

    if (empty($v_code)) {
        header("Location: success.php?error=Verification code is required");
        exit();
    }else if(!ctype_digit($v_code)) {
        header("Location: success.php?error=Verification code must contain numbers only");
        exit();
    }

    // Check if the verification code is exactly 6 digits long
    if (ctype_digit($v_code) && strlen($v_code) == 6) {
        // Prepare the SQL query to select the user with the given verification code
        $query = "SELECT * FROM user WHERE Verification_code = '$v_code'";

        // Execute the query
        $result = mysqli_query($conn, $query);

        if($result) {  // If the query was successful
            if(mysqli_num_rows($result) == 1) {  // If a single row is returned
                $row = mysqli_fetch_assoc($result);  // Fetch the user data as an associative array

                if($row['Is_verified'] == 0) {    // If the user is not already verified
                    // Get the email of the user
                    $email = $row['Email'];
                    // Prepare the SQL query to update the user's verification status
                    $update ="UPDATE user SET Is_verified='1' WHERE Email = '$email'";

                    if(mysqli_query($conn, $update)) {
                        header("Location: Loginform.php?success=Email validated successfully");
                        exit();
                    } 
                } else {
                    header("Location: success.php?success=Email is already registered");
                    exit();
                }
            } 
        } 
    } else {
        header("Location: success.php?error=Verification does not match");
        exit();
    }
}
