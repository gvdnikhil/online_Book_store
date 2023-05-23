<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
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
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        h1 {
            text-align: center;
            margin-top: 30px;
        }
        
        table {
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        
        th {
            background-color: #333;
            color: #fff;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        tr:hover {
            background-color: #ddd;
        }
        h1 {
            color: #333;
        }
        
        .welcome-message {
            margin-bottom: 20px;
        }
        
        .logout-form {
            position: absolute;
            top: 20px;
            right: 20px;
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
    <h4>Welcome, <?php echo $_SESSION['username']; ?>!</h4>
    <h6>This is the dashboard page. You are logged in.</h6>

    <h1>Welcome to the Online Book Store</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>The Great Gatsby</td>
            <td>F. Scott Fitzgerald</td>
            <td>Classic</td>
            <td>$10</td>
        </tr>
        <tr>
            <td>To Kill a Mockingbird</td>
            <td>Harper Lee</td>
            <td>Fiction</td>
            <td>$12</td>
        </tr>
        <tr>
            <td>1984</td>
            <td>George Orwell</td>
            <td>Science Fiction</td>
            <td>$8</td>
        </tr>
        <!-- Add more books as needed -->
    </table>
    <form class="logout-form" method="post" action="logout.php">
        <input class="logout-button" type="submit" value="Logout">
    </form>

    
</body>
</html>
