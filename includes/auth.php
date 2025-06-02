<?php
// Only start session if it's not already active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set timeout in seconds (15 minutes)
$timeout = 900;

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Check session activity time
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $timeout)) {
    session_unset();
    session_destroy();
    header("Location: login.php?timeout=1");
    exit;
}

// Update last activity timestamp
$_SESSION['LAST_ACTIVITY'] = time();
?>
