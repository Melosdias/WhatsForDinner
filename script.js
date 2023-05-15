function showList() {
    console.log("showList start");
    fetch("ingredient.json")
        .then(response => response.json())
        .then(data => createList(data));
}

function createList(data) {
    const mainUL = document.createElement('fieldset');
    const legendMainUL = document.createElement('legend');
    legendMainUL.innerHTML = "Choose your ingredient";
    mainUL.appendChild(legendMainUL);
    for (let i = 0; i < data.ingredients.length; i++) {
        const bigDiv = document.createElement('div');
        bigDiv.className = data.ingredients[i].type;                
        const heading4 = document.createElement('h4');
        heading4.innerHTML = data.ingredients[i].type;

        const divButton = document.createElement('div');
        divButton.id = data.ingredients[i].type + "-button";
        const contentUL = document.createElement('div');
        for (var key in data.ingredients[i].content) {
            const contentLI = document.createElement('button');
            contentLI.type = 'button';
            contentLI.className = 'selection';
            contentLI.innerHTML = key;

            const image = document.createElement('img');
            image.src = data.ingredients[i].content[key];
            image.className = "image-ingredient";
            contentLI.appendChild(image);

            contentUL.appendChild(contentLI);
        }
        divButton.appendChild(contentUL);
        bigDiv.appendChild(heading4);
        bigDiv.appendChild(divButton);
        mainUL.appendChild(bigDiv);
    }
    const submitButton = document.createElement('button');
    submitButton.type = 'button';
    submitButton.id = 'submit-button';
    submitButton.innerHTML = "Let's cook!";
    mainUL.appendChild(submitButton);
    document.body.appendChild(mainUL);
}