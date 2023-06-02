<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include("allReceipes.php");
if (!isset($_COOKIE["user"])) {
    header('Location:connectionPage.php');
    exit();
}
$db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'cooking') or die(mysqli_error($db));
$query = "SELECT
            receipes_id, receipes_name
        FROM
            receipes";
$result = mysqli_query($db, $query) or die(mysqli_error($db));
while ($row = mysqli_fetch_array($result)) {
    extract($row);
    if (array_key_exists($receipes_name, $_POST)) {
        $user = $_COOKIE["user"];
        $receipesNumb = $receipes_id;
        $query = "SELECT 
                    username
                FROM
                    favReceipes
                WHERE
                    username = '{$user}'";

        $result2 = mysqli_query($db, $query) or die(mysqli_error($db));
        if (empty(mysqli_fetch_array($result2))) {
            $query = "INSERT INTO favReceipes
                        (username, receipes)
                    VALUES
                        ('{$user}', '{$receipesNumb}')";
            mysqli_query($db, $query) or die(mysqli_error($db));
        } else {
            $query = "UPDATE favReceipes
                    SET receipes = CONCAT(receipes, ',', '{$receipesNumb}')
                    WHERE username = '{$user}'";
            mysqli_query($db, $query) or die(mysqli_error($db));
        }
        break;
    }
}