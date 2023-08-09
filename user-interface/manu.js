// Function to fetch and display the manufacturer profiles
function fetchManufacturerProfiles() {
  $.ajax({
    url: 'get_manufacturer_profile.php',
    type: 'GET',
    dataType: 'json',
    success: function(data) {
      if (data && data.length > 0) {
        // Remove any existing profile cards
        $('#manufacturerProfiles').empty();

        // Loop through the data and create new cards
        data.forEach(function(p) {
          // Create a new card for the current manufacturer
          var cardHtml = `
    <div class="suplliers">
      <div class="card">
        <div class="card-header">
          <div class="card-cover"></div>
          <img src="../Dashboard/includes/profiles/${p.profile_image_path}" alt="Manufacturer Profile">  
          <h1>${p.name}</h1>
        </div>
        <div class="card-main">
          <div class="card-section active " id="Description">
            <div class="card-content">
              <h4 class="card-title">Description</h4>
              <p class="card-desc">${p.description}</p>
            </div>
            <div class="social-links">
              <!-- Add social media links dynamically based on data -->
              ${p.fb ? '<a href="${p.fb}"><i class="fab fa-facebook-f"></i></a>' : ''}
              ${p.twitter ? '<a href="${p.twitter}"><i class="fab fa-twitter"></i></a>' : ''}
              ${p.insta ? '<a href="${p.insta}"><i class="fab fa-instagram"></i></a>' : ''}
              ${p.linkdin ? '<a href="${p.linkdin}"><i class="fab fa-linkedin-in"></i></a>' : ''}
            </div>
          </div>
          <div class="card-section" id="About">
            <div class="card-content">
              <h4 class="card-title">About</h4>
              <div class="card-work">
                <div class="card-item">
                  <div class="card-item-title">
                    Supply:
                  </div>
                  <div class="card-item-desc">${p.supply}</div>
                </div>
                <div class="card-item">
                  <div class="card-item-title">
                    From:
                  </div>
                  <div class="card-item-desc">${p.from_country}</div>
                </div>
                <div class="card-item">
                  <div class="card-item-title">
                    Language:
                  </div>
                  <div class="card-item-desc">${p.languages}</div>
                </div>
                <div class="card-item">
                  <div class="card-item-title">
                    Member Since:
                  </div>
                  <div class="card-item-desc">${p.created_at}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-section" id="Contact">
            <div class="card-content">
              <h4 class="card-title">Contact</h4>
            </div>
            <div class="card-contact-wrapper">
              <div class="card-contact">
                <i class="fas fa-map-marker-alt"></i>
                ${p.address}
              </div>
              <div class="card-contact">
                <i class="fas fa-comment"></i>
                Inbox me on website
              </div>
              <div class="card-contact">
                <i class="fas fa-envelope"></i>
                ${p.email}
              </div>
            
              <button class="contact-me" data-manufacturer-id="${p.id}">Contact Me</button>
              </button>
            </div>
          </div>
        </div>
        <div class="card-buttons">
          <button data-section="Description" class="active">Description</button>
          <button data-section="About">About</button>
          <button data-section="Contact">Contact</button>
        </div>
      </div>
    </div>
  `;

           // Append the card to the container
           $('#manufacturerProfiles').append(cardHtml);
          });
          
          // Call the function to initialize card functionality
          initializeCardFunctionality();
        }
      },
      error: function(xhr, status, error) {
        console.error('Error fetching manufacturer profiles:', error);
      }
    });
  }
  
     // Function to initialize card functionality
     function initializeCardFunctionality() {
      const cards = document.querySelectorAll('.card');

      cards.forEach(function (card) {
          const btns = card.querySelectorAll('.card-buttons button');
          const sections = card.querySelectorAll('.card-section');

          card.addEventListener("click", function(event) {
              const clickedElement = event.target;
              const section = clickedElement.dataset.section;

              if (section) {
                  // Remove active class from all buttons within the card
                  btns.forEach(function(btn) {
                      btn.classList.remove("active");
                  });

                  // Remove active class from all sections within the card
                  sections.forEach(function(section) {
                      section.classList.remove("active");
                  });

                  // Add active class to the clicked button
                  clickedElement.classList.add("active");

                  // Add active class to the corresponding section within the card
                  const targetSection = card.querySelector('#' + section);
                  targetSection.classList.add("active");
              }
          });

          // Handle the "Contact Me" button click
          const contactBtn = card.querySelector('.contact-me');
          contactBtn.addEventListener('click', function (event) {
              event.preventDefault();
              const manufacturerId = contactBtn.dataset.manufacturerId;

              // Call the function to initiate a chat with the selected manufacturer
              initiateChat(manufacturerId);
          });
      });
  }

// Function to initiate a chat with the selected manufacturer
function initiateChat(manufacturerId) {
  // Make an AJAX request to create a new chat room with the selected manufacturer
  $.ajax({
    url: 'create_chat_room.php', // Replace with the correct URL for the PHP script
    type: 'POST',
    dataType: 'json',
    data: {
      send_message: 1, // Add the 'send_message' parameter
      manufacturerId: manufacturerId
    },
    success: function (response) {
      if (response.success) {
        // Redirect to the chat view for the manufacturer
        window.location.href = '..\Dashboard/chat_view2.php';
      } else {
        console.error('Error creating chat room:', response.message);
      }
    },
    error: function (xhr, status, error) {
      console.error('Error creating chat room:', error);
    }
  });
}

  // Call the function to fetch and display the manufacturer profiles on page load
  $(document).ready(function() {
    fetchManufacturerProfiles();
  });