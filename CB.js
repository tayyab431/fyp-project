
const body = document.querySelector("body"),
    nav = document.querySelector("nav"),
    modeToggle = document.querySelector(".dark-light"),
    searchToggle = document.querySelector(".searchToggle"),
    sidebarOpen = document.querySelector(".sidebarOpen"),
    siderbarClose = document.querySelector(".siderbarClose");
    const logo = document.getElementById('logo');
    const darkLogo = document.getElementById('dark-logo');

    let getMode = localStorage.getItem("mode");
        if(getMode && getMode === "dark-mode"){
          body.classList.add("dark");
        }
// js code to toggle dark and light mode
    modeToggle.addEventListener("click" , () =>{
      modeToggle.classList.toggle("active");
      body.classList.toggle("dark");
     // Toggle the display of the light and dark logos based on the dark mode state
  if (document.body.classList.contains('dark')) {
    logo.style.display = 'inline-block'; // Hide the light logo in dark mode
    darkLogo.style.display = 'none'; // Show the dark logo in dark mode
  } else {
    logo.style.display = 'none'; // Show the light logo in light mode
    darkLogo.style.display = 'inline-block'; // Hide the dark logo in light mode
  }
     
  // Store the user-selected mode in local storage
  const selectedMode = body.classList.contains("dark") ? "dark-mode" : "light-mode";
  setModeInLocalStorage(selectedMode);
      // js code to keep user selected mode even page refresh or file reopen
      if (storedMode === "dark-mode") {
        body.classList.add("dark");
      }else{
        body.classList.remove("dark");
      }
       // js code to keep user selected mode even page refresh or file reopen
     // if(!body.classList.contains("dark")){
       // localStorage.setItem("mode" , "light-mode");
   // }else{
      //  localStorage.setItem("mode" , "dark-mode");
   // }
    });

// js code to toggle search box
      searchToggle.addEventListener("click" , () =>{
      searchToggle.classList.toggle("active");
    });

    
//   js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
  nav.classList.add("active");
});

body.addEventListener("click" , e =>{
  let clickedElm = e.target;

  if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
      nav.classList.remove("active");
  }
});



function toggleSection(sectionId) {
  // Hide all sections
  var sections = document.getElementsByClassName("sec-porfo");
  for (var i = 0; i < sections.length; i++) {
    sections[i].style.display = "none";
  }
 // Show the clicked section
  var section = document.getElementById(sectionId);
  section.style.display = "block";
}
 // Show the sec-portfolio1 section by default
window.addEventListener('load', function() {
  document.getElementById("sec-portfolio1").style.display = "block";
 // Hide all other sections
  var sections = document.getElementsByClassName("sec-porfo");
  for (var i = 1; i < sections.length; i++) {
    sections[i].style.display = "none";
  } 
});
function clickbutton(){
var buttons = document.querySelectorAll('.toggle-btn');

buttons.forEach(function(button) {
button.addEventListener('click', function() {
  buttons.forEach(function(btn) {
    btn.classList.remove('active');
  });
  this.classList.add('active');
 });
});

}

//chatbot code js


//chatbot code end

//language php code
 