//Unit price
var blueTshirt = 4.99;
var redTshirt = 5.99;
var bluePants = 10.99;
var redPants = 11.99;

//number of item 
var BTnbr = document.getElementById("btn").value;
var RTnbr = document.getElementById("rtn").value;
var BPnbr = document.getElementById("bpn").value;
var RPnbr = document.getElementById("rpn").value;
var user = document.getElementById("userID").value;
var password = document.getElementById("password").value;
var shipping = document.getElementsByName("shipping").value;


function reset() {
    window.location.reload();
}

function itemCheck() {
    var count = 0;
    if (BTnbr > 0) {
        count++;
    }
    if (RTnbr > 0) {
        count++;
    }
    if (BPnbr > 0) {
        count++;
    }
    if (RPnbr > 0) {
        count++;
    }
    if (count >= 3) {
        return true;
    } else if (BTnbr < 0 || RTnbr < 0 || BPnbr < 0 || RPnbr < 0) {
        alert("You can't order a negative number");
        return false;
    } else if (!user.includes(".com") || !user.includes("@")) {
        alert("Error, your username is not in the form of email@domain.com");
        return false;
    } else {
        alert("You must order over 3 different type of staff");
        return false;
    }

}



function loginCheck() {
    mail = document.getElementById("userID").value;
    psw = document.getElementById("password").value;
}