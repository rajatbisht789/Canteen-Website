var allItemsArray = [];
var itemsArray = [];
var itemsArray1 = [];

itemsArray.push({
    key: "item001",
    value: ["Panner Butter Masala", "234", true]
})

itemsArray.push({
    key: "item002",
    value: ["Roti", "20", true]
})

itemsArray.push({
    key: "item007",
    value: ["Chicken keema Masala", "200", false]
})

allItemsArray.push({
    key: "North Indian",
    value: itemsArray
})

itemsArray1.push({
    key: "item003",
    value: ["Panner Sandwich", "60", true]
})

itemsArray1.push({
    key: "item004",
    value: ["Cheese Sandwich", "50", true]
})

allItemsArray.push({
    key: "Sandwiches",
    value: itemsArray1
})


function showToast(message, color) {
    var x = document.getElementById("snackbar");
    x.className = "show";
    x.innerHTML = message;
    x.style.backgroundColor = color;
    setTimeout(function(){ 
        x.className = x.className.replace("show", ""); 
        document.body.removeChild(x);
    }, 2000);
}

// Generating Random Color
function getRandomColor() {
    var letters = '0123456789AB';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 11)];
    }
    return color;
}


// Add All Item to Middle Container
function showAllItems() {
    let itemView = document.getElementById("item-view");

    for(i = 0; i < allItemsArray.length; i++) {
        let heading = addHeading(allItemsArray[i].key);
        itemView.appendChild(heading);

        for(j = 0; j < allItemsArray[i].value.length; j++) {
            let items = addAllItems(allItemsArray[i].value[j].value[0], allItemsArray[i].value[j].value[1], allItemsArray[i].value[j].key, allItemsArray[i].value[j].value[2]);

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
function addAllItems(itemName, price, itemId, isVeg) {
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
    imageVegNon.style.marginLeft = "6px"

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

    let buttonAdd = document.createElement("button");
    buttonAdd.className = "add-button";
    buttonAdd.innerHTML = "ADD ITEM";
    buttonAdd.id = itemId;
    buttonAdd.onclick = function() {
        addItemButtonTapped(buttonAdd);
    };

    buttonDiv.appendChild(buttonAdd);       // Appening button to Button Container

    // Appending Tags to Single Item View
    singleItemDiv.appendChild(nameInitialDiv);
    singleItemDiv.appendChild(namePriceDiv);
    singleItemDiv.appendChild(buttonDiv);

    return singleItemDiv;
}