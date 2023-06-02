<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_COOKIE["user"])) {
    header('Location:connectionPage.php');
    exit();
}
$db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'cooking') or die(mysqli_error($db));

$name = $_POST["name"];
$ingredients = "";
$query = 'SELECT
            ingredient_id
        FROM 
            ingredient
        ORDER BY 
            ingredient_id';
$result = mysqli_query($db, $query) or die(mysqli_error($db));
while ($row = mysqli_fetch_array(($result))) {
    extract($row);
    if (isset($_POST[$ingredient_id])) {
        if ($ingredients == "") {
            $ingredients = $ingredient_id;
        } else {
            $ingredients = $ingredients . "," . $ingredient_id;
        }
    }
}
$folder = "../receipes/";
$file = $name.".jpg";
echo $file;
if (isset($_FILES['picture'])) {
    move_uploaded_file($_FILES['picture']['tmp_name'], $folder . $file);
}
$steps = array("", "", "", "", "", "", "", "", "", "");
for ($i = 1; $i <= 10; $i++) {
    if (isset($_POST["step" . $i])) {
        $steps[$i - 1] = $_POST["step" . $i];
    } else {
        break;
    }
}

$query = "INSERT IGNORE INTO receipes
            (receipes_name, receipes_ingredient, receipes_image, receipes_step1,receipes_step2,receipes_step3,receipes_step4,receipes_step5,receipes_step6,receipes_step7,receipes_step8,receipes_step9,receipes_step10)
        VALUES
            ('$name', '$ingredients', '$folder$file','$steps[0]', '$steps[1]','$steps[2]','$steps[3]','$steps[4]','$steps[5]','$steps[6]','$steps[7]','$steps[8]','$steps[9]')";
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
        alert("Your receipe has been sent thanks you");
    </script>
</head>

<body>
    <?php include 'addReceipe.php'; ?>
</body>