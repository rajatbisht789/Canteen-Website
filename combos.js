var allCombosArray = [];
var combosArray = [];

combosArray.push({
    key: "combo001",
    value: ["Rajma Rice Combo", "120", "Contains Rajma and Jeera Rice, original cost is &#8377;150"]
})

combosArray.push({
    key: "combo002",
    value: ["Dal Makhni 2 Naan Combo", "200", "Contains Dal Makhni and 2 Naan, original cost is &#8377;240"]
})

combosArray.push({
    key: "combo007",
    value: ["Chana Masala with 2 Roti", "220", "Contains Chana Masala and 2 Roti, original cost is &#8377;250"]
})

window.onload = function(){
    showAllCombos();
}


// Generating Random Color
function getRandomColor() {
    return "#2C7195";
}


// Add All Combo to Middle Container
function showAllCombos() {
    let comboView = document.getElementById("combo-view");

    for(i = 0; i < combosArray.length; i++) {
        let comboId = combosArray[i].key;
        let comboName = combosArray[i].value[0];
        let price = combosArray[i].value[1];
        let description = combosArray[i].value[2];
        let combos = addAllCombos(comboName, price, comboId, description);

        comboView.appendChild(combos);
    }
}


// Adding a single combo
function addAllCombos(comboName, price, comboId, description) {
    // Single Combo
    let singleComboDiv = document.createElement("div");
    singleComboDiv.className = "single-combo-view";

    // Combo Name Initial
    let nameInitialDiv = document.createElement("div");
    nameInitialDiv.className = "name-initial";
    nameInitialDiv.style.backgroundColor = getRandomColor();
    nameInitialDiv.innerHTML = comboName[0].toUpperCase();

    // Combo Name and Price
    let namePriceDiv = document.createElement("div");
    namePriceDiv.className = "name-and-items";

    let pComboName = document.createElement("p");
    pComboName.className = "combo-name equal-spacing";

    let spanComboName = document.createElement("span");
    spanComboName.className = "extra-large bold";
    spanComboName.innerHTML = comboName;
    let spanComboAmount = document.createElement("span");
    spanComboAmount.className = "bold extra-large";
    spanComboAmount.innerHTML = "&#8377;" + price;
    
    pComboName.appendChild(spanComboName);
    pComboName.appendChild(spanComboAmount);

    let pDescription = document.createElement("p");
    pDescription.className = "light small";
    pDescription.innerHTML = description;     // Appending Price

    // Appending Name and Amount to namePrice Div
    namePriceDiv.appendChild(pComboName);
    namePriceDiv.appendChild(pDescription);

    // Creating Button Container and Add Button
    let buttonDiv = document.createElement("div");
    buttonDiv.className = "delete-button-container";

    let buttonEdit = document.createElement("img");
    buttonEdit.className = "delete-button";
    buttonEdit.src = "images/edit.png";
    buttonEdit.alt = "Edit Button";
    buttonEdit.title = "Edit Button";
    buttonEdit.id = comboId;
    buttonEdit.onclick = function() {
        window.open('add_combo.php', '_blank');
    };
    
    let buttonDelete = document.createElement("img");
    buttonDelete.className = "delete-button";
    buttonDelete.src = "images/trash.png";
    buttonDelete.alt = "Delete Button";
    buttonDelete.title = "Delete Button";
    buttonDelete.id = comboId;
    buttonDelete.onclick = function() {
        
    };

    buttonDiv.appendChild(buttonEdit);
    buttonDiv.appendChild(buttonDelete);

    // Appending Tags to Single Combo View
    singleComboDiv.appendChild(nameInitialDiv);
    singleComboDiv.appendChild(namePriceDiv);
    singleComboDiv.appendChild(buttonDiv);

    return singleComboDiv;
}