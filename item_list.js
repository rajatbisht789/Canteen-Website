var allItemsArray = [];
var itemsArray = [];
var itemsArray1 = [];

itemsArray.push({
    key: "item001",
    value: ["Panner Butter Masala", "234", false, false, true] // 3. isOutOfStock 4. isRemoved 5. isVeg
})

itemsArray.push({
    key: "item002",
    value: ["Roti", "20", false, false, true]
})

itemsArray.push({
    key: "item007",
    value: ["Chicken Keema Masala", "200", false, false, false]
})


allItemsArray.push({
    key: "North Indian",
    value: itemsArray
})

itemsArray1.push({
    key: "item003",
    value: ["Panner Sandwich", "60", false, false, true]
})

itemsArray1.push({
    key: "item004",
    value: ["Cheese Sandwich", "50", false, false, true]
})


allItemsArray.push({
    key: "Sandwiches",
    value: itemsArray1
})

window.onload = function(){
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


// Generating Random Color
function getRandomColor() {
    return "#255972";
}


// Add All Item to Middle Container
function showAllItems() {
    let itemView = document.getElementById("items-sidebar");
    
    while (itemView.firstChild) {
        itemView.removeChild(itemView.lastChild);
    }

    for(i = 0; i < allItemsArray.length; i++) {
        let heading = addHeading(allItemsArray[i].key);
        itemView.appendChild(heading);

        for(j = 0; j < allItemsArray[i].value.length; j++) {
            let itemId = allItemsArray[i].value[j].key;
            let itemName = allItemsArray[i].value[j].value[0];
            let price = allItemsArray[i].value[j].value[1];
            let isOutOfStock = allItemsArray[i].value[j].value[2];
            let isRemoved = allItemsArray[i].value[j].value[3];
            let isVeg = allItemsArray[i].value[j].value[4];
            
            let items = addAllItems(itemName, price, itemId, isOutOfStock, isRemoved, allItemsArray[i].key, isVeg);

            itemView.appendChild(items);
        }
    }
}


// Add Heading
function addHeading(heading) {

    let pHeading = document.createElement("p");
    pHeading.className = "cuisine-heading";
    pHeading.innerHTML = heading.toUpperCase();
    pHeading.id = heading.slice(0, 5);

    return pHeading;
}


// Adding a single item
function addAllItems(itemName, price, itemId, isOutOfStock, isRemoved, heading, isVeg) {
    // Single Item
    let singleItemDiv = document.createElement("div");
    singleItemDiv.className = "single-item-view";

    // Item Name Initial
    let nameInitialDiv = document.createElement("div");
    nameInitialDiv.className = "name-initial";
    nameInitialDiv.style.backgroundColor = getRandomColor();
    nameInitialDiv.innerHTML = itemName[0].toUpperCase();

    // Item Name and Price
    let namePriceDiv = document.createElement("div");
    namePriceDiv.className = "name-and-price";

    let pItemName = document.createElement("p");
    pItemName.className = "item-name";
    pItemName.style.display = "flex";

    let spanItemId = document.createElement("span");
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

    let pAmount = document.createElement("p");
    pAmount.className = "amount";
    pAmount.innerHTML = "Rs. " + price;     // Appending Price

    // Appending Name and Amount to namePrice Div
    namePriceDiv.appendChild(pItemName);
    namePriceDiv.appendChild(pAmount);

    // Creating Button Container and Add Button
    let buttonDiv = document.createElement("div");
    buttonDiv.className = "add-button-container";

    let buttonEdit = document.createElement("button");
    buttonEdit.className = "edit_button";
    buttonEdit.innerHTML = "Edit";
    buttonEdit.name = itemId;
    buttonEdit.onclick = function() {
        for (var i = 0; i < allItemsArray.length; i++) {
            if (allItemsArray[i].key == heading) {
                for(j = 0; j < allItemsArray[i].value.length; j++) {
                    if (allItemsArray[i].value[j].key == buttonEdit.name) {
                        localStorage["itemName"] = allItemsArray[i].value[j].value[0];
                        localStorage["price"] = allItemsArray[i].value[j].value[1];
                        localStorage["heading"] = heading;
                        if (allItemsArray[i].value[j].value[4]) {
                            localStorage["isVeg"] = "Veg";
                        } else {
                            localStorage["isVeg"] = "Non Veg";
                        }
                        localStorage["completed"] = "no";
                    }
                }
            }
        }
        
        localStorage["comingFrom"] = "ItemList";
        window.location = "add_food_item.php";
    };
    
    let buttonAdd = document.createElement("button");
    buttonAdd.className = "add-button";
    buttonAdd.innerHTML = "Ran out of stock";
    buttonAdd.name = itemId;
    
    if (isOutOfStock) {
        buttonAdd.style.backgroundColor = "green";
        buttonAdd.innerHTML = "Back in stock";
    } else {
        buttonAdd.innerHTML = "Ran out of stock";
    }
    
    buttonAdd.onclick = function() {
        for (var i = 0; i < allItemsArray.length; i++) {
            if (allItemsArray[i].key == heading) {
                for(j = 0; j < allItemsArray[i].value.length; j++) {
                    if (allItemsArray[i].value[j].key == buttonAdd.name) {
                        if (buttonAdd.innerHTML == "Back in stock") {
                            allItemsArray[i].value[j].value[2] = false;
                            break;
                        } else {
                            allItemsArray[i].value[j].value[2] = true;
                            break;
                        }
                    }
                }
            }
        }
        
        showAllItems();
    };
    
    let buttonRemove = document.createElement("button");
    buttonRemove.className = "remove-button";
    buttonRemove.innerHTML = "Remove from menu";
    buttonRemove.name = itemId;
    
    if (isRemoved) {
        buttonRemove.style.backgroundColor = "gray";
        buttonRemove.innerHTML = "Add back to menu";
    } else {
        buttonRemove.innerHTML = "Remove from menu";
    }
    
    buttonRemove.onclick = function() {
        for (var i = 0; i < allItemsArray.length; i++) {
            if (allItemsArray[i].key == heading) {
                for(j = 0; j < allItemsArray[i].value.length; j++) {
                    if (allItemsArray[i].value[j].key == buttonRemove.name) {
                        if (buttonRemove.innerHTML == "Add back to menu") {
                            allItemsArray[i].value[j].value[3] = false;
                            break;
                        } else {
                            allItemsArray[i].value[j].value[3] = true;
                            break;
                        }
                    }
                }
            }
        }
        
        showAllItems();
    };

    // Appening button to Button Container    
    buttonDiv.appendChild(buttonEdit);
    buttonDiv.appendChild(buttonAdd);
    buttonDiv.appendChild(buttonRemove);

    // Appending Tags to Single Item View
    singleItemDiv.appendChild(nameInitialDiv);
    singleItemDiv.appendChild(namePriceDiv);
    singleItemDiv.appendChild(buttonDiv);

    return singleItemDiv;
}