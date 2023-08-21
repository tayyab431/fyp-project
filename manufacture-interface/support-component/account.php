<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clothing Barters - Account Support</title>
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
    Account Support
      <span>Contact us for account-related issues.</span>
    </header>
    <div class="in-container">
      <!-- Account Support Form -->
      <h2>Account Support Form</h2>
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
        <input type="text" name="username">
        <label for="username">Username</label>
      </div>
      <div class="row">
        <input type="text" name="accountid">
        <label for="accountid">Account ID</label>
      </div>
      <div class="row">
      <textarea class="textarea" id="myTextarea" rows="10" cols="72"></textarea>
      <label for="lineone">Describe your account-related issue</label>
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
