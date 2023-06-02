<?php
echo 'Coucou';
$db = mysqli_connect('localhost', 'root', '') or die ('Unable to connect. Check your connection parameters.');
$query = 'CREATE DATABASE IF NOT EXISTS cooking';
mysqli_query($db, $query) or die(mysqli_error($db));

mysqli_select_db($db, 'cooking') or die(mysqli_error($db));
$query = 'CREATE TABLE IF NOT EXISTS user (
    user_id     INTEGER UNSIGNED    NOT NULL AUTO_INCREMENT,
    username    VARCHAR(255)        NOT NULL,
    passw       VARCHAR(255)        NOT NULL,

    PRIMARY KEY (user_id)
    )
    ENGINE=MyISAM';
mysqli_query($db, $query) or die(mysqli_error($db));

$query = 'INSERT IGNORE INTO user
                (user_id, username, passw)
            VALUES
                (1, "host", "1234")';
mysqli_query($db, $query) or die(mysqli_error($db));
?>