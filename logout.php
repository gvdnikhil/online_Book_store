<?php
session_start();
session_destroy();
header("Location: index.php");
exit;
?>


<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <!-- Add your CSS styling here -->
 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        h1 {
            color: #333;
        }
        
        .welcome-message {
            margin-bottom: 20px;
        }
        
        .logout-form {
            display: inline-block;
        }
        
        .logout-button {
            padding: 10px 20px;
            background-color: #f44336;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
     <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p class="welcome-message">This is the dashboard page. You are logged in.</p>
    <form class="logout-form" method="post" action="logout.php">
        <input class="logout-button" type="submit" value="Logout">
    </form>
</body>
</html>
