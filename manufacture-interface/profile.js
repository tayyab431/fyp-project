document.getElementById('add-profile-btn').addEventListener('click', function() {
    // Create a new section element
    var newSection = document.createElement('section');
    newSection.classList.add('dynamic-section');
  
    // Set the HTML content for the new section
    newSection.innerHTML = `
      <div class="suplliers">
        <div class="card">
          <div class="card-header">
            <div class="card-cover"></div>
            <img src="..\images/11.jpg">
            <h1>Wahaj Ali</h1>
          </div>
          <div class="card-main">
            <div class="card-section active" id="Description">
              <div class="card-content">
                <h4 class="card-title">Description</h4>
                <p class="card-desc">Hi! I'm Wahaj Ali, T-Shirts Manufacturer. I have experience in print on demand on Etsy. If you have any questions, feel free to contact me.</p>
              </div>
              <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
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
                    <div class="card-item-desc">T-Shirts</div>
                  </div>
                  <div class="card-item">
                    <div class="card-item-title">
                      From:
                    </div>
                    <div class="card-item-desc">Pakistan</div>
                  </div>
                  <div class="card-item">
                    <div class="card-item-title">
                      Language:
                    </div>
                    <div class="card-item-desc">English, Urdu</div>
                  </div>
                  <div class="card-item">
                    <div class="card-item-title">
                      Member Since:
                    </div>
                    <div class="card-item-desc">April 2022</div>
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
                  Askari VIII Askari 8 (Army Housing Scheme Defence), Lahore, Punjab
                </div>
                <div class="card-contact">
                  <i class="fas fa-comment"></i>
                  Inbox me on website
                </div>
                <div class="card-contact">
                  <i class="fas fa-envelope"></i>
                  WahajAli23@gmail.com
                </div>
                <button class="contact-me"> <a href="msj.html">Contact Me</a></button>
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
  
    // Get the container element where the section will be appended
    var container = document.getElementById('profile');
  
    // Append the new section to the container
    container.appendChild(newSection);
  });
  