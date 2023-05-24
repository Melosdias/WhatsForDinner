<?php 
session_start();
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

<body onload="showList()">
    <?php include 'sideMenu.php';?>
        <fieldset>
        <legend>Add receipe</legend>
        <div class="form" id="name-input">
            <label for="name">First, write the name of the receipe :</label>
            <input type="text" id="name" value="" />
        </div>
        <div id="ingredient-selection">
            <p>Now select the needed ingredients : </p>
        </div>
        <div id="steps">
            <p>Now write all the steps :</p>
            <div class="form" id="step">
                <label for="step1">Step 1 : </label>
                <textarea id="step1" class="step-input" value="">
                </textarea>
            </div>
            <div class="form" id="step">
                <label for="step2">Step 2 : </label>
                <textarea id="step1" class="step-input" value="">
                </textarea>
            </div>
        </div>
        <input type="button" id="add-step-button" value="Add step" onclick="addStep()">
        <div class="form>">
            <label for="picture-button">Please add a picture : </label>
            <input type="file" id="choose-file" accept="image/*" />
            <div id="img-preview"></div>
        </div>
        <div class="buttons">
            <input type="button" id="submit-button" value="Add receipe" onclick="submit()">
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
            function submit() {
                alert("Thank you~");
            }

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
                        imgPreview.appendChild(image);
                    });
                }
            }

        </script>
    </fieldset>

</body>

</html>