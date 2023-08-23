
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
document.addEventListener("DOMContentLoaded", function() {
  var dropdownToggle = document.querySelector(".dropdown-toggle");
  var dropdownMenu = document.querySelector(".dropdown-menu");

  dropdownToggle.addEventListener("click", function() {
    dropdownMenu.classList.toggle("show");
  });

  document.addEventListener("click", function(event) {
    if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
      dropdownMenu.classList.remove("show");
    }
  });

  var dropdownItems = document.querySelectorAll(".dropdown-item");

  dropdownItems.forEach(function(item) {
    item.addEventListener("click", function() {
      var selectedOption = this.textContent;
      document.querySelector(".dropdown-text").textContent = selectedOption;
      dropdownMenu.classList.remove("show");
    });
  });
});


// card-slider js start
document.addEventListener("DOMContentLoaded", () => {
  // Variable declarations
  const wrapper = document.querySelector(".wrapper"); // Container element for the carousel
  const carousel = document.querySelector(".carousel"); // Carousel element
  const arrowBtns = document.querySelectorAll(".wrapper i"); // Navigation arrow buttons
  const firstCardWidth = carousel.querySelector(".card").offsetWidth; // Width of the first card in the carousel
  const carouselChildrens = [...carousel.children]; // Array of carousel item elements

  let isDragging = false, // Flag to track if the user is currently dragging the carousel
    startX, // Starting X-coordinate of the mouse/touch position during dragging
    startScrollLeft, // Initial scroll position of the carousel during dragging
    timeoutId; // ID of the autoplay timeout

  let cardPerview = Math.round(carousel.offsetWidth / firstCardWidth); // Number of cards visible in the carousel

  // Clone and prepend the last cards to the beginning for infinite scrolling
  carouselChildrens.slice(-cardPerview).reverse().forEach(card => {
    carousel.prepend(card.cloneNode(true));
  });

  // Clone and append the first cards to the end for infinite scrolling
  carouselChildrens.slice(0, cardPerview).forEach(card => {
    carousel.append(card.cloneNode(true));
  });

  // Event listener for arrow button clicks
  arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      const scrollDistance = btn.id === "left" ? -firstCardWidth : firstCardWidth;
      let targetScrollLeft = carousel.scrollLeft + scrollDistance;
  
      if (targetScrollLeft < 0) {
        targetScrollLeft = 0;
      } else if (targetScrollLeft > (carousel.scrollWidth - carousel.offsetWidth)) {
        targetScrollLeft = carousel.scrollWidth - carousel.offsetWidth;
      }
  
      const scrollOptions = {
        left: targetScrollLeft,
        top: 0,
        behavior: "smooth"
      };
  
      carousel.scrollTo(scrollOptions);
    });
  });
  


  // Event handler for drag start
  const dragStart = (e) => {
    e.preventDefault();
    isDragging = true;
    carousel.classList.add("dragging");
    startX = e.touches ? e.touches[0].pageX : e.pageX;
    startScrollLeft = carousel.scrollLeft;
  };

  // Event handler for dragging
  const dragging = (e) => {
    if (!isDragging) return;
    carousel.scrollLeft = startScrollLeft - (e.touches ? e.touches[0].pageX : e.pageX - startX);
  };

  // Event handler for drag stop
  const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
  };

  // Autoplay function
  const autoPlay = () => {
    if (window.innerWidth < 800) return;
    clearTimeout(timeoutId);
    timeoutId = setTimeout(() => (carousel.scrollLeft += firstCardWidth), 1500);
  };
  autoPlay();

  // Function for infinite scrolling
  const infiniteScroll = () => {
    if (carousel.scrollLeft === 0) {
      carousel.classList.add("no-transition");
      carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
      carousel.classList.remove("no-transition");
    } else if (Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
      carousel.classList.add("no-transition");
      carousel.scrollLeft = carousel.offsetWidth;
      carousel.classList.remove("no-transition");
    }
    clearTimeout(timeoutId);
    if (!wrapper.matches(":hover")) autoPlay();
  };

  // Event listeners
  carousel.addEventListener("mousedown", dragStart);
  carousel.addEventListener("touchstart", dragStart);
  carousel.addEventListener("mousemove", dragging);
  carousel.addEventListener("touchmove", dragging);
  document.addEventListener("mouseup", dragStop);
  document.addEventListener("touchend", dragStop);
  carousel.addEventListener("scroll", infiniteScroll);
  wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
  wrapper.addEventListener("mouseleave", autoPlay);
});

/*=============== SWIPER CATEGORIES ===============*/
var swiperCatagories = new Swiper('.catagories__container', { 
  spaceBetween: 24,
    loop:true,    
  navigation: { 
  prevEl: ".swiper-button-prev",
  nextEl: ".swiper-button-next",
  },
  breakpoints: {
    350: {
      slidesPerView: 2,
      spaceBetween: 24,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 24,
    },
    992: {
      slidesPerView: 4,
      spaceBetween: 24,
    },
    1200: {
      slidesPerView: 5,
      spaceBetween: 24,
    },
    1400: {
      slidesPerView: 6,
      spaceBetween: 24,
    },
  },
  autoplay: {
    delay: 1300,  
    disableOnInteraction: false,  
  },
});
/*=============== SWIPER PRODUCTS ===============*/
var swiperProducts = new Swiper('.new__container', { 
  spaceBetween: 24,
  loop:true,
  
navigation: {
 
  prevEl: ".swiper-button-prev",
  nextEl: ".swiper-button-next",
},
breakpoints: {
  768: {
    slidesPerView: 2,
    spaceBetween: 24,
  },
  992: {
    slidesPerView: 3,
    spaceBetween: 24,
  },
  1400: {
    slidesPerView: 4,
    spaceBetween: 24,
  },
},
autoplay: {
  delay: 1300,  
  disableOnInteraction: false,  
},
});
/*=============== PRODUCTS TABS ===============*/
const tabs = document.querySelectorAll('[data-target]'),
tabContents = document.querySelectorAll('[content]');

tabs.forEach((tab) => {
  tab.addEventListener('click' , () => {
    const target = document.querySelector(tab.dataset.target);
    tabContents.forEach((tabContent) => {
      tabContent.classList.remove('active-tab');
    });
    target.classList.add('active-tab');
    tabs.forEach((tab) => {
      tab.classList.remove('active-tab');
    });
    tab.classList.add('active-tab');
  });
});


const quickViewBtns = document.querySelectorAll('.quick-view-btn');
const modal = document.getElementById('quick-view-modal');
const modalImg = modal.querySelector('.modal-img');
const closeModalBtn = modal.querySelector('.close');

quickViewBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    event.preventDefault(); 
    const imageSrc = btn.closest('.product-banner').querySelector('.product-img').getAttribute('src');
    modalImg.src = imageSrc;
    modal.classList.remove('hidden'); // Show the modal
  });
});

closeModalBtn.addEventListener('click', () => {
  closeModal();
});

modal.addEventListener('click', (event) => {
  if (event.target === modal || event.target.classList.contains('close')) {
    closeModal();
  }
});

window.addEventListener('keydown', (event) => {
  if (event.key === 'Escape') {
    closeModal();
  }
});

function closeModal() {
  modal.classList.add('hidden'); // Hide the modal
}
