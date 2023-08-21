<?php include('nav.php'); ?>

<!-- main content -->
<div class="container mt-4">
  <div class="row d-flex justify-content-center">
    <div class="col-md-9">
      <div class="card-a p-4 mt-3">
        <h3 class="heading mt-5 text-center"><?php echo $review[$language]['7']?></h3>
        <div class="d-flex justify-content-center px-5">
          <div class="search">
            <input type="text" id="searchInput" class="search-input" placeholder="<?php echo $review[$language]['8']?>" name="">
            <a href="#" class="search-icon">
              <i class="fa fa-search"></i>
            </a>
          </div>
        </div>
        <div class="row mt-4 g-1 px-4 mb-5" id="supportOptions"> <!-- Removed duplicate ID -->
        <a href="support-component/account.php">
          <div class="col-md-2">
            <div class="card-inner p-3 d-flex flex-column align-items-center">
              <img src="sup-icon/icons8-account-60.png" width="50">
              <div class="text-center mg-text">
                <span class="mg-text"><?php echo $review[$language]['9']?></span>
              </div>
            </div>
          </div>
           </a>
          <a href="support-component/payment.php">
          <div class="col-md-2">
            <div class="card-inner p-3 d-flex flex-column align-items-center">
              <img src="sup-icon/icons8-payment-60.png" width="50">
              <div class="text-center mg-text">
                <span class="mg-text"><?php echo $review[$language]['10']?></span>
              </div>
            </div>
          </div>
          </a>
          <a href="support-component/dilivery-info.php">
            <div class="col-md-2">
              <div class="card-inner p-3 d-flex flex-column align-items-center">
                <img src="sup-icon/icons8-vehicle-60.png" width="50">
                <div class="text-center mg-text">
                  <span class="mg-text"><?php echo $review[$language]['11']?></span>
                </div>
              </div>
            </div>
          </a>
          <a href="support-component/product.php">
          <div class="col-md-2">
            <div class="card-inner p-3 d-flex flex-column align-items-center">
                <img src="sup-icon/icons8-product-64.png" width="50">
                <div class="text-center mg-text">
                  <span class="mg-text"><?php echo $review[$language]['12']?></span>
                </div>
              </div>
           </div>
           </a>
          <div class="col-md-2">
            <div class="card-inner p-3 d-flex flex-column align-items-center">
            <a href="support-component/return.php">
              <img src="sup-icon/icons8-clock-60.png" width="50">
              <div class="text-center mg-text">
                <span class="mg-text"><?php echo $review[$language]['13']?></span>
              </div>
            </div>
            </a>
          </div>
          <a href="..\contact-page/con.html">
            <div class="col-md-2">
              <div class="card-inner p-3 d-flex flex-column align-items-center">
                <img src="sup-icon/icons8-clipboard-60.png" width="50">
                <div class="text-center mg-text">
                  <span class="mg-text"><?php echo $review[$language]['14']; ?></span>
                </div>
              </div>
            </div>
          </a>
          <!-- Add more support divs as needed... -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Include necessary CSS styles -->
<style>
  #supportOptions > div {
    display: block; /* To show support options as blocks */
    margin: 5px 0;
  }
</style>

<!-- Include this script tag after the HTML -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const supportOptions = document.getElementById("supportOptions").children;

    searchInput.addEventListener("input", function () {
      const query = searchInput.value.trim().toLowerCase();

      // Loop through each support option and show/hide based on the search query
      for (const option of supportOptions) {
        const optionText = option.textContent.toLowerCase();
        if (optionText.includes(query)) {
          option.style.display = "block";
        } else {
          option.style.display = "none";
        }
      }
    });
  });
</script>

<?php include('footer.php'); ?>
