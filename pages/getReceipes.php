<?
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>What do we eat tonight ?</title>
    <link rel="stylesheet" type="text/css" href="getReceipes.css">
    <link rel="shortcut icon" href="../imageWebsite/logov2.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </script>
</head>

<body>
<?php
    include 'sideMenu.php';
    $db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
    mysqli_select_db($db, 'cooking') or die(mysqli_error($db));

    $ingredients = "";
    $query = 'SELECT
            ingredient_id
        FROM 
            ingredient
        ORDER BY    
            ingredient_id';
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    while ($row = mysqli_fetch_array($result)) {
        extract($row);
        if (isset($_POST[$ingredient_id])) {
            if ($ingredients == "") {
                $ingredients = $ingredient_id;
            } else {
                $ingredients = $ingredients . "," . $ingredient_id;
            }
        }
    }
    $query = "SELECT
            receipes_name, receipes_ingredient, receipes_image, receipes_step1,receipes_step2,receipes_step3,receipes_step4,receipes_step5,receipes_step6,receipes_step7,receipes_step8,receipes_step9,receipes_step10
        FROM
            receipes
        WHERE
            receipes_ingredient = '{$ingredients}'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    while ($row = mysqli_fetch_array($result)) {
        extract($row);
        echo "<section id=\"$receipes_name\">
                    <aside id=\"$receipes_name\">
                        <img src=\"$receipes_image\" class=\"image-receipe\">
                    </aside>
                    <article id=\"$receipes_name\">
                        <h2 class=\"receipe-name\">$receipes_name</h2>
                        <div class=\"div-step\">
                            <p class=\"numb\">Step 1: </p>
                            <p class=\"step-text\">$receipes_step1
                        </div>";
        if ($receipes_step2 != "") {
            echo "<div class=\"div-step\">
                        <p class=\"numb\">Step 2: </p>
                        <p class=\"step-text\">$receipes_step2
                    </div>";
            if ($receipes_step3 != "") {
                echo "<div class=\"div-step\">
                            <p class=\"numb\">Step 3: </p>
                            <p class=\"step-text\">$receipes_step3
                        </div>";
                if ($receipes_step4 != "") {
                    echo "<div class=\"div-step\">
                            <p class=\"numb\">Step 4: </p>
                            <p class=\"step-text\">$receipes_step4
                        </div>";
                    if ($receipes_step5 != "") {
                        echo "<div class=\"div-step\">
                                    <p class=\"numb\">Step 5: </p>
                                    <p class=\"step-text\">$receipes_step5
                            </div>";
                        if ($receipes_step6 != "") {
                            echo "<div class=\"div-step\">
                                    <p class=\"numb\">Step 6: </p>
                                    <p class=\"step-text\">$receipes_step6
                                </div>";
                            if ($receipes_step7 != "") {
                                echo "<div class=\"div-step\">
                                        <p class=\"numb\">Step 7: </p>
                                        <p class=\"step-text\">$receipes_step7
                                    </div>";
                                if ($receipes_step8 != "") {
                                    echo "<div class=\"div-step\">
                                            <p class=\"numb\">Step 8: </p>
                                            <p class=\"step-text\">$receipes_step8
                                        </div>";
                                    if ($receipes_step9 != "") {
                                        echo "<div class=\"div-step\">
                                                <p class=\"numb\">Step 9: </p>
                                                <p class=\"step-text\">$receipes_step9
                                            </div>";
                                        if ($receipes_step10 != "") {
                                            echo "<div class=\"div-step\">
                                                    <p class=\"numb\">Step 10: </p>
                                                    <p class=\"step-text\">$receipes_step10
                                                </div>";
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        echo "</article></section>";
    }
?>