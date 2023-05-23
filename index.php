<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online book store Login Page</title>
    <!-- Add your CSS styling here -->
<style>
       body {
            font-family: Arial, sans-serif;
            background-color: #222;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 300px;
            padding: 20px;
            background-color: #333;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            background-color: #444;
            border: none;
            border-radius: 3px;
            color: #fff;
            box-sizing: border-box; /* Added box-sizing property */
        }

        input[type="text"]::placeholder,
        input[type="password"]::placeholder {
            color: #999;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            border: none;
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <h1>Login Page</h1>
    <?php
    // Display error message if any
    if (isset($_SESSION['error'])) {
        echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']);
    }
    ?>
     <form method="post" action="login.php">
        <label for="username"></label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required><br>
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
