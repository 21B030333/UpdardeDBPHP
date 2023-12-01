<?php
session_start();
if (isset($_POST['country']) && isset($_POST['name'])) {
    $_SESSION['country'] = $_POST['country'];
    $_SESSION['name'] = $_POST['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Country</title>
</head>
<body>

    <?php echo $_SESSION['name']. " ". $_SESSION['country'] ?>
    <a href="index2.php">Back</a>
      
</body>
</html>