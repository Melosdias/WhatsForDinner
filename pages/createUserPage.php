<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>What do we eat tonight ?</title>
    <link rel="stylesheet" type="text/css" href="createUser.css">
    <link rel="shortcut icon" href="../imageWebsite/logov2.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<nav>
    <h1>What do we eat tonight?</h1>
</nav>

<body>
    <form action="createUser.php" method="post" enctype="multipart/form-data">
        <legend>Welcome<br /></legend>
        <section>
            <div>
                Username : <input type="text" id="username" name="username" />
            </div>
            <div>
                Password : <input type="password" id="password" name="password" />
            </div>
        </section>
        <input type="submit" id="submit-button" value="Sign Up">
    </form>
</body>