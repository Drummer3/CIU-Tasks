// creates card element from material-ui
function postGenerator(row) {
    console.log(row);
    // main card div
    var card = document.createElement('div');
    card.classList.add('card');
    card.classList.add('m-2');

    // card-header where user id is displayed
    var cardHeader = document.createElement('div');
    cardHeader.classList.add('card-header');
    cardHeader.innerHTML = 'User ID: ' + row['userId'];

    // card-body div
    var cardBody = document.createElement('div');
    cardBody.classList.add('card-body')

    // card-footer where post id is displayed
    var cardFooter = document.createElement('div');
    cardFooter.classList.add('card-footer');
    cardFooter.classList.add('text-muted');
    cardFooter.innerHTML = 'Post ID: ' + row['id'];

    // card-title = post title
    var cardTitle = document.createElement('h5');
    cardTitle.classList.add('card-title');
    cardTitle.innerHTML = row['title'];

    // card-text = post body
    var cardText = document.createElement('p');
    cardText.classList.add('card-text');
    cardText.innerHTML = row['body'];

    // adding title and text to card-body
    cardBody.appendChild(cardTitle);
    cardBody.appendChild(cardText);

    // adding card-header, card-body and card-footer to the card
    card.appendChild(cardHeader);
    card.appendChild(cardBody);
    card.appendChild(cardFooter);

    // displaying card in the container
    var container = document.getElementById("mainContainer");
    container.appendChild(card);
}
