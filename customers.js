var allCustomersArray = [];
var customersArray = [];
var agentsArry = [];

customersArray.push({
    key: "customer001",
    value: ["Rohit Gupta", "rohitgupta@gmail.com", "9879123743", "Male", "Apr 2019"]
})

customersArray.push({
    key: "customer002",
    value: ["Prateek Malpani", "prateekmalpani@gmail.com", "8812343345", "Male", "Jul 2019"]
})

customersArray.push({
    key: "customer007",
    value: ["Emily Bett", "emilybett@gmail.com", "7871324124", "Female", "Jan 2020"]
})

agentsArry.push({
    key: "agent001",
    value: ["Rohit Gupta", "Cecilia Chapman 711-2880 Nulla St. Mankato Mississippi 96522", "9879123743"]
})

agentsArry.push({
    key: "agent002",
    value: ["Prateek Malpani", "Cris Watson P.O. Box 283 8562 Fusce Rd. Frederick Nebraska 20620", "8812343345"]
})

agentsArry.push({
    key: "agent007",
    value: ["Patrick Jane", "Celeste Slater 606-3727 Ullamcorper. Street Roseville NH 11523", "7871324124"]
})


// Generating Random Color
function getRandomColor() {
    return "#342948";
}


// Add All Customer to Middle Container
function showAllCustomers(which) {
    let customerView = document.getElementById("customer-view");
    let custInfo = document.getElementById("cust_info");
    custInfo.style.display = "none";
    
    var dataArr = [];
    
    switch(which) {
        case 1:
            dataArr = customersArray;
            break;
        
        case 2:
            dataArr = agentsArry;
    }
    
    while (customerView.firstChild) {
        customerView.removeChild(customerView.lastChild);
    }
    
    for(i = 0; i < dataArr.length; i++) {
        let customerId = dataArr[i].key;
        let customerName = dataArr[i].value[0];
        let email = dataArr[i].value[1];
        let mobile = dataArr[i].value[2];

        let customers;

        if (which == 1) {
            customers = addAllCustomers(customerName, email, customerId, which, customersArray);
        } else {
            customers = addAllCustomers(customerName, mobile, customerId, which, agentsArry);
        }

        customerView.appendChild(customers);
    }
}


// Adding a single customer
function addAllCustomers(customerName, email, customerId, which, dataArray) {
    let custInfo = document.getElementById("cust_info");
    custInfo.style.display = "none";
    
    // Single Customer
    let singleCustomerDiv = document.createElement("div");
    singleCustomerDiv.className = "single-customer-view";

    // Customer Name Initial
    let nameInitialDiv = document.createElement("div");
    nameInitialDiv.className = "name-initial";
    nameInitialDiv.style.backgroundColor = getRandomColor();
    nameInitialDiv.innerHTML = customerName[0].toUpperCase();

    // Customer Name and email
    let nameMobileDiv = document.createElement("div");
    nameMobileDiv.className = "name-mobile-div";

    let pcustomerName = document.createElement("p");
    pcustomerName.className = "user-name";

    let spancustomerId = document.createElement("span");
    spancustomerId.innerHTML = customerName;       // Appending Customer Name
    pcustomerName.appendChild(spancustomerId);      // Appending span as child

    let pEmail = document.createElement("p");
    pEmail.className = "amount";
    pEmail.innerHTML = email;
    
    // Appending Name and Amount to nameemail Div
    nameMobileDiv.appendChild(pcustomerName);
    nameMobileDiv.appendChild(pEmail);

    // Creating Button Container and Add Button
    let buttonDiv = document.createElement("div");
    buttonDiv.className = "show-button-container";

    let buttonAdd = document.createElement("button");
    buttonAdd.className = "show-button";
    buttonAdd.innerHTML = "Show Details";
    buttonAdd.name = customerId;
    buttonAdd.onclick = function() {
        showCustomerDetails(buttonAdd.name, which);
    };
    
    if (which == 2) {
        document.getElementById("top_header").innerHTML = "Agent Information";
        
        let buttonDelete = document.createElement("button");
        buttonDelete.className = "delete_agent";
        buttonDelete.innerHTML = "Delete";
        buttonDelete.name = customerId;
        buttonDelete.onclick = function() {
            for(i = 0; i < dataArray.length; i++) {
                if (dataArray[i].key == buttonDelete.name) {
                    dataArray.splice(i, 1);
                    break;
                }
            }
            showAllCustomers(which);
        };
        
        let buttonEdit = document.createElement("button");
        buttonEdit.className = "edit_agent";
        buttonEdit.innerHTML = "Edit";
        buttonEdit.name = customerId;
        buttonEdit.onclick = function() {
            for(i = 0; i < dataArray.length; i++) {
                if (dataArray[i].key == buttonEdit.name) {
                    localStorage["name"] = dataArray[i].value[0];
                    localStorage["mobile"] = dataArray[i].value[2];
                    localStorage["address"] = dataArray[i].value[1];
                    localStorage["gender"] = "Male";
                    localStorage["completed"] = "not";
                    break;
                }
            }
            window.location = "add_agent.php";
        };
        
        buttonDiv.appendChild(buttonDelete);
        buttonDiv.appendChild(buttonEdit);
    }

    buttonDiv.appendChild(buttonAdd);       // Appening button to Button Container

    // Appending Tags to Single Customer View
    singleCustomerDiv.appendChild(nameInitialDiv);
    singleCustomerDiv.appendChild(nameMobileDiv);
    singleCustomerDiv.appendChild(buttonDiv);

    return singleCustomerDiv;
}


function showCustomerDetails(customerId, which) {
    let custInfo = document.getElementById("cust_info");
    let image = document.getElementById("user_image");
    let username = document.getElementById("username");
    let email_id = document.getElementById("email_id");
    let mobile = document.getElementById("mobile");
    let gender = document.getElementById("gender");
    let lableSince = document.getElementById("label_since");
    let since = document.getElementById("since");
    var dataArr = [];
    
    switch(which) {
        case 1:
            dataArr = customersArray;
            break;
        
        case 2:
            dataArr = agentsArry;
    }
    
    for(i = 0; i < dataArr.length; i++) {
        if (dataArr[i].key == customerId) {
            if (which == 2) {
                document.getElementsByName(dataArr[i].key)[2].style.backgroundColor = "#2788E5";
            } else {
                document.getElementsByName(dataArr[i].key)[0].style.backgroundColor = "#2788E5";
            }
            
            if (which == 1) {
                username.innerHTML = dataArr[i].value[0];
                email_id.innerHTML = dataArr[i].value[1];
                mobile.innerHTML = dataArr[i].value[2];
                gender.innerHTML = dataArr[i].value[3];
                since.innerHTML = dataArr[i].value[4];
            } else {
                username.innerHTML = dataArr[i].value[0];
                email_id.innerHTML = "- no email -";
                mobile.innerHTML = dataArr[i].value[2];
                gender.innerHTML = "Male";
                since.innerHTML = dataArr[i].value[1];
                lableSince.innerHTML = "Address";
            }
            
        } else {
            if (which == 2) {
                document.getElementsByName(dataArr[i].key)[2].style.backgroundColor = "#42A5F5";
            } else {
                document.getElementsByName(dataArr[i].key)[0].style.backgroundColor = "#42A5F5";
            }
        }
    }
    
    custInfo.style.display = "block";
}