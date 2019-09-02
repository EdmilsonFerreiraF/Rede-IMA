/*function firstFunction() {

   var actual = navLink[i];
   this.className += " active";
   navDetails.style.display = "flex";
}

var navDetails = document.querySelector(".details");
var navLink = document.getElementsByClassName("adm-panel-nav__link");

if (navLink) {
   for (i = 0; i < navLink.length; i++) {
      navLink[i].addEventListener("click", firstFunction);
   }
}*/

// Variables definitions
var list = document.querySelector(".adm-panel-nav__list");
var item = document.querySelectorAll(".adm-panel-nav__item");
var details = document.querySelectorAll(".details");
var title = document.getElementsByClassName("text__input");
var ptitle = document.querySelector(".details__preview-title");
var text = document.getElementsByClassName("textarea__input");
var ptext = document.querySelector(".details__preview-text");
var img = document.getElementsByClassName("file__input");
var pimg = document.querySelector(".file__input");

var active = false;
/*if (e.target && e.target.matches("adm-panel-nav__item active")) {
    var current = e.target;
}*/

// Get the container element
//var btnContainer = document.getElementById("myDIV");

// Get all buttons with class="btn" inside the container
//var btns = btnContainer.getElementsByClassName("btn");

// Loop through the buttons and add the active class to the current/clicked button

for (var i = 0; i < item.length; i++) {
  var ii = i;
  var doesShow = false;
  item[i].addEventListener("click", function() {
    var details = document.getElementsByClassName("details");
    var current = document.getElementsByClassName("active");
    //details[ii].style.visibility = "visible";
    // If there's no active class
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }
  
    // Add the active class to the current/clicked button
    this.className += " active";
  });
}

/*

title[i].addEventListener("input", function () {
        if (btns[i].className === "adm-panel-nav__link active") {
            // Do search for this.value here
                ptitle.innerHTML = title[i].value;
                //aqui é o codigo que vai ser executado depois do tempo determinado no segundo parametro
        }
});

text[i].addEventListener("input", function () {
        if (btns[i].className === "adm-panel-nav__link active") {
            // Do search for this.value here
            ptext.innerHTML = text[i].value;
        }
});

img[i].addEventListener("input", function () {
        if (btns[i].className === "adm-panel-nav__link active") {
            // Do search for this.value here
            pimg.setAttribute("src", img[i].value[0]);
        }
});
*/