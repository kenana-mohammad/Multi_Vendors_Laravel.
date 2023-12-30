/*$(document).ready(function(){
    $(window).scroll(function() { // check if scroll event happened
      if ($(document).scrollTop() > 500) { // check if user scrolled more than 50 from top of the browser window
        
        $("nav").css("background-color", "#f8f8f8"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
       
    } else {
        $("nav").css("background-color", "transparent");
         // if not, change it back to transparent
      }
    });
  });*/
  var navbar = document.querySelector('.navbar')

  window.addEventListener('scroll',  () => {

  if (window.scrollY > 500) {
    navbar.classList.add('nav-scrolled');
    
  } else {
    navbar.classList.remove('nav-scrolled')
  }
  });
  