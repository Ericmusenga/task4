<?php
// Start session to handle redirects
session_start();

// Include database connection
include('db_connect.php'); // Make sure to define your db connection here

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and collect form data
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $check_email_query = "SELECT * FROM tbl_users WHERE user_email = '$email'";
    $result = mysqli_query($conn, $check_email_query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error'] = 'Email already exists.';
    } else {
        // Insert user data into the table
        $insert_query = "INSERT INTO tbl_users (user_firstname, user_lastname, user_gender, user_email, user_password) 
                         VALUES ('$first_name', '$last_name', '$gender', '$email', '$hashed_password')";
        
        if (mysqli_query($conn, $insert_query)) {
            // Redirect to login page on successful registration
            header('Location: login.php');
            exit;
        } else {
            $_SESSION['error'] = 'Registration failed. Please try again.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>

<h2>Register</h2>

<?php
if (isset($_SESSION['error'])) {
    echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
    unset($_SESSION['error']);
}
?>

<form action="registration.php" method="POST">
    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" required><br><br>
    
    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" required><br><br>
    
    <label for="gender">Gender:</label>
    <select name="gender" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br><br>
    
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" name="password" required><br><br>
    
    <button type="submit">Register</button>
</form>

<p>Already have an account? <a href="login.php">Login here</a></p>

</body>
</html>
