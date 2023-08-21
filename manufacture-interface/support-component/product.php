<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clothing Barters - Product Support</title>
  <link rel="icon" href="..\..\images/WHITE-COLOR-LOGO.png" type="image/x-icon">
  <link rel="stylesheet" href="text.css">
</head>
<body>
  <div class="container">
    <header>
    <a href="..\suppor-page.php" class="back-icon">
        <!-- Replace the URL below with your desired back icon SVG -->
        <img src="icons8-back-50 (1).png" alt="back icon" >
        
      </a>
      Product Support
      <span>Contact us for product-related issues.</span>
    </header>
    <div class="in-container">
      <!-- Product Support Form -->
      <h2>Product Support Form</h2>
      <div class="row">
        <div class="col2">
          <input type="text" name="firstname">
          <label for="firstname">First Name</label>
        </div>
        <div class="col2">
          <input type="text" name="lastname">
          <label for="lastname">Last Name</label>
        </div>
      </div>
      <div class="row">
        <input type="email" name="email">
        <label for="email">Email</label>
      </div>
      <div class="row">
        <input type="tel" name="contactnum">
        <label for="contactnum">Contact number</label>
      </div>
      <div class="row">
        <input type="text" name="productname">
        <label for="productname">Product Name</label>
      </div>
      <div class="row">
        <input type="text" name="productid">
        <label for="productid">Product ID</label>
      </div>
       <div class="row">
      <textarea class="textarea" id="myTextarea" rows="10" cols="72"></textarea>
      <label for="lineone">Describe your product-related issue</label>
      </div>
      <div class="row">
        <input type="submit" name="submit" value="Submit">
      </div>
      <div class="row top">
        <a href="..\suppor-page.php"><button type="button">Back</button></a>
      </div>
    </div>
  </div>
</body>
</html>
