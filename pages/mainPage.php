<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_COOKIE["user"])) {
    header('Location:connectionPage.php');
    exit();
} else {
    include 'createDatabase.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>What do we eat tonight ?</title>
    <link rel="stylesheet" type="text/css" href="mainPage.css">
    <link rel="shortcut icon" href="../imageWebsite/logov2.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="mainPage.js">

    </script>
</head>

<body onload="createCollapsible()">
    <?php
    include 'sideMenu.php';
    ?>
    <form action="getReceipes.php" method="post" enctype="mutlipart/form-data" id="fieldset">
        <legend> Choose your ingredients </legend>
        <div id="Chocolate, biscuit and sweet products" class="ingredient">
            <button id="Chocolate, biscuit and sweet products" class="collapsible" type="button">
                Chocolate, biscuit and sweet product
            </button>
            <div id="Chocolate, biscuit and sweet products" class="div-button">
                <?php
                $db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
                mysqli_select_db($db, 'cooking') or die(mysqli_error($db));
                $query = 'SELECT 
                                ingredient_id, ingredient_name, ingredient_type, ingredient_image
                            FROM ingredient
                            WHERE ingredient_type = \'SWEET-PRODUCT\'
                            ORDER BY ingredient_name';
                $AllIngredients = mysqli_query($db, $query) or die(mysqli_error($db));
                while ($row = mysqli_fetch_array($AllIngredients)) {
                    extract($row);
                    echo "<div class=\"container\">
                                <input type=\"checkbox\" class=\"selection\" name=$ingredient_id id=$ingredient_name>
                                <label for=$ingredient_name id=\"label-checkbox\"><img src=$ingredient_image class=\"image-ingredient\">$ingredient_name</label>
                            </div>";
                }
                ?>

            </div>
        </div>
        <div id="Vegetable" class="ingredient">
            <button id="Vegetable" class="collapsible" type="button">
                Vegetable
            </button>
            <div id="Vegetable" class="div-button">
                <?php
                $db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
                mysqli_select_db($db, 'cooking') or die(mysqli_error($db));
                $query = 'SELECT 
                                ingredient_id, ingredient_name, ingredient_type, ingredient_image
                            FROM ingredient
                            WHERE ingredient_type = \'VEGETABLE\'
                            ORDER BY ingredient_name';
                $AllIngredients = mysqli_query($db, $query) or die(mysqli_error($db));
                while ($row = mysqli_fetch_array($AllIngredients)) {
                    extract($row);
                    echo "<div class=\"container\">
                                <input type=\"checkbox\" class=\"selection\" name=$ingredient_id id=$ingredient_name>
                                <label for=$ingredient_name id=\"label-checkbox\"><img src=$ingredient_image class=\"image-ingredient\">$ingredient_name</label>
                            </div>";
                }
                ?>

            </div>
        </div>
        <div id="Fruits" class="ingredient">
            <button id="Fruits" class="collapsible" type="button">
                Fruit
            </button>
            <div id="Fruits" class="div-button">
                <?php
                $db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
                mysqli_select_db($db, 'cooking') or die(mysqli_error($db));
                $query = 'SELECT 
                                ingredient_id, ingredient_name, ingredient_type, ingredient_image
                            FROM ingredient
                            WHERE ingredient_type = \'FRUITS\'
                            ORDER BY ingredient_name';
                $AllIngredients = mysqli_query($db, $query) or die(mysqli_error($db));
                while ($row = mysqli_fetch_array($AllIngredients)) {
                    extract($row);
                    echo "<div class=\"container\">
                                <input type=\"checkbox\" class=\"selection\" name=$ingredient_id id=$ingredient_name>
                                <label for=$ingredient_name id=\"label-checkbox\"><img src=$ingredient_image class=\"image-ingredient\">$ingredient_name</label>
                            </div>";
                }
                ?>
            </div>
        </div>
        <div id="Eggs, cheese and dairy products" class="ingredient">
            <button id="Eggs, cheese and dairy products" class="collapsible" type="button">
                Egg, cheese and dairy product
            </button>
            <div id="Eggs, cheese and dairy products" class="div-button">
                <?php
                $db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
                mysqli_select_db($db, 'cooking') or die(mysqli_error($db));
                $query = 'SELECT 
                                ingredient_id, ingredient_name, ingredient_type, ingredient_image
                            FROM ingredient
                            WHERE ingredient_type = \'DAIRY-PRODUCT\'
                            ORDER BY ingredient_name';
                $AllIngredients = mysqli_query($db, $query) or die(mysqli_error($db));
                while ($row = mysqli_fetch_array($AllIngredients)) {
                    extract($row);
                    echo "<div class=\"container\">
                                <input type=\"checkbox\" class=\"selection\" name=$ingredient_id id=$ingredient_name>
                                <label for=$ingredient_name id=\"label-checkbox\"><img src=$ingredient_image class=\"image-ingredient\">$ingredient_name</label>
                            </div>";
                }
                ?>
            </div>
        </div>
        <div id="Starchy food" class="ingredient">
            <button id="Starchy food" class="collapsible" type="button">
                Starchy food
            </button>
            <div id="Starchy food" class="div-button">
                <?php
                $db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
                mysqli_select_db($db, 'cooking') or die(mysqli_error($db));
                $query = 'SELECT 
                                ingredient_id, ingredient_name, ingredient_type, ingredient_image
                            FROM ingredient
                            WHERE ingredient_type = \'STARCHY-FOOD\'
                            ORDER BY ingredient_name';
                $AllIngredients = mysqli_query($db, $query) or die(mysqli_error($db));
                while ($row = mysqli_fetch_array($AllIngredients)) {
                    extract($row);
                    echo "<div class=\"container\">
                                <input type=\"checkbox\" class=\"selection\" name=$ingredient_id id=$ingredient_name>
                                <label for=$ingredient_name id=\"label-checkbox\"><img src=$ingredient_image class=\"image-ingredient\">$ingredient_name</label>
                            </div>";
                }
                ?>
            </div>
        </div>
        <div id="Herb, spice and condiment" class="ingredient">
            <button id="Herb, spice and condiment" class="collapsible" type="button">
                Herb, spice and condiment
            </button>
            <div id="Herb, spice and condiment" class="div-button">
                <?php
                $db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
                mysqli_select_db($db, 'cooking') or die(mysqli_error($db));
                $query = 'SELECT 
                                ingredient_id, ingredient_name, ingredient_type, ingredient_image
                            FROM ingredient
                            WHERE ingredient_type = \'CONDIMENT\'
                            ORDER BY ingredient_name';
                $AllIngredients = mysqli_query($db, $query) or die(mysqli_error($db));
                while ($row = mysqli_fetch_array($AllIngredients)) {
                    extract($row);
                    echo "<div class=\"container\">
                                <input type=\"checkbox\" class=\"selection\" name=$ingredient_id id=$ingredient_name>
                                <label for=$ingredient_name id=\"label-checkbox\"><img src=$ingredient_image class=\"image-ingredient\">$ingredient_name</label>
                            </div>";
                }
                ?>
            </div>
        </div>
        <div id="Meat" class="ingredient">
            <button id="Meat" class="collapsible" type="button">
                Meat
            </button>
            <div id="Meats" class="div-button">
                <?php
                $db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
                mysqli_select_db($db, 'cooking') or die(mysqli_error($db));
                $query = 'SELECT 
                                ingredient_id, ingredient_name, ingredient_type, ingredient_image
                            FROM ingredient
                            WHERE ingredient_type = \'MEAT\'
                            ORDER BY ingredient_name';
                $AllIngredients = mysqli_query($db, $query) or die(mysqli_error($db));
                while ($row = mysqli_fetch_array($AllIngredients)) {
                    extract($row);
                    echo "<div class=\"container\">
                                <input type=\"checkbox\" class=\"selection\" name=$ingredient_id id=$ingredient_name>
                                <label for=$ingredient_name id=\"label-checkbox\"><img src=$ingredient_image class=\"image-ingredient\">$ingredient_name</label>
                            </div>";
                }
                ?>
            </div>
        </div>
        <div id="Fish and seafood" class="ingredient">
            <button id="Fish and seafood" class="collapsible" type="button">
                Fish and seafood
            </button>
            <div id="Fish and seafoods" class="div-button">
                <?php
                $db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
                mysqli_select_db($db, 'cooking') or die(mysqli_error($db));
                $query = 'SELECT 
                                ingredient_id, ingredient_name, ingredient_type, ingredient_image
                            FROM ingredient
                            WHERE ingredient_type = \'SEAFOOD\'
                            ORDER BY ingredient_name';
                $AllIngredients = mysqli_query($db, $query) or die(mysqli_error($db));
                while ($row = mysqli_fetch_array($AllIngredients)) {
                    extract($row);
                    echo "<div class=\"container\">
                                <input type=\"checkbox\" class=\"selection\" name=$ingredient_id id=$ingredient_name>
                                <label for=$ingredient_name id=\"label-checkbox\"><img src=$ingredient_image class=\"image-ingredient\">$ingredient_name</label>
                            </div>";
                }
                ?>
            </div>
        </div>
        <input type="submit" id="submit-button" value="Let's cook !">

    </form>
    </nav>
</body>

</html>