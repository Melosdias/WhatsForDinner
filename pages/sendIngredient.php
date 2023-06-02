<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'cooking') or die(mysqli_error($db));

$name = $_POST["name"];
$type = "";
if (isset($_POST["SWEET-PRODUCT"])) {
    $type = "SWEET-PRODUCT";
}
if (isset($_POST["VEGETABLE"])) {
    $type = "VEGETABLE";
}
if (isset($_POST["FRUITS"])) {
    $type = "FRUITS";
}
if (isset($_POST["DAIRY-PRODUCT"])) {
    $type = "DAIRY-PRODUCT";
}
if (isset($_POST["STARCHY-FOOD"])) {
    $type = "STARCHY-FOOD";
}
if (isset($_POST["CONDIMENT"])) {
    $type = "CONDIMENT";
}
if (isset($_POST["SEAFOOD"])) {
    $type = "SEAFOOD";
}
if (isset($_POST["MEAT"])) {
    $type = "MEAT";
}
if (isset($_FILES['image'])) {
    $folder; 
    $file = $name . ".jpg";
    if ($type == "SWEET-PRODUCT") {
        $folder = "../ingredients/chocolatAndCo/";
    }
    if ($type == "VEGETABLE") {
        $folder = "../ingredients/vegetable/";
    }
    if ($type == "FRUITS") {
        $folder = "../ingredients/fruits/";
    }
    if ($type == "DAIRY-PRODUCT") {
        $folder = "../ingredients/milk/";
    }
    if ($type == "STARCHY-FOOD") {
        $folder = "../ingredients/starchyFood/";
    }
    if ($type == "CONDIMENT") {
        $folder = "../ingredients/herb/";
    }
    if ($type == "SEAFOOD") {
        $folder = "../ingredients/fish/";
    }
    if ($type == "MEAT") {
        $folder = "../ingredients/meat/";
    }
    move_uploaded_file($_FILES['image']['tmp_name'], $folder . $file);
}
$query = "INSERT IGNORE INTO ingredient
            (ingredient_name, ingredient_type, ingredient_image)
        VALUES
            ('$name', '$type', '$folder$file')";

mysqli_query($db, $query) or die(mysqli_error($db));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>What do we eat tonight ?</title>
    <link rel="stylesheet" type="text/css" href="addIngredient.css">
    <link rel="shortcut icon" href="../imageWebsite/logov2.ico" />
    <script>
        alert("Your ingredient has been sent thanks you");
    </script>
</head>

<body>
    <?php include 'addIngredient.php'; ?>
</body>