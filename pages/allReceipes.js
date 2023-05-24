function showList() {
    fetch("../data/receipes.json")
        .then(response => response.json())
        .then(data => createList(data))
}

function createList(data) {
    const mainUL = document.createElement('div');
    const legendMainUL = document.createElement('legend');
    legendMainUL.innerHTML = "All receipes";
    mainUL.appendChild(legendMainUL);

    for(let i = 0 ; i < data.receipes.length ; i++){
        const section = document.createElement('section');
        section.id = data.receipes[i].name;

        const aside = document.createElement('aside');
        aside.id = data.receipes[i].name;
        const picture = document.createElement('img');
        picture.src =  data.receipes[i].picture;
        picture.className = "image-receipe";
        aside.appendChild(picture);

        const article = document.createElement('article');
        article.id = data.receipes[i].name;
        const name = document.createElement('h2');
        name.innerHTML = data.receipes[i].name;
        name.className = "receipe-name";
        article.appendChild(name);
        var j = 1;
        for(var step in data.receipes[i].steps)
        {
            const divStep = document.createElement('div');
            divStep.className = "div-step";

            const stepNumb = document.createElement('p');
            stepNumb.className = "numb";
            stepNumb.innerHTML = "Step " + j + ": ";
            j++;
            const stepText = document.createElement('p');
            stepText.className = "step-text";
            stepText.innerHTML = data.receipes[i].steps[step];

            divStep.appendChild(stepNumb);
            divStep.appendChild(stepText);
            article.appendChild(divStep);
        }
        section.appendChild(aside);
        section.appendChild(article);
        mainUL.appendChild(section);
    }
    document.body.appendChild(mainUL);
}