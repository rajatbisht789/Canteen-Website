function func(v) {
    let ele = document.getElementsByClassName('address');
    let pop = document.getElementsByClassName('popup');
    
    let lent = document.getElementsByClassName('address').length;
    let len = document.getElementsByClassName('pop_container').length;
    
    if(v != 2 && v != 0){
        for(var i=0;i<lent;i++)
            ele[i].style.display="inline-block";
    } else {
        for(var i = 0; i < lent; i++)
            ele[i].style.display = "none";
    }

    for(var i=0;i<len;i++) {
        if(i == v)
            pop[v].style.display="inline-block";
        else
            pop[i].style.display="none";    
    }

    if(v != 1) {
        var add = document.getElementsByClassName('addrs');
        var addressLen = document.getElementsByClassName('addrs').length;
        
        for(var i = 0; i < addressLen; i++) {
            add[i].style.display="block";
        }
        
        document.getElementById("addrsMain").style.display = "none";
    }
}


function hide() {
    let ele = document.getElementsByClassName('address');
    let pop = document.getElementsByClassName('popup');

    let lent = document.getElementsByClassName('address').length;
    let len = document.getElementsByClassName('pop_container').length;

    for(var i = 0; i < lent; i++){
        ele[i].style.display="none";
    }

    for(var i = 0; i < len; i++) {
        pop[i].style.display="none";
    }

    let add = document.getElementsByClassName('addrs');
    let addressLen = document.getElementsByClassName('addrs').length;

    for(var i = 0; i < addressLen; i++) {
        add[i].style.display="block";
    }

    document.getElementById("addrsMain").style.display="none";
}


function promoMsg() {
    let a = document.getElementById("promo-msg");
    a.style.color = "green";
    a.style.fontSize = "14px";
    a.innerHTML = "Promo-Code Applied";
}


function add_address() {
    let par = document.getElementById("address_parent");
    
    let ele = document.createElement("div");
    ele.id="address";
    ele.className="address";

    par.appendChild(ele);

    let add=document.createElement("span");
    add.innerHTML = "Mukesh Agarwal<br>Room No.: " + document.getElementById("text_room_number").value + "<br>J Block, Mens Hostel<br>" + "<br>";

    let but = document.createElement("button");
    but.innerHTML="Deliver Here";
    but.className = "deliver-button";
    ele.appendChild(add);
    ele.appendChild(but);

    show();
}

function addAddress() {
    let add = document.getElementsByClassName('addrs');
    let main = document.getElementById('addrsMain');
    
    let len = document.getElementsByClassName('addrs').length;
    
    for(var i = 0; i < len; i++)
        add[i].style.display="none";
    
    main.style.display="inline-block";

}
function show() {
    document.getElementById('addrsMain').style.display='none';
    
    let add = document.getElementsByClassName('addrs');
    let len = document.getElementsByClassName('addrs').length;
    
    for (var i = 0; i < len; i++)
        add[i].style.display="block";
    
    document.getElementById("addrsMain").style.display="none";

}


function closeLogin() {
    document.getElementById('id01').style.display='none';
    document.getElementById('id02').style.display='block';
}


function closeSignup() {
    document.getElementById('id02').style.display='none';
    document.getElementById('id01').style.display='block';
}


function funCODBtn() {  
    var ele=document.getElementsByClassName('address');
    var lent=document.getElementsByClassName('address').length;

    for(var i=0;i<lent;i++){
        ele[i].style.display="none";
    }
    document.getElementById("COD-button").style.backgroundColor="Green";
    document.getElementById('cod-proceed').style.display='block';
    document.getElementById('card-proceed').style.display="none";
}


function funCardBtn() {
    document.getElementById('id04').style.display='block';
    document.getElementById('COD-button').style.backgroundColor="black";
    document.getElementById('cod-proceed').style.display="none";
}

window.onload = function() {
    var selectMonth = document.getElementById("months");
    var optionTag = document.createElement("option");

    optionTag.value = "";
    optionTag.innerHTML = "-";
    selectMonth.appendChild(optionTag);

    for (var i = 1; i < 13; i++) {
        var optionTag = document.createElement("option");
        optionTag.value = i;
        optionTag.innerHTML = i;
        selectMonth.appendChild(optionTag);
    }

    var selectYear = document.getElementById("years");
    var optionTag = document.createElement("option");

    optionTag.value = "";
    optionTag.innerHTML = "-";
    selectYear.appendChild(optionTag);

    for (var i = 2020; i < 2051; i++) {
        var optionTag = document.createElement("option");
        optionTag.value = i;
        optionTag.innerHTML = i;
        selectYear.appendChild(optionTag);
    }
}