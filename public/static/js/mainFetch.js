// https://jsonplaceholder.typicode.com/guide/
fetch('https://jsonplaceholder.typicode.com/posts')
    .then((response) => response.json())
    .then((json) => forEachLoop(json));

// loops over fetched json file
function forEachLoop(json){
    json.forEach(row => {
        displayFetchedRow(row);
    });
}

// creates card element from material-ui
function displayFetchedRow(row){
    // main card div
    var card = document.createElement('div');
    card.classList.add('card');
    card.classList.add('m-2');

    // card-body div
    var cardBody = document.createElement('div');
    cardBody.classList.add('card-body')
    
    // card-title = post title
    var cardTitle = document.createElement('h5');
    cardTitle.classList.add('card-title');
    cardTitle.innerHTML = row['title'];
    
    // card-text = post body
    var cardText = document.createElement('p');
    cardText.classList.add('card-text');
    cardText.innerHTML = row['body'];

    // button that redirects to postPage and providing id variable
    var cardButton = document.createElement('a');
    cardButton.setAttribute('href','post/'+row['id']);
    cardButton.innerHTML = "More";
    cardButton.classList.add('btn');
    cardButton.classList.add('btn-primary');

    // adding title, text and button to card-body
    cardBody.appendChild(cardTitle);
    cardBody.appendChild(cardText);
    cardBody.appendChild(cardButton);

    // adding card-body to the card
    card.appendChild(cardBody);
    
    // appending card to the container
    var container = document.getElementById("mainContainer");
    container.appendChild(card);
}