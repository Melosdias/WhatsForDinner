<?php
session_start();
if (!isset($_COOKIE["user"])) {
    header('Location:connectionPage.php');
    exit();
};
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
    <form action="sendIngredient.php" method="post" enctype="multipart/form-data">
        <legend>Add ingredients</legend>
        Name : <input type="text" id="name" name="name" value="" />
        <p>Please select the type :
        </p>
        <div class="form" id="all-buttons">
            <div id="ingredients-buttons">
                Chocolate, biscuit and sweet products<input type="checkbox" class="ingredient-button" id="sweet-product"
                    name="SWEET-PRODUCT" value="Chocolate, biscuit and sweet products">
            </div>
            <div id="ingredients-buttons">
                Vegetable <input type="checkbox" class="ingredient-button" id="vegetable" name="VEGETABLE"
                    value="Vegetable">
            </div>
            <div id="ingredients-buttons">
                Fruits
                <input type="checkbox" class="ingredient-button" id="fruits" name="FRUITS" value="Fruits">
            </div>
            <div id="ingredients-buttons">
                Eggs, cheese and dairy products
                <input type="checkbox" class="ingredient-button" id="dairy-product" name="DAIRY-PRODUCT"
                    value="Eggs, cheese and dairy products">
            </div>
            <div id="ingredients-buttons">
                Starchy food
                <input type="checkbox" class="ingredient-button" name="STARCHY-FOOD" id="starchy-food"
                    value="Starchy food">
            </div>
            <div id="ingredients-buttons">
                Herb, spice and condiment
                <input type="checkbox" class="ingredient-button" name="CONDIMENT" id="condiment"
                    value="Herb, spice and condiment">
            </div>
            <div id="ingredients-buttons">
                Meat
                <input type="checkbox" class="ingredient-button" name="MEAT" id="meat" value="Meat">
            </div>
            <div id="ingredients-buttons">
                <label for="seafood">Fish and seafood</label>
                <input type="checkbox" class="ingredient-button" name="SEAFOOD" id="seafood" value="Fish and seafood">
            </div>
        </div>
        <div class="form" id="add-image">
            <div>
                <label for="picture-button">Please add a picture : </label>
                <input type="file" id="choose-file" name="image" accept="image/*" />
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
                            image.name = "image";
                            imgPreview.appendChild(image);
                        });
                    }
                }
            </script>
        </div>
        <div class="div-submit-button">
            <input type="submit" id="submit-button" value="Add ingredient">
        </div>
    </form>

</body>

</html>