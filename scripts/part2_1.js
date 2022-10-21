/**
* Author: Rohan Soni 103169933
* Target: payment.html
* Purpose: JavaScript
* Created: 19/04/2021
* Last updated: 25/04/2021
* Credit: (Lecture 5/6/7 notes)
*/

"use strict";
var debug = true;
function validate() {
  if (!debug) {
    var errMsg = "";
    var result = true;
    var creditNumb = document.getElementById("ccNum").value;
  //Select one of Visa, MasterCard or American Express
    if (document.getElementById("cctype").value == "none") {
      errMsg = errMsg + "Credit card type must be one of Visa, Mastercard, or American Express.\n";
      result = false;
    }

    if (creditNumb.match(/^[0-9]+$/)) {
        //First digit 4
      if (document.getElementById("cctype").value == "Visa") {
        if (!creditNumb.match(/^4[0-9]{15}$/)) {
          errMsg = errMsg + "Visa cards have 16 digits and start with a 4.\n";
          result = false;
        }
      }
      // First digits 51,52,53,54 or 55
      else if (document.getElementById("cctype").value == "Mastercard") {
        if (!creditNumb.match(/^5[1-5][0-9]{14}$/)) {
          errMsg = errMsg + "MasterCard have 16 digits and start with digits 51 through to 55.\n"
          result = false;
        }
      }
      // First digits 34 or 37
      else if (document.getElementById("cctype").value == "AE") {
        if (!creditNumb.match(/^3[4,7][0-9]{13}$/)) {
          errMsg = errMsg + "American Express has 15 digits and starts with 34 or 37.\n";
          result = false;
        }
      }
    }
    if (errMsg !=""){
      alert(errMsg);
    }
    return result;
  }
}


function getDetails(){
  var cost = 0;
  var days = Number(sessionStorage.days);
  var people = Number(sessionStorage.peop);
  var layout = sessionStorage.venuelay;
	if(sessionStorage.ufname != undefined){
    document.getElementById("confirm_name").textContent = sessionStorage.ufname + " " + sessionStorage.ulname;
    document.getElementById("confirm_email").textContent =sessionStorage.uemail;
		document.getElementById("confirm_phone").textContent =sessionStorage.uphn;
    document.getElementById("confirm_address").textContent =sessionStorage.ustreet + " " + sessionStorage.usub + " ";
    document.getElementById("confirm_state").textContent =sessionStorage.ustate;
    document.getElementById("confirm_postcode").textContent =sessionStorage.upcode;
    document.getElementById("confirm_prefcont").textContent =sessionStorage.uprefcont;
		document.getElementById("confirm_style").textContent = sessionStorage.venuest;
		document.getElementById("confirm_layout").textContent = sessionStorage.venuelay;
		document.getElementById("confirm_People").textContent =sessionStorage.peop;
		document.getElementById("confirm_days").textContent = sessionStorage.days;

    document.getElementById("ufirstname").value = sessionStorage.ufname;
    document.getElementById("ulastname").value = sessionStorage.ulname;
    document.getElementById("usremail").value = sessionStorage.uemail;
    document.getElementById("uphone").value = sessionStorage.uphn;
    document.getElementById("uaddress").value = sessionStorage.ustreet + " " + sessionStorage.usub + " " + sessionStorage.ustate;
    document.getElementById("urstate").value = sessionStorage.ustate;
    document.getElementById("upostcode").value = sessionStorage.upcode;
    document.getElementById("usrprefcont").value = sessionStorage.uprefcont;
    document.getElementById("venueStyle").value = sessionStorage.venuest;
    document.getElementById("venueLayout").value = sessionStorage.venuelay;
    document.getElementById("attPeople").value = sessionStorage.peop;
    document.getElementById("NoOfDays").value = sessionStorage.days;


    if (layout == "stand") {
      cost = 37 * people * days;
    }
    else if (layout == "none") {
      cost = 0;
    }
    else if (layout == "banq") {
      cost = 45 * people * days;
    }
    else if (layout == "boad") {
      cost = 40 * people * days;
    }
    else if (layout == "theat") {
      cost = 45 * people * days;
    }
    else if (layout == "ushape") {
      cost = 41 * people * days;
    }
    else if (layout == "pod") {
      cost = 47 * people * days;
    }
    document.getElementById("confirm_cost").textContent = cost;
    document.getElementById("cost").value = cost;

  }
}
function cancelBooking() {
  window.location = "index.html";
  sessionStorage.clear();
}

function init() {
  var asgForm2 = document.getElementById("AssgnFrm2");
  asgForm2.onsubmit = validate;
  var cancelMyEvent = document.getElementById("cancelButton");
  cancelMyEvent.onclick = cancelBooking;
  getDetails();
}

window.onload = init;
