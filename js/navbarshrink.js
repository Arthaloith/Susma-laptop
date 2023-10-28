window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    var navbar = document.getElementsByClassName("navbar")[0];
    var logo = document.getElementsByClassName("logo")[0];
    navbar.style.padding = "10px 10px";
    
  } else {
    var navbar = document.getElementsByClassName("navbar")[0];
    var logo = document.getElementsByClassName("logo")[0];
    navbar.style.padding = "80px 10px";
    
  }
} 