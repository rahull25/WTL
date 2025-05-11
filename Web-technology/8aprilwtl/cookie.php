<?php
// Set cookie
setcookie("user", "Vikrant", time() + 3600, "/");

// Check if cookie is set
echo "<p>Setting cookie...</p>";
?>

<html>
<body>
    <?php
    if (isset($_COOKIE["user"])) {
        echo "<p>Welcome, " . $_COOKIE["user"] . "</p>";
    } else {
        echo "<p>Cookie not available yet. Refresh the page.</p>";
    }
    ?>
</body>
</html>
