'use strict'

const buttons = document.querySelectorAll("button");
const navLinks = document.querySelectorAll('.nav-link');
const button = document.querySelector('.button-one');
const menu = document.querySelector('.flxend.slimenmain');
const slidermen = document.getElementById('slimdermain'); 

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    const currentState = button.getAttribute("data-state");

    if (!currentState || currentState === "closed") {
      button.setAttribute("data-state", "opened");
      button.setAttribute("aria-expanded", "true");
    } else {
      button.setAttribute("data-state", "closed");
      button.setAttribute("aria-expanded", "false");
    }
  });
});

navLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
      // Remove the active class from all nav links
      navLinks.forEach(function(navLink) {
        navLink.classList.remove('active');
      });
  
      // Add the active class to the clicked nav link
      this.classList.add('active');
  
      // Prevent the default behavior of the link
  
    });
  });

  button.addEventListener('click', () => {
    menu.classList.toggle('show');
  });

  function updateButton() {
    const isButtonExpanded = button.getAttribute('aria-expanded') === 'true';
  
    if (window.innerWidth > 599) {
      if (isButtonExpanded) {
        button.setAttribute('aria-expanded', 'false');
        button.setAttribute('data-state', 'closed'); 
        menu.classList.remove('show'); 
      }
    } 
  }

  window.addEventListener('resize', updateButton);
  
  // Call the function once on page load to set the initial state
  updateButton();

 

 