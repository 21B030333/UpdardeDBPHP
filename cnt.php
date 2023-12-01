<?php
session_start();

if (!isset($_SESSION['cnt'])) {
    $_SESSION['cnt'] = 0;
    $message = "You have not already restarted this page";
} else {
    $_SESSION['cnt']++;
    $message = "You have restarted this page {$_SESSION['cnt']} time(s)";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Counter</title>
</head>
<body>
    <p><?php echo $message; ?></p>
</body>
</html>
