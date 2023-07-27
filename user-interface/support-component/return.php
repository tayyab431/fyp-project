<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clothing barters</title>
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
      Order Return
    <span>Please fill out detail</span>
    </header>
    <div class="in-container">
      <h2>Customer Information</h2>
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
      <h2>Order Information</h2>
      <div class="row">
       <input type="text" name="orderid">
       <label for="orderid">Order ID</label>
      </div>
      <div class="row">
        <input type="text" name="addlineone">
        <label for="lineone">Delivery destination</label>
      </div>
     
      <div class="row">
        <div class="col2">
          <input type="text" name="city">
          <label for="city">City</label>
        </div>
        <div class="col2">
          <input type="text" name="state">
          <label for="state">State/Region/Province</label>
        </div>
      </div>
      <div class="row">
        <div class="col2">
          <input type="text" name="zipcode">
          <label for="zipcode">Postal/Zip Code</label>
        </div>
        <div class="col2">
          <input type="text" name="country">
          <label for="country">Country</label>
        </div>
      </div>
      <div class="row">
          <input type="date" name="date">
          <label for="date">When did you place your order?</label>
      </div>
      <h2>product Information</h2>
      <div class="row">
       <input type="text" name="orderid">
       <label for="orderid">reference code</label>
      </div>
      <div class="row">
        <input type="text" name="addlineone">
        <label for="lineone">Product quantity</label>
      </div>
      <div class="row">
      <textarea class="textarea" id="myTextarea" rows="10" cols="72"></textarea>
      <label for="lineone">Product detail / Description</label>
      </div>
     <div class="col2">
     
     <label for="reason">Check the reasons for return:</label>
        <label> Defective Product </label><input type="checkbox" name="reason" value="Defective Product"> 
        
        <label>
            Wrong Item Shipped
        </label> <input type="checkbox" name="reason" value="Wrong Item Shipped">
        <label>
             Item No Longer Needed
        </label><input type="checkbox" name="reason" value="Item No Longer Needed">
        <label>
             Changed Mind
 </label><input type="checkbox" name="reason" value="Changed Mind">
        <label>Other :</label>
            <input type="checkbox" name="reason" value="Other"> 
           
     </div>
     
      <div class="row">
        <input type="submit" name="submit" value="Submit">
      </div>
      <div class="row top">
     <a href="..\suppor-page.php"><button type="button">back</button></a>
      </div>
  </div>
</body>
</html>