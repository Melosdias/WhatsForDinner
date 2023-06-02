<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'cooking') or die(mysqli_error($db));

$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT
                username, passw
            FROM 
                user
            WHERE
                username = '{$username}' AND passw='{$password}'";
$result = mysqli_query($db, $query);
if (empty(mysqli_fetch_array($result))) {
    echo "<script>
                alert(\"Wrong username or password\");
        </script>";
    $_SESSION['username'] = $username;
    $_SESSION['password'] =$password;
    $_SESSION['authuser'] = 1;
    header('Location:connectionPage.php');
    exit();
} else {
    $_SESSION['authuser'] = 0;
    setcookie("user", $username, time()+3600);
    header('Location:mainPage.php');
    exit();
}
?>