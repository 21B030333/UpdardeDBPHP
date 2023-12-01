<?php
session_start();
if(!isset($_SESSION['email'])){
    $_SESSION['email'] = $_POST['email'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name = "email" id = "email" value = "<?php echo $_SESSION['email'] ?> ">
        <input type="text" name = "name" id = "name" placeholder = "enter name">
        <input type="password" name = "password" id = "password" placeholder="enter password">
        <button>sumbit</button>
        
    </form>
</body>
</html>