<?php
include 'includes/auth.php';
include 'includes/db.php';

// Optional: Fetch username from DB if you want it to say "Welcome, [Name]!"
$user_id = $_SESSION['user_id'];
$username = "User";

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
  <title>Dashboard - Wanderly</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f8;
      text-align: center;
      padding-top: 80px;
    }
    h1 {
      font-size: 28px;
      margin-bottom: 40px;
    }
    .nav-buttons {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }
    a.button {
      padding: 12px 24px;
      background-color: #5c67f2;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      font-size: 16px;
      margin: 10px;
    }
    a.button:hover {
      background-color: #4a54e1;
    }
    #session-timer {
      position: fixed;
      top: 10px;
      right: 10px;
      background-color: #5c67f2;
      color: white;
      padding: 10px 15px;
      border-radius: 6px;
      font-size: 14px;
      z-index: 999;
    }
  </style>
</head>
<body>

  <div id="session-timer">
    Session Time Left: <span id="timer">15:00</span>
  </div>

  <h1>Welcome, <?= htmlspecialchars($username) ?>!</h1>

  <div class="nav-buttons">
    <a class="button" href="quiz.html">Take Quiz</a>
    <a class="button" href="results.html">View Results</a>
    <a class="button" href="resources.html">Career Resources</a>
    <a class="button" href="tracker.html">Goal Tracker</a>
    <a class="button" href="logout.php">Logout</a>
  </div>

  <script>
    let countdown = 900; // 15 minutes in seconds

    function updateTimer() {
      const minutes = Math.floor(countdown / 60);
      const seconds = countdown % 60;
      document.getElementById("timer").textContent =
        `${minutes}:${seconds.toString().padStart(2, '0')}`;

      if (countdown === 120) {
        alert("⚠️ You will be logged out in 2 minutes due to inactivity.");
      }

      if (countdown <= 0) {
        alert("Session expired. You are being logged out.");
        window.location.href = "logout.php";
      }

      countdown--;
    }

    setInterval(updateTimer, 1000);
  </script>

</body>
</html>
