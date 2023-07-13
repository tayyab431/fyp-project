<?php
include('nav.php');
?>
<section class="home1" id="home">
    <div class="content">
    <h3><?php echo $home_start[$language]['0']?></h3>
    <p><?php echo $home_start[$language]['15']?>
    </p>
    <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
    </div>
</section>
<section class="about" id="About">
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
    <section class="portfolio-b">
      <div class="port-button d-flex">
          <ul id="changerr" class="list-style button-ul" onclick="clickbutton()">
              <li><a href="#" id="changer1" class="toggle-btn active" onclick="toggleSection('sec-portfolio1'); return false;"><?php echo $access_ries[$language]['1']?></a> </li>
              <li><a href="#" id="changer2"  class="toggle-btn" onclick="toggleSection('sec-portfolio2') ; return false;"><?php echo $access_ries[$language]['6']?></a></li>    
              <li><a href="#" id="changer3" class="toggle-btn" onclick="toggleSection('sec-portfolio3'); return false;"><?php echo $access_ries[$language]['8']?></a></li>
              <li><a href="#" id="changer4"  class="toggle-btn" onclick="toggleSection('sec-portfolio4'); return false;"><?php echo $access_ries[$language]['22']?></a></li>
          </ul>
      </div>
  </div>
  </section>
  <!--web development start-->
  <section id="sec-portfolio1" class="sec-porfo">
  <section class="project-portfolio">
      <div class="container">
          <div class="project-head d-flex padd-w">
              <div class="head-button head-w">
                  <div>
                  <h2>
                  <?php echo $access_ries[$language]['23']?>
                  </h2>
                  <button type="button">
                  <?php echo $access_ries[$language]['24']?>
                  </button>
                  </div>
              </div>
              <div class="img-side  img-w">
                  <!-- <img src="..\images/h.jpg" alt=""> -->
              </div>
          </div>
      </div>
  </section>
  <section class="grid-scroll">
      <div class="container">
          <div class="scroll-main">
              <div class="scroll-head">
                  <div class="scroll-images left-right">
                      <img src="..\images/hoodies-4.jpg" alt="tickfawtravel">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                      <div class="link-g">                
                             <a href="#"> <h6> <?php echo $access_ries[$language]['25']?>
                             <br> <i class="fa fa-link"></i> </h6></a>
                      </div>
                  </div>
                  <div class="scroll-images left-right">
                      <img src="..\images/hoodie-1.webp" alt="stilrenaklockor">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                      <div class="link-g">
                          <a href="#"> <h6>  <?php echo $access_ries[$language]['26']?>
                              <br> <i class="fa fa-link"></i> </h6></a>
                   </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/hoodies-5.jpg" alt="lpgstage">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                      <div class="link-g">
                          <a href="#"> <h6> <?php echo $access_ries[$language]['26']?>
                              <br> <i class="fa fa-link"></i> </h6></a>
                   </div>
                  </div>
                  <div class="scroll-images left-right">
                      <img src="..\images/hoodies-6.webp" alt="salesandtechnology">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                      <div class="link-g">
                          <a href="#"> <h6> <?php echo $access_ries[$language]['26']?>
                              <br> <i class="fa fa-link"></i> </h6></a>
                   </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/hoodies-7.jpg" alt="1f71ff8c">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                      <div class="link-g">
                          <a href="#"> <h6> <?php echo $access_ries[$language]['26']?>
                              <br> <i class="fa fa-link"></i> </h6></a>
                   </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/hoodies-8.jpg" alt="jlgtampabay">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                      <div class="link-g">
                          <a href="#"> <h6> <?php echo $access_ries[$language]['26']?>
                              <br> <i class="fa fa-link"></i> </h6></a>
                   </div>
                  </div>
                  <div class="scroll-images ">
                      <img src="..\images/hoodies-13.jpg" alt="screenshot-hreventures">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                      <div class="link-g">  
                          <a href="#"> <h6> <?php echo $access_ries[$language]['26']?>
                              <br> <i class="fa fa-link"></i> </h6></a>
                   </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/hoodies-10.jpg" alt="haelaw">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                      <div class="link-g">
                          <a href="#"> <h6> <?php echo $access_ries[$language]['26']?>
                              <br> <i class="fa fa-link"></i> </h6></a>
                   </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/hoodies-14.jpg" alt="getvested">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                      <div class="link-g">
                          <a href="#"> <h6> <?php echo $access_ries[$language]['26']?>
                              <br> <i class="fa fa-link"></i> </h6></a>
                   </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/hoodies-13.jpg" alt="getvested">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                      <div class="link-g">
                          <a href="#"> <h6> <?php echo $access_ries[$language]['26']?>
                              <br> <i class="fa fa-link"></i> </h6></a>
                   </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  </section>
  <!--web development  end-->
  <!--mobile development start end-->
  <section id="sec-portfolio2" class="sec-porfo">
  <section class="project-portfolio">
      <div class="container">
          <div class="project-head d-flex padd-m ">
              <div class="head-button head-m">
                  <div>
                  <h2>
                      <?php echo $access_ries[$language]['27']?>
                  </h2>
                  <button type="button">
                  <?php echo $access_ries[$language]['24']?>
                  </button>
                  </div>
              </div>
              <div class="..\img-side img-side-m">
                  <img src="images/3.jpg" alt="">
              </div>
          </div>
      </div>
  </section>
  <section class="grid-scrolll">
      <div class="container">
          <div class="scroll-main">
              <div class="scroll-head-mobile">
                  <div class="scroll-images ">
                      <img src="..\images/24hrclaims-1.png" alt="tickfawtravel">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                      </div> 
              </div>
          </div>
      </div>
  </section>
  </section>
  <!--mobile development end-->
  <!--ui/ux development start -->
  <section id="sec-portfolio3" class="sec-porfo">
  <section class="project-portfolio">
      <div class="container">
          <div class="project-head d-flex padd-ui">
              <div class="head-button head-ui">
                  <div>
                  <h2>
                      <?php echo $access_ries[$language]['28']?>
                  </h2>
                  <button type="button">
                  <?php echo $access_ries[$language]['24']?>
                  </button>
                  </div>
              </div>
              <div class="img-side img-uiux">
                  <img src="..\images/jacket-1-removebg-preview.png" alt="">
              </div>
          </div>
      </div>
  </section>
  <section class="grid-scroll">
      <div class="container">
          <div class="scroll-main">
              <div class="scroll-head">
                  <div class="scroll-images">
                      <img src="..\images/988443ff-8348-42a3-8cfb-756f0b407305.png" alt="tickfawtravel">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/44e6a104-0efb-4457-8dc4-ee7128b26588.jpg" alt="stilrenaklockor">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/4e087d9e-f92d-4595-9dbe-ad84811b33fb.jpg" alt="lpgstage">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images left-right">
                      <img src="..\images/f5f5b4aa-5bbc-4528-8107-bf62c174eced.jpg" alt="salesandtechnology">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/d214233e-9a9c-476a-b550-8d5818f8e05c.jpg" alt="1f71ff8c">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/4e245df7-4106-4178-9e5b-b98724e28d30.jpg" alt="jlgtampabay">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/164f9ef1-79e7-4a74-833d-2d2bed57886c.jpg" alt="screenshot-hreventures">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images left-right">
                      <img src="..\images/26423402-7c33-48ba-9bf1-ea9357e5e941.jpg" alt="haelaw">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/19775ec0-1e7d-4c8d-95c9-c03fc313b87c.jpg" alt="getvested">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/1af2e4c1-97fa-4d33-a4dc-f40a0395f29b-1.jpg" alt="getvested">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  </section>
  <!--ui/ux  development end-->
  <!--graphic design   development start-->
  <section id="sec-portfolio4" class="sec-porfo">
  <section class="project-portfolio">
      <div class="container">
          <div class="project-head d-flex padd-g">
              <div class="head-button head-g">
                  <div>
                  <h2>
                    <?php echo $access_ries[$language]['29']?>
                  </h2>
                  <button type="button">
                  <?php echo $access_ries[$language]['24']?>
                  </button>
                  </div>
              </div>
              <div class="img-side img-graphic">
                  <img src="..\images/clothes-2-removebg-preview.png" alt="">
              </div>
          </div>
      </div>
  </section>
  <section class="grid-scroll">
      <div class="container">
          <div class="scroll-main">
              <div class="scroll-head">
                  <div class="scroll-images">
                      <img src="..\images/54864dbc-cc69-4066-9579-194b886f3153.jpg" alt="tickfawtravel">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/c3abf938-829c-4c1c-9d4f-d4d5b37001e4.jpg" alt="stilrenaklockor">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images left-right">
                      <img src="..\images/e31f6195-be28-46d4-8698-d714be3eaa6c.jpg" alt="lpgstage">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images left-right">
                      <img src="..\images/b3fd5e9a-4efd-4337-9fca-42ad021bde40.jpg" alt="salesandtechnology">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images left-right">
                      <img src="..\images/d6ed886c-c777-43d7-a672-6119d30b98bc.jpg" alt="1f71ff8c">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images">
                      <img src="..\images/4d6c2df7-3c52-4302-9a47-6573b4bdb8a0.jpg" alt="jlgtampabay">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images left-right">
                      <img src="..\images/506255ea-87b9-4bea-a0db-ee742ae82925.jpg" alt="screenshot-hreventures">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
                  <div class="scroll-images left-right">
                      <img src="..\images/059009dc-2266-4aab-a061-367e65b23cc3.jpg" alt="haelaw">
                      <div class="lable-grid d-flex">
                          <span>n</span>
                          <span>e</span>
                          <span>w</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  </section>
  <!--graphic design  development end-->
  <?php
include('footer.php');
?>
</body>
</html>