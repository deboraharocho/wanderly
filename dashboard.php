<?php
session_start();
include 'includes/auth.php';
include 'includes/db.php';

// Fetch username from database
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT username FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($username);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Dashboard - Wanderly</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-color: #f2f4fa;
      padding-top: 60px;
    }
    h1 {
      margin-bottom: 30px;
    }
    .button {
      display: inline-block;
      margin: 10px;
      padding: 12px 24px;
      background-color: #5c67f2;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      font-size: 16px;
    }
    .button:hover {
      background-color: #4a54e1;
    }
  </style>
</head>
<body>

  <h1>Welcome, <?= htmlspecialchars($username) ?>!</h1>

  <a class="button" href="quiz.html">Take Quiz</a>
  <a class="button" href="results.html">View Results</a>
  <a class="button" href="resources.html">Career Resources</a>
  <a class="button" href="tracker.html">Goal Tracker</a>
  <a class="button" href="logout.php">Logout</a>

</body>
</html>
