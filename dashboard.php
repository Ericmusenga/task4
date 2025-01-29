<?php
// Start the session to check if the user is logged in
session_start();

// Check if the user is logged in, if not, redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Fetch user details from session (you can adjust this based on your needs)
$user_firstname = $_SESSION['user_firstname'];
$user_lastname = $_SESSION['user_lastname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your own styles -->
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($user_firstname) . ' ' . htmlspecialchars($user_lastname); ?>!</h1>
        
        <p>You are logged in to your dashboard. Here you can manage your account, view data, etc.</p>
        
        <!-- Add any dashboard widgets or content here -->
        <div class="dashboard-content">
            <h2>Your Account</h2>
            <p>Here you can update your details, view your activity, or log out.</p>
        </div>

        <a href="logout.php" class="logout-button">Logout</a>
    </div>
</body>
</html>
