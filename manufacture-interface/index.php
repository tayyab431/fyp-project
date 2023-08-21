<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the necessary files and check for user login
include('nav.php');

?>


 <section id="profile">
  <div id="manufacturerProfiles">
    <!-- Manufacturer profile cards will be appended here -->
   

</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="..\manu.js"></script>
<script>
  $(document).ready(function() {
    fetchManufacturerProfiles();
    initializeCardFunctionality();
  });
</script>



<?php
include('footer.php');
?>
