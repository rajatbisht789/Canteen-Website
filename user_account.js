var orderHistoryArray = []

orderHistoryArray.push({
    key: "order001",
    value: ["12 Apr, 2020", "02:24 PM", "LIVE", "545", "6"]
})

orderHistoryArray.push({
    key: "order002",
    value: ["21 Mar, 2020", "10:34 AM", "Delivered", "345", "4"]
})

orderHistoryArray.push({
    key: "order003",
    value: ["14 Mar, 2020", "08:50 PM", "Delivered", "305", "3"]
})


function initItems() {
    let orderHistory = document.getElementById("order-history-container");
    
    for (var i = 0; i < orderHistoryArray.length; i++) {
        let orderId = orderHistoryArray[i].key;
        let date = orderHistoryArray[i].value[0];
        let time = orderHistoryArray[i].value[1];
        let status = orderHistoryArray[i].value[2];
        let amount = orderHistoryArray[i].value[3];
        let noOfItems = orderHistoryArray[i].value[4];
        
        let getSingleView = addItemsToSingleView(orderId, noOfItems, date, time, amount, status, i+1);
        console.log(getSingleView);
        
        orderHistory.appendChild(getSingleView);
    }
}


function addItemsToSingleView(orderId, noOfItems, date, time, amount, status, count) {   
    let showHideDiv = document.getElementById("show-hide");
    
    let singleItem = document.createElement("section");
    singleItem.className = "single-history-view";
    
    let sno = document.createElement("div");
    sno.className = "sno";
    sno.id = orderId;
    sno.innerHTML = count;
    
    let orderInfo = document.createElement("div");
    orderInfo.className = "order-info";
    
    let itemAndPrice = document.createElement("div");
    itemAndPrice.className = "item-n-price";
    let pItem = document.createElement("p");
    pItem.innerHTML = noOfItems + " Items";
    let pPrice = document.createElement("p");
    pPrice.innerHTML = "₹" + amount;
    
    itemAndPrice.appendChild(pItem);
    itemAndPrice.appendChild(pPrice);
    
    let pDateTime = document.createElement("p");
    pDateTime.className = "small";
    pDateTime.innerHTML = "Ordered On: ";
    let spanDateTime = document.createElement("span");
    spanDateTime.className = "time";
    spanDateTime.innerHTML = date + " at " + time;
    
    pDateTime.appendChild(spanDateTime);
    
    let divButtons = document.createElement("div");
    divButtons.className = "buttons";
    let pStatus = document.createElement("p");
    
    let divTwoButton = document.createElement("div");
    divTwoButton.className = "two-buttons";
    
    let buttonTrack = document.createElement("button");
    buttonTrack.className = "track";
    buttonTrack.innerHTML = "Track";
    buttonTrack.onclick = function() {
        showHideDiv.style.display = "block";
    }
    
    let buttonShowDetail = document.createElement("button");
    buttonShowDetail.className = "show-details";
    buttonShowDetail.innerHTML = "Show Details";
    buttonShowDetail.onclick = function() {
        localStorage["comingFrom"] = "Account";
        window.location = "single_order_view.php";
    }
    
    if (status == "LIVE") {
        pStatus.className = "bold green";
        divTwoButton.appendChild(buttonTrack);
    } else {
        pStatus.className = "bold";
    }
    
    pStatus.innerHTML = status;
    
    divTwoButton.appendChild(buttonShowDetail);
    
    divButtons.appendChild(pStatus);
    divButtons.appendChild(divTwoButton);
    
    orderInfo.appendChild(itemAndPrice);
    orderInfo.appendChild(pDateTime);
    orderInfo.appendChild(divButtons);
    
    singleItem.appendChild(sno);
    singleItem.appendChild(orderInfo);
    
    return singleItem;
}