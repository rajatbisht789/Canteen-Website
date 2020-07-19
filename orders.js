var pendingOrdersArr = [];
var deliveredOrdersArr = [];

var PENDING_CONF = "Pending Confirmation";
var SEND_FOR_DELIVERY = "NOT DELIVERED";
var SENT_FOR_DELIVERY = "Sent for Delivery";
var DELIVERED = "DELIVERED";

var orderDetail = ["Animesh Jain", "9876543210", "200", "12:50 pm", "16 Mar 2020", "E-247 VIT Vellore", PENDING_CONF, "No Instructions", "Cash"];

pendingOrdersArr.push({
    key: "Order001",
    value: orderDetail
})

orderDetail = ["Prateek Malpani", "9876543210", "544", "12:15 pm", "16 Mar 2020", "G-111 VIT Vellore", PENDING_CONF, "Please call before delivery", "Card"];

pendingOrdersArr.push({
    key: "Order002",
    value: orderDetail
})

window.onload = function() {
    var labelOrder = document.getElementById("desc_order");
    var d = new Date();
    var day = d.getDate();
    var x = d.toDateString().substr(4, 3);
    var year = d.getFullYear();
    labelOrder.innerHTML = '(for ' + day + ' ' + x + ', ' + year +')';

    pendingOrder();
};

// Generating Random Color
function getRandomColor() {
    var letters = '0123456789ABF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 12)];
    }
    return color;
}


function pendingOrder() {
    for (i = 0; i < pendingOrdersArr.length; i++) {

        let pendingOrders = document.getElementById("pending-orders");

        let orderDetails = document.createElement("div");
        orderDetails.className = "order_details";

        let nameInitialDiv = document.createElement("div");
        nameInitialDiv.className = "name-initial";
        nameInitialDiv.style.backgroundColor = getRandomColor();
        nameInitialDiv.innerHTML = pendingOrdersArr[i].value[0][0];

        // Name and Buttons Container
        let nameButtonDiv = document.createElement("div");
        nameButtonDiv.className = "name-and-button";

        //Name and Amount View
        let nameAmountDiv = document.createElement("div");
        nameAmountDiv.className = "name-and-amount";

        let nameP = document.createElement("p");
        nameP.className = "user_name";

        let spanUsername = document.createElement("span");
        spanUsername.innerHTML = pendingOrdersArr[i].value[0] + "&ensp;";

        let spanTime = document.createElement("span");
        spanTime.className = "smaller light-black";
        spanTime.innerHTML = "(" + pendingOrdersArr[i].value[3] +")";

        nameP.appendChild(spanUsername);
        nameP.appendChild(spanTime);

        let amountP = document.createElement("p");
        amountP.className = "amount";
        amountP.innerHTML = "Rs. " + pendingOrdersArr[i].value[2];

        nameAmountDiv.appendChild(nameP);
        nameAmountDiv.appendChild(amountP);

        // Button Container
        let buttonConDiv = document.createElement("div");
        buttonConDiv.className = "button-container";

        let buttonDelivery = document.createElement("button");
        buttonDelivery.className = "delivery button";
        buttonDelivery.id = pendingOrdersArr[i].key;

        let buttonDelete = document.createElement("button");
        buttonDelete.className = "delete button";
        buttonDelete.innerHTML = "Delete Order";
        buttonDelete.id = pendingOrdersArr[i].key;
        buttonDelete.onclick = function() {
            confirmDialog(buttonDelete);
        };

        if (pendingOrdersArr[i].value[6] == PENDING_CONF) {
            buttonDelete.id = pendingOrdersArr[i].key;

            buttonDelivery.onclick = function() {
                acceptOrder(buttonDelivery);
            };
            buttonDelivery.style.backgroundColor = "darkorange";
            buttonDelivery.innerHTML = "Accept Order";
        } 
        else if (pendingOrdersArr[i].value[6] == SEND_FOR_DELIVERY) {
            buttonDelete.style.visibility = "hidden";

            buttonDelivery.style.backgroundColor = "green";
            buttonDelivery.innerHTML = "Send For Delivery";
            buttonDelivery.onclick = function() {
                sendForDelivery(buttonDelivery);
            };
        } 
        else {
            buttonDelete.style.visibility = "hidden";

            buttonDelivery.style.backgroundColor = "brown";
            buttonDelivery.innerHTML = "Mark As Delivered";
            buttonDelivery.onclick = function() {
                markAsDelivered(buttonDelivery);
            }
        }

        let buttonViewDetail = document.createElement("button");
        buttonViewDetail.className = "view-detail button";
        buttonViewDetail.innerHTML = "View Details";
        buttonViewDetail.id = pendingOrdersArr[i].key;
        buttonViewDetail.onclick = function() {
            viewDetails(buttonViewDetail, true);
        }

        buttonConDiv.appendChild(buttonDelete);
        buttonConDiv.appendChild(buttonViewDetail);
        buttonConDiv.appendChild(buttonDelivery);

        nameButtonDiv.appendChild(nameAmountDiv);
        nameButtonDiv.appendChild(buttonConDiv);

        orderDetails.appendChild(nameInitialDiv);
        orderDetails.appendChild(nameButtonDiv);    

        pendingOrders.appendChild(orderDetails);
    }
}


function updatePendingData() {
    let pendingOrders = document.getElementById("pending-orders");
    while (pendingOrders.firstChild) {
        pendingOrders.removeChild(pendingOrders.lastChild);
    }

    pendingOrder();
}

function confirmDialog(button) {
  if (confirm("Are you sure you want to delete this order?")) {
    deleteOrder(button);
  }
}

function deleteOrder(button) {
    for (i = 0; i < pendingOrdersArr.length; i++) {
        if (pendingOrdersArr[i].key == button.id) {
            pendingOrdersArr.splice(i, 1);
            
            updatePendingData();
        }
    }
}

function viewDetails(button, isPedingDetail) {
    let orderNo = document.getElementById("order_no");
    let orderDate = document.getElementById("order_date");
    let orderTime = document.getElementById("order_time");
    let paymentMode = document.getElementById("payment_mode");
    let status = document.getElementById("order_status");
    let name = document.getElementById("ordered_by");
    let address = document.getElementById("customer_address");
    let mobile = document.getElementById("order_mobile");
    let instructions = document.getElementById("instructions");


    if (isPedingDetail) {
        for (i = 0; i < pendingOrdersArr.length; i++) {
            if (pendingOrdersArr[i].key == button.id) {
                orderNo.innerHTML = pendingOrdersArr[i].key;
                orderDate.innerHTML = pendingOrdersArr[i].value[4];
                orderTime.innerHTML = pendingOrdersArr[i].value[3];
                paymentMode.innerHTML = pendingOrdersArr[i].value[8];
                status.innerHTML = pendingOrdersArr[i].value[6];
                name.innerHTML = pendingOrdersArr[i].value[0];
                address.innerHTML = pendingOrdersArr[i].value[5];
                mobile.innerHTML = pendingOrdersArr[i].value[1];
                instructions.innerHTML = pendingOrdersArr[i].value[7];

                document.getElementById("view_detail_popup").style.display= "block";
            }
        }
    } else {
        for (i = 0; i < deliveredOrdersArr.length; i++) {
            if (deliveredOrdersArr[i].key == button.id) {
                orderNo.innerHTML = deliveredOrdersArr[i].key;
                orderDate.innerHTML = deliveredOrdersArr[i].value[4];
                orderTime.innerHTML = deliveredOrdersArr[i].value[3];
                paymentMode.innerHTML = deliveredOrdersArr[i].value[8];
                status.innerHTML = deliveredOrdersArr[i].value[6];
                name.innerHTML = deliveredOrdersArr[i].value[0];
                address.innerHTML = deliveredOrdersArr[i].value[5];
                mobile.innerHTML = deliveredOrdersArr[i].value[1];
                instructions.innerHTML = deliveredOrdersArr[i].value[7];

                document.getElementById("view_detail_popup").style.display= "block";
            }
        }
    }
}

function acceptOrder(button) {
    for (i = 0; i < pendingOrdersArr.length; i++) {
        if (pendingOrdersArr[i].key == button.id) {
            pendingOrdersArr[i].value[6] = SEND_FOR_DELIVERY;
        }
    }

    updatePendingData();
}

function sendForDelivery(button) {
    let instruction = document.getElementById("user_instruction");
    let deliveryInstruction = document.getElementById("delivery_instruction");
    
    let assignTD = document.getElementById("assign-button");
    while (assignTD.firstChild) {
        assignTD.removeChild(assignTD.lastChild);
    }

    for (i = 0; i < pendingOrdersArr.length; i++) {
        if (pendingOrdersArr[i].key == button.id) {
            instruction.innerHTML = pendingOrdersArr[i].value[7];
            
            if (pendingOrdersArr[i].value[8].toLowerCase() == "cash") {
                deliveryInstruction.innerHTML = "Collect Cash";
            } else {
                deliveryInstruction.innerHTML = "Card Payment";
            }

            let assignTD = document.getElementById("assign-button");

            let assignButton = document.createElement("button");
            assignButton.id = button.id;
            assignButton.className = "button-color";
            assignButton.onclick = function() {
                assignAgent(assignButton);
            };
            assignButton.innerHTML = "Assign";

            assignTD.appendChild(assignButton);
            document.getElementById('delivery_popup').style.display = 'block';
        }
    }
}

function assignAgent(button) {
    document.getElementById('delivery_popup').style.display='none';

    for (i = 0; i < pendingOrdersArr.length; i++) {
        if (pendingOrdersArr[i].key == button.id) {
            pendingOrdersArr[i].value[6] = SENT_FOR_DELIVERY;

            var invoice = window.open("invoice.php", '_blank');
            invoice.focus();
        }
    }

    updatePendingData();
}

function markAsDelivered(button) {
    for (i = 0; i < pendingOrdersArr.length; i++) {
        if (pendingOrdersArr[i].key == button.id) {
            deliveredOrdersArr.unshift({
                key: button.id,
                value: [pendingOrdersArr[i].value[0], pendingOrdersArr[i].value[1], pendingOrdersArr[i].value[2], pendingOrdersArr[i].value[3], pendingOrdersArr[i].value[4], pendingOrdersArr[i].value[5], DELIVERED, pendingOrdersArr[i].value[7], pendingOrdersArr[i].value[8], "1:30 pm"]
            });

            pendingOrdersArr.splice(i, 1);

            updatePendingData();
            updateDeliveredData();
        }
    }
}


function updateDeliveredData() {
    let pendingOrders = document.getElementById("delivered-orders");
    while (pendingOrders.firstChild) {
        pendingOrders.removeChild(pendingOrders.lastChild);
    }

    deliveredOrder();
}


// Delivered Orders
function deliveredOrder() {
    for (i = 0; i < deliveredOrdersArr.length; i++) {

        let pendingOrders = document.getElementById("delivered-orders");

        let orderDetails = document.createElement("div");
        orderDetails.className = "order_details";

        let nameInitialDiv = document.createElement("div");
        nameInitialDiv.className = "name-initial";
        nameInitialDiv.style.backgroundColor = getRandomColor();
        nameInitialDiv.innerHTML = deliveredOrdersArr[i].value[0][0];

        // Name and Buttons Container
        let nameButtonDiv = document.createElement("div");
        nameButtonDiv.className = "name-and-button";

        //Name and Amount View
        let nameAmountDiv = document.createElement("div");
        nameAmountDiv.className = "name-and-amount";

        let nameP = document.createElement("p");
        nameP.className = "user_name";

        let spanUsername = document.createElement("span");
        spanUsername.innerHTML = deliveredOrdersArr[i].value[0] + "&ensp;";

        let spanTime = document.createElement("span");
        spanTime.className = "smaller light-black";
        spanTime.innerHTML = "(" + deliveredOrdersArr[i].value[3] +")";

        nameP.appendChild(spanUsername);
        nameP.appendChild(spanTime);

        let amountP = document.createElement("p");
        amountP.className = "amount";
        amountP.innerHTML = "Rs. " + deliveredOrdersArr[i].value[2];

        nameAmountDiv.appendChild(nameP);
        nameAmountDiv.appendChild(amountP);

        // Button Container
        let buttonConDiv = document.createElement("div");
        buttonConDiv.className = "button-container";

        let spanDeliveryTime = document.createElement("span");
        spanDeliveryTime.className = "delivery-time";
        spanDeliveryTime.innerHTML = "Delivered at " + deliveredOrdersArr[i].value[9];

        let buttonViewDetail = document.createElement("button");
        buttonViewDetail.className = "view-detail button";
        buttonViewDetail.innerHTML = "View Details";
        buttonViewDetail.id = deliveredOrdersArr[i].key;
        buttonViewDetail.onclick = function() {
            viewDetails(buttonViewDetail, false);
        }

        let buttonInvoice = document.createElement("button");
        buttonInvoice.className = "invoice button";

        buttonInvoice.id = deliveredOrdersArr[i].key;
        buttonInvoice.onclick = function() {
            var invoice = window.open("invoice.php", '_blank');
            invoice.focus();
        };
        buttonInvoice.style.backgroundColor = "darkorange";
        buttonInvoice.innerHTML = "Print Invoice";

        buttonConDiv.appendChild(spanDeliveryTime);
        buttonConDiv.appendChild(buttonViewDetail);
        buttonConDiv.appendChild(buttonInvoice);

        nameButtonDiv.appendChild(nameAmountDiv);
        nameButtonDiv.appendChild(buttonConDiv);

        orderDetails.appendChild(nameInitialDiv);
        orderDetails.appendChild(nameButtonDiv);    

        pendingOrders.appendChild(orderDetails);
    }
}