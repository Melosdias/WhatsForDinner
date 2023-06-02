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
    <link rel="stylesheet" type="text/css" href="addReceipe.css">
    <link rel="shortcut icon" href="../imageWebsite/logov2.ico" />
    <script src="addReceipe.js"></script>
</head>

<body onload="createCollapsible()">
    <?php include 'sideMenu.php'; ?>
    <form action="sendReceipe.php" method="post" enctype="multipart/form-data">
        <legend>Add receipe</legend>
        First, write the name of the receipe :
        <input type="text" id="name" name="name" />
        <div id="ingredient-selection">
            <p>Now select the needed ingredients : </p>
            <div id="Chocolate, biscuit and sweet products" class="ingredient">
                <button id="Chocolate, biscuit and sweet products" class="collapsible" type="button">
                    Chocolate, biscuit and sweet products
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
                    Fruits
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
                    Eggs, cheese and dairy products
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
        </div>
        <div id="steps">
            <p>Now write all the steps :</p>
            <div class="form" id="step">
                <label for="step1">Step 1 : </label>
                <textarea id="step1" name="step1" class="step-input">
                </textarea>
            </div>
            <div class="form" id="step">
                <label for="step2">Step 2 : </label>
                <textarea id="step2" name="step2" class="step-input">
                </textarea>
            </div>
        </div>
        <input type="button" id="add-step-button" value="Add step" onclick="addStep()">
        <div class="form>">
            <label for="picture-button">Please add a picture : </label>
            <input type="file" id="choose-file" name="picture" accept="image/*" />
            <div id="img-preview"></div>
        </div>
        <div class="buttons">
            <button id="submit-button">Let's cook !</button>
        </div>
        <script>
            var nbStep = 2;
            function addStep() {
                nbStep++;
                const nextStepDiv = document.createElement('div');
                nextStepDiv.className = "form";
                nextStepDiv.id = "step";
                const inputStep = document.createElement('textarea');
                inputStep.type = "text";
                inputStep.id = "step" + nbStep;
                inputStep.className = "step-input";
                inputStep.name = inputStep.id;
                const labelStep = document.createElement('label');
                labelStep.htmlFor = inputStep.id;
                labelStep.innerHTML = "Step " + nbStep + " : ";

                const bigDiv = document.getElementById("steps");
                nextStepDiv.appendChild(labelStep);
                nextStepDiv.appendChild(inputStep);
                bigDiv.appendChild(nextStepDiv);
                if (nbStep >= 10) {
                    const addStepButton = document.getElementById("add-step-button");
                    addStepButton.style.visibility = 'hidden';
                }
            }
            /*function submit() {
                alert("Thank you~");
            }*/

            const chooseFile = document.getElementById("choose-file");
            const imgPreview = document.getElementById("img-preview");
            chooseFile.addEventListener("change", function () {
                getImgData();
            });
            function getImgData() {
                const files = chooseFile.files[0];
                if (files) {
                    const fileReader = new FileReader();
                    fileReader.readAsDataURL(files);
                    fileReader.addEventListener("load", function () {
                        imgPreview.style.display = "block";
                        imgPreview.innerHTML = '';
                        const image = document.createElement('img');
                        image.src = this.result;
                        image.id = "image";
                        image.name = "picture";
                        imgPreview.appendChild(image);
                    });
                }
            }

        </script>
    </form>

</body>

</html>