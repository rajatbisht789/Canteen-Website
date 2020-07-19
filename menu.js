var itemsInCart = [];

window.onload = function(){
    updateCart();
    showAllItems();
    addLinks();
}


function changeActiveLink() {
    var menu = document.getElementById("menu");
    var dd_link = menu.getElementsByClassName("dd-link");
    for (var i = 0; i < dd_link.length; i++) {
        dd_link[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active-link");
            current[0].className = current[0].className.replace(" active-link", "");
            this.className += " active-link";
        });
    }
}

function scrollDelay(element) {
    setTimeout(function() {
        scrollToTop(element);
    }, 100)
}

function scrollToTop(element) {
    let currentPos = document.documentElement.scrollTop;
    let expression = /#([A-Za-z]+)/;
    let result = expression.exec(element.href);
    let rect = document.getElementById(result[1]).getBoundingClientRect();

    window.scrollBy({
        top: (rect.bottom - 180),
        left: 0,
        behavior: 'smooth'
    });
}


// Add Menu Links
function addLinks() {
    let menu = document.getElementById("menu");

    for(i = 0; i < allItemsArray.length; i++) {
        let ddTag = document.createElement("dd");

        let aTag = document.createElement("a");
        aTag.href = "#" + allItemsArray[i].key.slice(0, 5);
        aTag.innerHTML = allItemsArray[i].key;
        aTag.style.textTransform = "capitalize";
        aTag.onclick = function() {
            scrollDelay(aTag);
        }; 

        if (i == 0) {
            aTag.className = "dd-link active-link";
        } else {
            aTag.className = "dd-link"
        }

        let brTag = document.createElement("br");

        ddTag.appendChild(aTag);
        menu.appendChild(ddTag);
        menu.appendChild(brTag);

        changeActiveLink();
    }
}


// Add Item Button Tapped
function addItemButtonTapped(button) {
    for (i = 0; i < allItemsArray.length; i++) {
        for (j = 0; j < allItemsArray[i].value.length; j++) {
            if (allItemsArray[i].value[j].key == button.id) {
                let itemName = allItemsArray[i].value[j].value[0];
                let price = allItemsArray[i].value[j].value[1];
                let isVeg = allItemsArray[i].value[j].value[2];
                let itemDetail = [itemName, price, 1, isVeg];

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
    let cartTitle = document.getElementById("cart-title");
    let proceedButton = document.getElementById("proceed-button");
    let labelTotal = document.getElementById("total-price");
    
    let cartEmptyImage = document.getElementById("cart-empty-image");
    let cartContainer = document.getElementById("items-in-cart");
    let cartTotalDiv = document.getElementById("total-amount");

    if (itemsInCart.length > 0) {
        cartTitle.innerHTML = "Items In Cart"; 
        proceedButton.style.backgroundColor = "orange";
        proceedButton.style.display = "block";
        
        cartEmptyImage.style.display = "none";
        cartContainer.style.display = "block";
        cartTotalDiv.style.display = "flex";
    } else {
        cartTitle.innerHTML = "Cart Empty";
        proceedButton.style.backgroundColor = "gray";
        proceedButton.style.display = "none";
        
        cartEmptyImage.style.display = "block";
        cartContainer.style.display = "none";
        cartTotalDiv.style.display = "none";
    }

    let itemsContainer = document.getElementById("added-items");
    while (itemsContainer.firstChild) {
        itemsContainer.removeChild(itemsContainer.lastChild);
    }

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
    let labelTotal = document.getElementById("total-price");

    let section = document.createElement("section");
    section.className = "side-bar-single-item";

    let nameInitialDiv = document.createElement("div");
    nameInitialDiv.className = "name-initial-cart";
    nameInitialDiv.innerHTML = itemName[0].toUpperCase();

    let nameAndPriceDiv = document.createElement("div");
    nameAndPriceDiv.className = "name-and-option";

    // Adding Item Name with ID
    let pItemName = document.createElement("p");
    pItemName.className = "item-name small";
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
    imageVegNon.style.marginLeft = "6px";
    
    pItemName.appendChild(spanItemId);
    pItemName.appendChild(imageVegNon);

    // Adding Price and Delete Button
    let spanEqualSpacing = document.createElement("span");
    spanEqualSpacing.className = "equal-spacing";

    let pAmount = document.createElement("p");      // P tag for amount
    pAmount.className = "amount smaller";
    pAmount.innerHTML = "&#8377;" + price + " x " + quantity + " = " + (parseInt(price) * parseInt(quantity)).toString();

    
    let spanEqualSpacing1 = document.createElement("span");
    spanEqualSpacing1.className = "equal-spacing";
    
    let selectTag = document.createElement("select");
    selectTag.style.marginRight = "5px";
    selectTag.id = itemId;
    selectTag.onchange = function() {
        for (i = 0; i < itemsInCart.length; i++) {
            if (itemsInCart[i].key == selectTag.id) {
                itemsInCart[i].value[2] = parseInt(selectTag.value);
                break;
            }   
        }
        updateCart();
    };
    
    for (var i = 1; i < 51; i++) {
        var optionTag = document.createElement("option");
        optionTag.value = i;
        optionTag.innerHTML = i;
        selectTag.appendChild(optionTag);
    }
    
    selectTag.selectedIndex = quantity - 1;
    
    let imageTrash = document.createElement("img");     // Image tag for Delete Button
    imageTrash.id = itemId;
    imageTrash.src = "images/trash.png";
    imageTrash.className = "delete-button";
    imageTrash.alt = "Delete Button Image";
    imageTrash.onclick = function() {
        deleteButtonTapped(imageTrash);
    }

    spanEqualSpacing1.appendChild(selectTag);
    spanEqualSpacing1.appendChild(imageTrash);
    
    // Appending Child to respective Tags
    spanEqualSpacing.appendChild(pAmount);
    spanEqualSpacing.appendChild(spanEqualSpacing1);

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
        if (itemsInCart[i].key == button.id) {
            let addButton = document.getElementById(button.id);
            addButton.style.backgroundColor = "darkorange";
            addButton.disabled = false;
            itemsInCart.splice(i, 1);
        }
    }
    updateCart();
}