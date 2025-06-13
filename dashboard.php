<?php
session_start();

// Set timeout duration (15 minutes)
$timeout = 900;

// Check login status
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Session timeout logic
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $timeout)) {
    session_unset();
    session_destroy();
    header("Location: login.php?timeout=1");
    exit;
}
$_SESSION['LAST_ACTIVITY'] = time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Wanderly</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #dfe9f3, #aec0d6);
            color: #333;
            text-align: center;
            padding-top: 40px;
        }

        h1 {
            font-size: 2.2rem;
        }

        .quote {
            font-weight: 600;
            font-size: 1.2rem;
            margin-top: 10px;
        }

        .subquote {
            font-style: italic;
            color: #555;
            margin-bottom: 30px;
        }

        .nav-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .nav-buttons a {
            background-color: #6c63ff;
            color: #fff;
            padding: 12px 22px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .nav-buttons a:hover {
            background-color: #5a54d1;
        }

        #session-info {
            position: absolute;
            top: 15px;
            right: 20px;
            text-align: right;
        }

        #username {
            font-size: 0.9rem;
            color: #444;
            margin-bottom: 4px;
        }

        #timer {
            background-color: #6c63ff;
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: bold;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>
    <div id="session-info">
        <?php if (isset($_SESSION['username'])): ?>
            <div id="username">User: <?= htmlspecialchars($_SESSION['username']) ?></div>
        <?php endif; ?>
        <div id="timer">Session Time Left: 15:00</div>
    </div>

    <h1>Welcome!</h1>
    <p class="quote">Let’s build your future—one step at a time.</p>
    <p class="subquote">Consistency beats perfection.</p>

    <div class="nav-buttons">
        <a href="quiz.html">Take Quiz</a>
        <a href="results.html">View Results</a>
        <a href="resources.html">Career Resources</a>
        <a href="tracker.html">Goal Tracker</a>
        <a href="logout.php">Logout</a>
    </div>

    <script>
        let countdown = 900;
        const timerDisplay = document.getElementById("timer");

        function updateTimer() {
            const minutes = Math.floor(countdown / 60);
            const seconds = countdown % 60;
            timerDisplay.textContent = `Session Time Left: ${minutes}:${seconds < 10 ? "0" : ""}${seconds}`;

            if (countdown === 120) {
                alert("You will be logged out in 2 minutes due to inactivity.");
            }

            if (countdown <= 0) {
                alert("Session expired. Redirecting to login.");
                window.location.href = "logout.php";
            }

            countdown--;
        }

        setInterval(updateTimer, 1000);
    </script>
</body>
</html>
