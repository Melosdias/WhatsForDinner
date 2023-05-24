<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>What do we eat tonight ?</title>
    <link rel="stylesheet" type="text/css" href="addIngredient.css">
    <link rel="shortcut icon" href="../imageWebsite/logov2.ico" />
</head>

<body>
    <?php include 'sideMenu.php'; ?>
    <fieldset>
        <legend>Add ingredients</legend>
        <div class="form" id="name-input">
            <label for="name">Name :</label>
            <input type="text" id="name" value="" />
        </div>
        <p>Please select the type :
        </p>
        <div class="form" id="all-buttons">
            <div id="ingredients-buttons">
                <label for="sweet-product">Chocolate, biscuit and sweet products</label>
                <input type="checkbox" class="ingredient-button" id="sweet-product"
                    value="Chocolate, biscuit and sweet products">
            </div>
            <div id="ingredients-buttons">
                <label for="vegetable">Vegetable</label>
                <input type="checkbox" class="ingredient-button" id="vegetable" value="Vegetable">
            </div>
            <div id="ingredients-buttons">
                <label for="fruits">Fruits</label>
                <input type="checkbox" class="ingredient-button" id="fruits" value="Fruits">
            </div>
            <div id="ingredients-buttons">
                <label for="dairy-product">Eggs, cheese and dairy products</label>
                <input type="checkbox" class="ingredient-button" id="dairy-product"
                    value="Eggs, cheese and dairy products">
            </div>
            <div id="ingredients-buttons">
                <label for="starchy-food">Starchy food</label>
                <input type="checkbox" class="ingredient-button" id="starchy-food" value="Starchy food">
            </div>
            <div id="ingredients-buttons">
                <label for="condiment">Herb, spice and condiment</label>
                <input type="checkbox" class="ingredient-button" id="condiment" value="Herb, spice and condiment">
            </div>
            <div id="ingredients-buttons">
                <label for="meat">Meat</label>
                <input type="checkbox" class="ingredient-button" id="meat" value="Meat">
            </div>
            <div id="ingredients-buttons">
                <label for="seafood">Fish and seafood</label>
                <input type="checkbox" class="ingredient-button" id="seafood" value="Fish and seafood">
            </div>
        </div>
        <div class="form" id="add-image">
            <div>
                <label for="picture-button">Please add a picture : </label>
                <input type="file" id="choose-file" accept="image/*" />
            </div>
            <div id="img-preview"></div>
            <script>
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
                            imgPreview.innerHTML = '';
                            const image = document.createElement('img');
                            image.src = this.result;
                            image.id = "image";
                            imgPreview.appendChild(image);
                        });
                    }
                }
            </script>
        </div>
        <input type="button" id="submit-button" value="Add ingredient">
    </fieldset>

</body>

</html>