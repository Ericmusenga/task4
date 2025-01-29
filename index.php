<?php
// src/header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        /* Container */
        .container {
            width: 40%;
            margin: 100px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Heading */
        h2 {
            color: #333;
        }

        /* Navigation */
        nav {
            margin-top: 20px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
        }

        nav ul li a:hover {
            color: #0056b3;
        }

        /* Form Styling */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input {
            width: 80%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Buttons */
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 15px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Logout Button */
        .logout-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .logout-button:hover {
            background-color: #c82333;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <h2>Welcome to the Hospital Management System</h2>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="registration.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
