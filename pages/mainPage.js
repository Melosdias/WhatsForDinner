/*function showList() {
    console.log("showList start");
    fetch("../data/ingredient.json")
        .then(response => response.json())
        .then(data => createList(data))

}

function createList(data) {
    const mainUL = document.createElement('fieldset');
    const legendMainUL = document.createElement('legend');
    legendMainUL.innerHTML = "Choose your ingredients:";
    mainUL.appendChild(legendMainUL);
    for (let i = 0; i < data.ingredients.length; i++) {
        const bigDiv = document.createElement('div');
        bigDiv.id = data.ingredients[i].type;
        bigDiv.className = "ingredient"
        const collapsButton = document.createElement('button');
        collapsButton.type = 'button';
        collapsButton.className = "collapsible";
        collapsButton.id = data.ingredients[i].type;
        collapsButton.innerHTML = data.ingredients[i].type;

        const divButton = document.createElement('div');
        divButton.className = "div-button";//Content of collapsible 
        divButton.id = data.ingredients[i].type + "-button";
        const contentUL = document.createElement('div');
        for (var key in data.ingredients[i].content) {
            const contentLI = document.createElement('button');
            contentLI.type = 'button';
            contentLI.className = 'selection';
            contentLI.innerHTML = key;

            const image = document.createElement('img');
            image.src = "../" + data.ingredients[i].content[key];
            image.className = "image-ingredient";
            contentLI.appendChild(image);

            contentUL.appendChild(contentLI);
        }
        divButton.appendChild(contentUL);
        bigDiv.appendChild(collapsButton);
        bigDiv.appendChild(divButton);
        mainUL.appendChild(bigDiv);
    }
    const submitButton = document.createElement('button');
    submitButton.type = 'button';
    submitButton.id = 'submit-button';
    submitButton.innerHTML = "Let's cook!";
    mainUL.appendChild(submitButton);
    document.body.appendChild(mainUL);

    createCollapsible();
}*/

function createCollapsible() {
    var coll = document.getElementsByClassName("collapsible");
    var i;
    console.log("coll =" + coll.length);
    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                //content.style.display = "none";
                content.style.maxHeight = null;
            } else {
                //content.style.display = "inline-grid";
                content.style.maxHeight = content.scrollHeight + "px";
            }
            closeCollapsible(content.id);
        });
    }
}
function closeCollapsible(content) {
    var coll = document.getElementsByClassName("collapsible active");
    var i;
    console.log("content : " + content);
    for (i = 0; i < coll.length; i++) {
        console.log("coll[i].id : " + coll[i].id);
        var contentToClose = coll[i].nextElementSibling;
        if (contentToClose.id !== content) {
            console.log("contentToClose id = " + contentToClose.id);
            //contentToClose.style.display = "none";
            contentToClose.style.maxHeight = null;
            coll[i].className = "collapsible";
        }
    }
}