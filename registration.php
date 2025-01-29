<?php
// src/index.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hospital Management System</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<?php
// src/register.php
?>
<!DOCTYPE html>
<html>
<body>
   
<h2>Welcome to the Hospital Management System</h2>
<h2>            <br><br></h2>
    <form action="register_process.php" method="POST">
        <label>First Name:</label>
        <input type="text" name="first_name" required><br>
        <label>Last Name:</label>
        <input type="text" name="last_name" required><br>
        <label>Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Register</button>
    </form>
    <a href="login.php">Already have an account? Login</a>
</body>
</html>