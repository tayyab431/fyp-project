
<?php
include('nav.php');
?>
<!--home start-->
<section class="home" id="home">
    <div class="content">
    <h3><?php echo $home_start[$language]['0']?></h3>
    <p><?php echo $home_start[$language]['1']?>
    </p>
    <a href="#" class="btn"><?php echo $home_start[$language]['2']?></a>
    </div>
    <!-- chatbot code start -->

    <div class="container-a">
      <div class="chatbox">
          <div class="chatbox__support">
              <div class="chatbox__header">
                  <div class="chatbox__image--header">
                      <img src="..\icons8-chatbot-40.png" alt="image">
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
              <button><img src="..\icons8-chatbot-40.png" alt="pic"></button>
          </div>
      </div>
  </div>

    <!-- chatbot code end here -->
</section>
<section class="about">
  <h1 class="heading"><?php echo $home_start[$language]['6']?></h1>
  <div class="row">
      <div class="content">
              <h1> <?php echo $home_start[$language]['7']?></h1>
            <div class="feature-dsc">
              <div class="f-icon">
             <i class="fa fa-check-square-o"></i>
              </div>
              <div class="f-text">
                <p><?php echo $home_start[$language]['8']?></p>
            </div>
            </div>
            <h1> <?php echo $home_start[$language]['9']?></h1>
            <div class="feature-dsc">
              <div class="f-icon">
             <i class="fa fa-check-square-o"></i>
              </div>
              <div class="f-text">
                <p> <?php echo $home_start[$language]['10']?></p>
            </div>
            </div>
            <h1><?php echo $home_start[$language]['11']?></h1>
            <div class="feature-dsc">
              <div class="f-icon">
             <i class="fa fa-check-square-o"></i>
              </div>
              <div class="f-text">
                <p><?php echo $home_start[$language]['12']?></p>
            </div>
            </div>
            <h1> <?php echo $home_start[$language]['13']?></h1>
            <div class="feature-dsc">
              <div class="f-icon">
             <i class="fa fa-check-square-o"></i>
              </div>
              <div class="f-text">
                <p><?php echo $home_start[$language]['14']?> </p>
            </div>
            </div>
      </div>
      <div class="image">
          <img src="..\images/73243.jpg">
      </div>   
  </div>
  </section>
<!--accessories start-->
<section class="accessories" id="#accessories">
    <h1 class="heading"><?php echo $access_ries[$language]['0']?></h1>
    <div class="box-container" data-aos="zoom-in">
        <div class="box">
            <img src="..\images/a1.jpg">
            <h3><?php echo $access_ries[$language]['1']?></h3>
            <p><?php echo $access_ries[$language]['2']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
        <div class="box">
            <img src="..\images/a5.webp">
            <h3><?php echo $access_ries[$language]['4']?></h3>
            <p><?php echo $access_ries[$language]['5']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
        <div class="box">
            <img src="..\images/a3.jpg">
            <h3><?php echo $access_ries[$language]['6']?></h3>
            <p><?php echo $access_ries[$language]['7']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
        <div class="box">
            <img src="..\images/a4.jpg">
            <h3><?php echo $access_ries[$language]['8']?></h3>
            <p><?php echo $access_ries[$language]['9']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
        </div>
        <h1 class="heading"></h1>
        <div class="box-container" data-aos="fade-up"> 
        <div class="box">
            <img src="..\images/track-men.jpg">
            <h3><?php echo $access_ries[$language]['10']?></h3>
            <p><?php echo $access_ries[$language]['11']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
        <div class="box">
            <img src="..\images/a6.webp">
            <h3><?php echo $access_ries[$language]['12']?></h3>
            <p><?php echo $access_ries[$language]['13']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
        <div class="box">
            <img src="..\images/photo-1609797623185-9a0d472c827f.jpg">
            <h3><?php echo $access_ries[$language]['14']?></h3>
            <p><?php echo $access_ries[$language]['15']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
        <div class="box">
            <img src="..\images/gym.jpg">
            <h3><?php echo $access_ries[$language]['16']?></h3>
            <p><?php echo $access_ries[$language]['17']?></p>
            <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
        </div>
    </div>
</section>
 <!--about start-->
 <section class="about" id="About" data-aos="zoom-in">
  <h1 class="heading"><?php echo $access_ries[$language]['18']?></h1>
  <div class="row">
      <div class="image">
          <img src="..\images/2.jpg">
      </div>
      <div class="content">
          <h3><?php echo $access_ries[$language]['19']?></h3>
          <p><?php echo $access_ries[$language]['20']?></p>
         <a href="#" class="btn"><?php echo $access_ries[$language]['21']?></a>
              </div>
  </div>
  </section>
  <!--slider start-->
  <section>
<div class="container">
  <div class="slide-container active">
      <div class="slide">
          <div class="content">
              <h3> </h3>
              <p> </p>   
          </div>
          <video src="..\images/s4.mp4" muted autoplay loop></video>
      </div>
  </div>
  <div class="slide-container">
      <div class="slide">
          <div class="content">
              <h3> </h3>
              <p> </p>
          </div>
          <video src="..\images/s2.mp4" muted autoplay loop></video>
      </div>
  </div>
  <div class="slide-container">
      <div class="slide">
          <div class="content">
              <h3> </h3>
              <p> </p>
          </div>
          <video src="..\images/s3.mp4" muted autoplay loop></video>
      </div>
  </div>
  <div class="slide-container">
      <div class="slide">
          <div class="content">
              <h3> </h3>
              <p></p>
          </div>
          <video src="..\images/s1.mp4" muted autoplay loop></video>
      </div>
  </div>
  <div class="slide-container">
      <div class="slide">
          <div class="content">
              <h3> </h3>
              <p> </p>
          </div>
          <video src="..\images/s5.mp4" muted autoplay loop></video>
      </div>
  </div>
  <div class="slide-container">
      <div class="slide">
          <div class="content">
              <h3> </h3>
              <p> </p>
          </div>
          <video src="..\images/s6.mp4" muted autoplay loop></video>
      </div>
  </div>
  <div id="next" onclick="next()"> > </div>
  <div id="prev" onclick="prev()"> <
   </div>
</div>
</section>
<!--video-slider js-->
<script>
  let slides = document.querySelectorAll('.slide-container');
  let index = 0;
  function next()
  {
      slides[index].classList.remove('active');
      index = (index + 1) % slides.length;
      slides[index].classList.add('active');
  }
  function prev()
  {
      slides[index].classList.remove('active');
      index = (index - 1 + slides.length) % slides.length;
      slides[index].classList.add('active');
  }
</script>
<!--reviews start-->
<section class="review" id="#review"> 
    <h1 class="heading"><?php echo $review[$language]['0']?></h1>
    <div class="box-container">
        <div class="box">
          <img src="..\housewife-browsing.jpg" class="user">
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
          <img src="..\housewife-browsing.jpg" class="user">
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
            <img src="..\housewife-browsing.jpg" class="user">
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



