<?php
session_start();

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}


if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "Vikrant";
    $_SESSION['role'] = "Student";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Session Example</title>
</head>
<body>

<h2>Session in One File</h2>

<?php if (isset($_SESSION['username'])): ?>
    <p>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p>Role: <?php echo $_SESSION['role']; ?></p>
    <a href="?logout=true">Logout</a>
<?php else: ?>
    <p>Session has been destroyed. Refresh the page to start a new session.</p>
<?php endif; ?>

</body>
</html>
