/**
* Author: Rohan Soni 103169933
* Target: enquire.html
* Purpose: JavaScript
* Created: 19/04/2021
* Last updated: 25/04/2021
* Credit: (Lecture 5/6/7 notes)
*/

"use strict";
var debug = true;
function validate() {
  var errMsg = "";
  var result = true;
  var quant = document.getElementById("Quantity").value
  var postcode = document.getElementById("pcode").value;

  if (!debug) {
    if (!quant.match(/^[0-9]+$/)) {
      errMsg = errMsg + "No. of days should be a positive number.\n";
      result = false;
    }

    if (postcode.match(/^[0-9]+$/))
    {
      if (document.getElementById("state").value == "VIC") {
        if (!postcode.match(/^[3,8]/)) {
          errMsg = errMsg + "Postcode of Victoria starts with 3 or 8.\n";
          result = false;
        }
      }
      else if (document.getElementById("state").value == "NSW") {
        if (!postcode.match(/^[1,2]/)) {
          errMsg = errMsg + "Postcode of New South Wales starts with 1 or 2.\n";
          result = false;
        }
      }
      else if (document.getElementById("state").value == "QLD") {
        if (!postcode.match(/^[4,9]/)) {
          errMsg = errMsg + "Postcode of Queensland starts with 4 or 9.\n";
          result = false;
        }
      }
      else if (document.getElementById("state").value == "NT") {
        if (!postcode.match(/^[0]/)) {
          errMsg = errMsg + "Postcode of Northern Territory starts with 0.\n";
          result = false;
        }
      }
      else if (document.getElementById("state").value == "WA") {
        if (!postcode.match(/^[6]/)) {
          errMsg = errMsg + "Postcode of Western Australia starts with 6.\n";
          result = false;
        }
      }
      else if (document.getElementById("state").value == "SA") {
        if (!postcode.match(/^[5]/)) {
          errMsg = errMsg + "Postcode of South Australia starts with 5.\n";
          result = false;
        }
      }
      else if (document.getElementById("state").value == "TAS") {
        if (!postcode.match(/^[7]/)) {
          errMsg = errMsg + "Postcode of Tasmania starts with 7.\n";
          result = false;
        }
      }
      else if (document.getElementById("state").value == "ACT") {
        if (!postcode.match(/^[0]/)) {
          errMsg = errMsg + "Postcode of Australian Capital Territory starts with 0.\n";
          result = false;
        }
      }
    }
    if (document.getElementById("style").value == "none") {
      errMsg = errMsg + "Please select a Venue style.\n";
      result = false;
    }
    if (document.getElementById("layout").value == "none") {
      errMsg = errMsg + "Please select a Venue layout.\n";
      result = false;
    }
  }

  if (result) {
    storeDetails()
  }
  if (errMsg !=""){
    alert(errMsg);
  }
  return result;
}
function storeDetails() {
  sessionStorage.ufname = document.getElementById("fname").value;
  sessionStorage.ulname = document.getElementById("lname").value;
  sessionStorage.uemail = document.getElementById("contemail").value;
  sessionStorage.uphn = document.getElementById("pno").value;
  sessionStorage.ustreet = document.getElementById("stadd").value;
  sessionStorage.usub = document.getElementById("sub").value;
  sessionStorage.ustate = document.getElementById("state").value;
  sessionStorage.upcode = document.getElementById("pcode").value;
  sessionStorage.uprefcont = document.getElementsByName("Preferred contact").value;
  sessionStorage.venuest = document.getElementById("style").value;
  sessionStorage.venuelay = document.getElementById("layout").value;
  sessionStorage.peop = document.getElementById("nop").value;
  sessionStorage.days = document.getElementById("Quantity").value;
}


function init() {
  var asgForm = document.getElementById("AssgnFrm1");
  asgForm.onsubmit = validate;
}

window.onload = init;
