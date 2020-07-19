var itemsInCart = [];

itemsInCart.push({
    key: "item001",
    value: ["Panner Butter Masala", "234", "2", true]
})

itemsInCart.push({
    key: "item002",
    value: ["Roti", "20", "20", true]
})

itemsInCart.push({
    key: "item007",
    value: ["Chicken Keema Masala", "200", "1", false]
})


function showItemsInCart() {
    let labelTotal = document.getElementById("total_amount");

    var cartTotal = 0;
    for (i = 0; i < itemsInCart.length; i++) {
        addItemToCart(itemsInCart[i].value[0], itemsInCart[i].value[1], itemsInCart[i].value[2], itemsInCart[i].key, itemsInCart[i].value[3]);

        cartTotal += (parseInt(itemsInCart[i].value[1]) * itemsInCart[i].value[2]);
    }

    labelTotal.innerHTML = "&#8377; " + cartTotal.toString();
}


// Adding a item to cart
function addItemToCart(itemName, price, quantity, itemId, isVeg) {
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
    pItemName.className = "item-name large";
    pItemName.style.display = "flex";

    let spanItemId = document.createElement("span");
    spanItemId.id = "item-id-here";
    spanItemId.innerHTML = itemName;
    
    let imageVegNon = document.createElement("img");
    if (isVeg) {
        imageVegNon.src = "images/veg.png";    
    } else {
        imageVegNon.src = "images/nonveg.png";
    }
    
    imageVegNon.alt = "Veg/ Non-Veg Image";
    imageVegNon.style.width = "15px";
    imageVegNon.style.objectFit = "contain";
    imageVegNon.style.marginLeft = "6px"
    
    pItemName.appendChild(spanItemId);
    pItemName.appendChild(imageVegNon);

    // Adding Price and Delete Button
    let spanEqualSpacing = document.createElement("span");
    spanEqualSpacing.className = "equal-spacing";

    let pAmount = document.createElement("p");      // P tag for amount
    pAmount.className = "amount smalle";
    pAmount.innerHTML = "Rs. " + price + " x " + quantity + " = " + (parseInt(price) * parseInt(quantity)).toString();

    // Appending Child to respective Tags
    spanEqualSpacing.appendChild(pAmount);

    nameAndPriceDiv.appendChild(pItemName);
    nameAndPriceDiv.appendChild(spanEqualSpacing);

    section.appendChild(nameInitialDiv);
    section.appendChild(nameAndPriceDiv);

    itemsContainer.appendChild(section);
}
