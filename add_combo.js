var itemsInCart = [];

window.onload = function(){
    showAllItems();
    updateCart();
}

function resetAllItem() {
    var searchField = document.getElementById("search-items");
    if (searchField.value == "") {
        console.log("Empty")
    }
}


// Add Item Button Tapped
function addItemButtonTapped(button) {
    for (i = 0; i < allItemsArray.length; i++) {
        for (j = 0; j < allItemsArray[i].value.length; j++) {
            if (allItemsArray[i].value[j].key == button.id) {
                let itemName = allItemsArray[i].value[j].value[0];
                let price = allItemsArray[i].value[j].value[1];

                let itemDetail = [itemName, price]

                itemsInCart.push({
                    key: button.id,
                    value: itemDetail
                });

                updateCart();
                break;
            }
        }
    }
}


function updateCart() {
    let proceedButton = document.getElementById("add-combo-button");
    let labelTotal = document.getElementById("total-price");
    let errorMessage = document.getElementById("error");
    let addedItems = document.getElementById("added-items");
    
    proceedButton.style.width = "100%";
    proceedButton.style.height = "44px";
    proceedButton.style.fontSize = "16px";

    if (itemsInCart.length > 0) {
        proceedButton.style.backgroundColor = "orange";
        proceedButton.disabled = false;
        errorMessage.style.display = "none";
        addedItems.style.display = "block";
    } else {
        proceedButton.style.backgroundColor = "gray";
        proceedButton.disabled = true;
        errorMessage.style.display = "flex";
        addedItems.style.display = "none";
    }

    let itemsContainer = document.getElementById("added-items");
    while (itemsContainer.firstChild) {
        itemsContainer.removeChild(itemsContainer.lastChild);
    }

    var cartTotal = 0;
    for (i = 0; i < itemsInCart.length; i++) {
        addItemToCart(itemsInCart[i].value[0], itemsInCart[i].value[1], "1", itemsInCart[i].key);

        cartTotal += (parseInt(itemsInCart[i].value[1]) * 1);
    }

    labelTotal.innerHTML = "&#8377; " + cartTotal.toString();
}


// Adding a item to cart
function addItemToCart(itemName, price, quantity, itemId) {
    let itemsContainer = document.getElementById("added-items");

    let section = document.createElement("section");
    section.className = "side-bar-single-item";

    let nameInitialDiv = document.createElement("div");
    nameInitialDiv.className = "name-initial";
    nameInitialDiv.innerHTML = itemName[0].toUpperCase();

    let nameAndPriceDiv = document.createElement("div");
    nameAndPriceDiv.className = "name-and-option";

    // Adding Item Name with ID
    let pItemName = document.createElement("p");
    pItemName.className = "item-name small";

    let spanItemId = document.createElement("span");
    spanItemId.id = "item-id-here";
    spanItemId.innerHTML = itemName;
    pItemName.appendChild(spanItemId);

    // Adding Price and Delete Button
    let spanEqualSpacing = document.createElement("span");
    spanEqualSpacing.className = "equal-spacing";

    let pAmount = document.createElement("p");      // P tag for amount
    pAmount.className = "amount smaller";
    pAmount.innerHTML = "Rs. " + price + " x " + quantity + " = " + (parseInt(price) * parseInt(quantity)).toString();

    let imageTrash = document.createElement("img");     // Image tag for Delete Button
    imageTrash.name = itemId;
    imageTrash.src = "images/trash.png";
    imageTrash.className = "delete-button";
    imageTrash.alt = "Delete Button Image";
    imageTrash.onclick = function() {
        deleteButtonTapped(imageTrash);
    }

    // Appending Child to respective Tags
    spanEqualSpacing.appendChild(pAmount);
    spanEqualSpacing.appendChild(imageTrash);

    nameAndPriceDiv.appendChild(pItemName);
    nameAndPriceDiv.appendChild(spanEqualSpacing);

    section.appendChild(nameInitialDiv);
    section.appendChild(nameAndPriceDiv);

    itemsContainer.appendChild(section);

    let button = document.getElementById(itemId);
    button.style.backgroundColor = "gray";
    button.disabled = true;
}


function deleteButtonTapped(button) {
    for (i = 0; i < itemsInCart.length; i++) {
        if (itemsInCart[i].key == button.name) {
            let addButton = document.getElementById(button.name);
            addButton.style.backgroundColor = "darkorange";
            addButton.disabled = false;
            itemsInCart.splice(i, 1);
        }
    }
    updateCart();
}