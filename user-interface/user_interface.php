<?php
include('nav.php');
?>
<!--home start-->
<section class="user-home" id="home">
    <div class="content" data-aos="fade-up" data-aos-delay="100">
  <h3>Welcome To CLothing Barters</h3>
    <div class="search-container">
            <input type="text" placeholder="what are you looking for">
            <button type="submit">Search</button>
        </div>
    </div>
    <!-- chatbot code start -->

    <div class="container-a">
      <div class="chatbox">
          <div class="chatbox__support">
              <div class="chatbox__header">
                  <div class="chatbox__image--header">
                      <img src="../icons8-chatbot-40.png" alt="image">
                  </div>
                  <div class="chatbox__content--header">
                      <h4 class="chatbox__heading--header"><?php echo $home_start[$language]['3']?></h4>
                      <p class="chatbox__description--header"><?php echo $home_start[$language]['4']?></p>
                  </div>
              </div>
              <div class="chatbox__messages">
                  <div></div>
              </div>
              <div class="chatbox__footer">
                  <input type="text" placeholder="<?php echo $top_nav[$language]['11']?>">
                  <button class="chatbox__send--footer send__button"><?php echo $home_start[$language]['5']?></button>
              </div>
          </div>
          <div class="chatbox__button">
              <button><img src="../icons8-chatbot-40.png" alt="pic"></button>
          </div>
      </div>
  </div>

    <!-- chatbot code end here -->
</section>
<div class="container-service">
     <h1 class="heading"><span>Our</span>Services</h1>
      <div class="row">
        <div class="service">
          <i class="fas fa-laptop-code"></i>
          <h2>Chat-bot for instant response
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta temporibus, hic consequuntur nesciunt tenetur, harum, veniam velit maxime nihil sit ducimus</p>
        </div>
        <div class="service">
          <i class="fas fa-mobile-alt"></i>
          <h2>Count on 24/7 support
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta temporibus, hic consequuntur nesciunt tenetur, harum, veniam velit maxime nihil sit ducimus</p>
        </div>
        <div class="service">
          <i class="fas fa-chart-pie"></i>
          <h2>Get quality work done quickly
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta temporibus, hic consequuntur nesciunt tenetur, harum, veniam velit maxime nihil sit ducimus</p>
        </div>
        <div class="service">
        <i class="fa fa-check-square-o"></i>
          <h2>Protected Payments, Every Time
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta temporibus, hic consequuntur nesciunt tenetur, harum, veniam velit maxime nihil sit ducimus</p>
        </div>
        <div class="service">
          <i class="fas fa-id-badge"></i>
          <h2>The Best For Every Budget
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta temporibus, hic consequuntur nesciunt tenetur, harum, veniam velit maxime nihil sit ducimus</p>
        </div>
        <div class="service">
          <i class="fas fa-network-wired"></i>
          <h2>Quality work done quickly
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta temporibus, hic consequuntur nesciunt tenetur, harum, veniam velit maxime nihil sit ducimus</p>
        </div>
        
      </div>
     </div> 
     <section class="about">
  <h1 class="heading"><?php echo $home_start[$language]['6']?></h1>
  <div class="row">
      <div class="content">
              <h1 data-aos="zoom-in" data-aos-delay="150"> <?php echo $home_start[$language]['7']?></h1>
            <div class="feature-dsc"  data-aos="zoom-in" data-aos-delay="150">
              <div class="f-icon">
             <i class="fa fa-check-square-o"></i>
              </div>
              <div class="f-text">
                <p><?php echo $home_start[$language]['8']?></p>
            </div>
            </div>
            <h1  data-aos="zoom-in" data-aos-delay="150"> <?php echo $home_start[$language]['9']?></h1>
            <div class="feature-dsc"  data-aos="zoom-in" data-aos-delay="150">
              <div class="f-icon">
             <i class="fa fa-check-square-o"></i>
              </div>
              <div class="f-text">
                <p> <?php echo $home_start[$language]['10']?></p>
            </div>
            </div>
            <h1  data-aos="zoom-in" data-aos-delay="150"><?php echo $home_start[$language]['11']?></h1>
            <div class="feature-dsc"  data-aos="zoom-in" data-aos-delay="150">
              <div class="f-icon">
             <i class="fa fa-check-square-o"></i>
              </div>
              <div class="f-text">
                <p><?php echo $home_start[$language]['12']?></p>
            </div>
            </div>
            <h1 data-aos="zoom-in" data-aos-delay="150"> <?php echo $home_start[$language]['13']?></h1>
            <div class="feature-dsc"  data-aos="zoom-in" data-aos-delay="150">
              <div class="f-icon">
             <i class="fa fa-check-square-o"></i>
              </div>
              <div class="f-text">
                <p><?php echo $home_start[$language]['14']?> </p>
            </div>
            </div>
      </div>
      <div class="image"data-aos="fade-right">
          <img src="../images/pexels-rachel-claire-5865196.jpg">
      </div>   
  </div>
  </section>
<!--accessories start-->
<section class="accessories" id="#accessories">
    <h1 class="heading"><?php echo $access_ries[$language]['0']?></h1>
    <div class="box-container" data-aos="zoom-in">
        <div class="box">
            <img src="../images/a1.jpg">
            <h3><?php echo $access_ries[$language]['1']?></h3>
            <p><?php echo $access_ries[$language]['2']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
        <div class="box">
            <img src="../images/a5.webp">
            <h3><?php echo $access_ries[$language]['4']?></h3>
            <p><?php echo $access_ries[$language]['5']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
        <div class="box">
            <img src="../images/a3.jpg">
            <h3><?php echo $access_ries[$language]['6']?></h3>
            <p><?php echo $access_ries[$language]['7']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
        <div class="box">
            <img src="../images/a4.jpg">
            <h3><?php echo $access_ries[$language]['8']?></h3>
            <p><?php echo $access_ries[$language]['9']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
        </div>
        <h1 class="heading"></h1>
        <div class="box-container" data-aos="fade-up"> 
        <div class="box">
            <img src="../images/track-men.jpg">
            <h3><?php echo $access_ries[$language]['10']?></h3>
            <p><?php echo $access_ries[$language]['11']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
        <div class="box">
            <img src="../images/a6.webp">
            <h3><?php echo $access_ries[$language]['12']?></h3>
            <p><?php echo $access_ries[$language]['13']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
        <div class="box">
            <img src="../images/photo-1609797623185-9a0d472c827f.jpg">
            <h3><?php echo $access_ries[$language]['14']?></h3>
            <p><?php echo $access_ries[$language]['15']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
        <div class="box">
            <img src="../images/gym.jpg">
            <h3><?php echo $access_ries[$language]['16']?></h3>
            <p><?php echo $access_ries[$language]['17']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
    </div>
</section>
  
<section class="about" id="About">
    <div class="row">
        <div class="image">
            <img src="../images/pexels-viktoria-alipatova-4169370.jpg">
            <div class="text">
              <h3>From Factory to Fashion </h3>
              <p>Unleash your style with our exclusive collection.We believe that sustainability and responsible manufacturing go hand in hand.</p>   
          </div>
        </div>
        <div class="image">
        <img src="../images/browns-voguebus-browns-mar-21-story-inline-2.webp">
        <div class="text">
              <h3>Expertly Manufactured </h3>
              <p> From the initial concept to the final stitch, our dedicated team of artisans pour their passion and skill into each garment</p>
          </div>
        </div>
        <div class="image">
            <img src="../images/feature.jpg">
            <div class="text">
              <h3>Cutting-Edge Manufacturing Techniques</h3>
              <p>Step into a world of timeless elegance and modern sophistication with Clothing Barters.</p>
          </div>
        </div>
        <div class="image">
        <img src="../images/fea.jpg">
        <div class="text">
              <h3>Unleashing Manufacturing Potential</h3>
              <p>We believe that our customers deserve nothing but the best, and that's why we meticulously inspect eve</p>
              
          </div>
        </div>
    </div>
    </section>
   <!--about start-->
   <section class="about" id="About">
  <h1 class="heading"><?php echo $access_ries[$language]['18']?></h1>
  <div class="row" data-aos="zoom-in">
      <div class="image">
          <img src="../images/135.jpg">
      </div>
      <div class="content">
          <h3><?php echo $access_ries[$language]['19']?></h3>
          <p><?php echo $access_ries[$language]['20']?></p>
         <a href="#" class="btn"><?php echo $access_ries[$language]['21']?></a>
              </div>
  </div>
  </section>
<!--reviews start-->
<section class="review" id="#review"> 
    <h1 class="heading"><?php echo $review[$language]['0']?></h1>
    <div class="box-container">
        <div class="box">
          <img src="../housewife-browsing.jpg" class="user">
          <h3><?php echo $review[$language]['1']?></h3>
          <div class="star">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
          </div>
         <p><?php echo $review[$language]['2']?></p> 
         </div>
        <div class="box">
          <img src="../housewife-browsing.jpg" class="user">
               <h3><?php echo $review[$language]['3']?></h3>
               <div class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            <p> <?php echo $review[$language]['4']?> </p>
           </div>
           <div class="box">
            <img src="../housewife-browsing.jpg" class="user">
            <h3><?php echo $review[$language]['5']?></h3>
            <div class="star">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p><?php echo $review[$language]['6']?></p> 
           </div>      
    </div>
</section>
<?php
include('footer.php');
?>


