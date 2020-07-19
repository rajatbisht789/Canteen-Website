var ordersArr = [];

var DELIVERED = "DELIVERED";

var orderDetail = ["Animesh Jain", "9876543210", "200", "12:50 pm", "16 Mar 2020", "E-247 VIT Vellore", DELIVERED, "No Instructions", "Cash"];

ordersArr.push({
    key: "Order001",
    value: orderDetail
})

orderDetail = ["Prateek Malpani", "9876543210", "544", "12:15 pm", "16 Mar 2020", "G-111 VIT Vellore", DELIVERED, "Please call before delivery", "Card"];

ordersArr.push({
    key: "Order002",
    value: orderDetail
})

window.onload = function() {
    var labelHeading = document.getElementById("today-date");
    var d = new Date();
    var day = d.getDate();
    var x = d.toDateString().substr(4, 3);
    var year = d.getFullYear();
    labelHeading.innerHTML = '(' + day + ' ' + x + ', ' + year +')';

    getOrders();
};

// Generating Random Color
function getRandomColor() {
    var letters = '0123456789AC';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 12)];
    }
    return color;
}

function getOrders() {
    for (i = 0; i < ordersArr.length; i++) {

        let pendingOrders = document.getElementById("pending-orders");

        let orderDetails = document.createElement("div");
        orderDetails.className = "order_details";

        let nameInitialDiv = document.createElement("div");
        nameInitialDiv.className = "name-initial";
        nameInitialDiv.style.backgroundColor = getRandomColor();
        nameInitialDiv.innerHTML = ordersArr[i].value[0][0];

        // Name and Buttons Container
        let nameButtonDiv = document.createElement("div");
        nameButtonDiv.className = "name-and-button";

        //Name and Amount View
        let nameAmountDiv = document.createElement("div");
        nameAmountDiv.className = "name-and-amount";

        let nameP = document.createElement("p");
        nameP.className = "user_name";

        let spanUsername = document.createElement("span");
        spanUsername.className = "medium";
        spanUsername.innerHTML = ordersArr[i].value[0] + "&ensp;";

        let spanTime = document.createElement("span");
        spanTime.className = "smaller light-black";
        spanTime.innerHTML = "(" + ordersArr[i].value[3] +")";

        nameP.appendChild(spanUsername);
        nameP.appendChild(spanTime);

        let amountP = document.createElement("p");
        amountP.className = "amount medium";
        amountP.innerHTML = "Rs. " + ordersArr[i].value[2];

        nameAmountDiv.appendChild(nameP);
        nameAmountDiv.appendChild(amountP);

        // Button Container
        let buttonConDiv = document.createElement("div");
        buttonConDiv.className = "button-container";

        let buttonDelivery = document.createElement("button");
        buttonDelivery.className = "delivery button";
        buttonDelivery.id = ordersArr[i].key;
        buttonDelivery.style.backgroundColor = "darkorange";
        buttonDelivery.innerHTML = "Print Invoice";
        buttonDelivery.onclick = function() {
            window.open('invoice.php', '_blank');
        }

        let buttonExpand = document.createElement("button");
        buttonExpand.className = "view-detail button";
        buttonExpand.innerHTML = "Ordered Items";
        buttonExpand.onclick = function() {
            localStorage["comingFrom"] = "AllOrders";
            window.open('single_order_view.php', '_blank');
        }

        let buttonViewDetail = document.createElement("button");
        buttonViewDetail.className = "view-detail button";
        buttonViewDetail.innerHTML = "View Details";
        buttonViewDetail.id = ordersArr[i].key;
        buttonViewDetail.onclick = function() {
            viewDetails(buttonViewDetail);
        }

        buttonConDiv.appendChild(buttonExpand);
        buttonConDiv.appendChild(buttonViewDetail);
        buttonConDiv.appendChild(buttonDelivery);

        nameButtonDiv.appendChild(nameAmountDiv);
        nameButtonDiv.appendChild(buttonConDiv);

        orderDetails.appendChild(nameInitialDiv);
        orderDetails.appendChild(nameButtonDiv);    

        pendingOrders.appendChild(orderDetails);
    }
}

function viewDetails(button) {
    let orderNo = document.getElementById("order_no");
    let orderDate = document.getElementById("order_date");
    let orderTime = document.getElementById("order_time");
    let paymentMode = document.getElementById("payment_mode");
    let status = document.getElementById("order_status");
    let name = document.getElementById("ordered_by");
    let address = document.getElementById("customer_address");
    let mobile = document.getElementById("order_mobile");
    let instructions = document.getElementById("instructions");


    for (i = 0; i < ordersArr.length; i++) {
        if (ordersArr[i].key == button.id) {
            orderNo.innerHTML = ordersArr[i].key;
            orderDate.innerHTML = ordersArr[i].value[4];
            orderTime.innerHTML = ordersArr[i].value[3];
            paymentMode.innerHTML = ordersArr[i].value[8];
            status.innerHTML = ordersArr[i].value[6];
            name.innerHTML = ordersArr[i].value[0];
            address.innerHTML = ordersArr[i].value[5];
            mobile.innerHTML = ordersArr[i].value[1];
            instructions.innerHTML = ordersArr[i].value[7];

            document.getElementById("view_detail_popup").style.display= "block";
        }
    }
}
