<?php
session_start();
if (!isset($_COOKIE["user"])) {
    header('Location:connectionPage.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>What do we eat tonight?</title>
    <link rel="shortcut icon" href="../imageWebsite/logov2.ico" />
    <link rel="stylesheet" type="text/css" href="resultPage.css">
</head>
<body>
    <?php include 'sideMenu.php';?>
   <h3>Here are the possible recipes with these ingredients :</h3>
</body>
</html>