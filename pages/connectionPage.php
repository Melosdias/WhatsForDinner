<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'createDatabaseUser.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>What do we eat tonight ?</title>
    <link rel="stylesheet" type="text/css" href="connectionPage.css">
    <link rel="shortcut icon" href="../imageWebsite/logov2.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<nav>
    <h1>What do we eat tonight?</h1>
</nav>

<body>
    <form action="connection.php" method="post" enctype="multipart/form-data">
        <legend>Welcome<br/>Please login</legend>
        <div>
            Username : <input type="text" id="username" name="username" />
        </div>
        <div>
            Password : <input type="password" id="password" name="password" />
        </div>
        <input type="submit" id="submit-button" value="Connexion">
    </form>
    <form action="createUserPage.php" method="post" enctype="multipart/form-data">
        <input type="submit" id="sign-up-button" value="Sign up">
    </form>
</body>