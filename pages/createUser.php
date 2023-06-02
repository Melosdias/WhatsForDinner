<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'cooking') or die(mysqli_error($db));

$username = $_POST['username'];
$query = "SELECT 
            username
        FROM 
            user
        WHERE 
            username = '{$username}'";
$result = mysqli_query($db, $query);
if (empty(mysqli_fetch_array($result))) {
    $password = $_POST["password"];
    $query = "INSERT IGNORE INTO user
            (username, passw)
        VALUES
            ('$username', '$password')";

    $result = mysqli_query($db, $query);
    echo "<script>
            alert(\"You have been sign up. Please login\");
            </script>";
    include 'connectionPage.php';
} else {
    echo "<script>
            alert(\"This username is not availaible\");
            </script>";
    include 'createUser.php';
}