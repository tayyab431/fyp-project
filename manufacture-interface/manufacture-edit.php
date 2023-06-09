<?php
include('include/connect.php');


?>
<?php
session_start();
if (!isset($_SESSION['categories'])) {
    $_SESSION['categories'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_category'])) {
        $_SESSION['categories'][] = '';
    }
    if (isset($_POST['remove_category'])) {
        $index = $_POST['remove_category'];
        if (isset($_SESSION['categories'][$index])) {
            unset($_SESSION['categories'][$index]);
            $_SESSION['categories'] = array_values($_SESSION['categories']);
        }
    }
    if (isset($_POST['change_category_image'])) {
        $index = $_POST['change_category_image'];
        if (isset($_FILES['category_image']) && $_FILES['category_image']['error'][$index] === UPLOAD_ERR_OK) {
            $tmpName = $_FILES['category_image']['tmp_name'][$index];
            $imageData = file_get_contents($tmpName);
            if ($imageData !== false) {
                $_SESSION['categories'][$index] = base64_encode($imageData);
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Clothing barters</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     
  <script src="profile.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">


<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <label for="profile-picture">
        <?php
        if ($profilePictureRow) {
            echo '<img id="profile-img" class="rounded-circle mt-5" width="150px" src="data:image/jpeg;base64,' . base64_encode($profilePictureRow['profile_picture']) . '">';
        } else {
            echo '<img id="profile-img" class="rounded-circle mt-5" width="150px" src="images/default-profile-picture.jpg">';
        }
        ?>
        <input type="file" id="profile-picture" name="profile_picture" style="display: none;">
    </label>

    <span class="font-weight-bold">
        <?php
        if ($name) {
            echo $name;
        } else {
            echo 'Wahaj';
        }
        ?>
        <?php
        if ($surname) {
            echo $surname;
        } else {
            echo 'Ali';
        }
        ?>
    </span>
    <span class="text-black-50">
        <?php
        if ($email) {
            echo $email;
        } else {
            echo 'WahajAli23@gmail.com';
        }
        ?>
    </span>
                <div class="social-links mt-4">
                    <a href="#" class="m-2 text-decoration-none"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="m-2 text-decoration-none"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="m-2 text-decoration-none"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="m-2 text-decoration-none"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
      
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h4 class="text-right">Description</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="name" value="">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Surname</label>
                        <input type="text" class="form-control" name="surname" value="" placeholder="surname">
                    </div>
                </div>
                <div class="row mt-3">
                <div class="col-md-12">
              
                        <label class="labels">Description</label>
                        <textarea class="form-control" name="description" placeholder="Enter description"></textarea>
                    </div>
                    <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center mb-2 mt-2">
                    <h4 class="text-right">About</h4>
                </div>
                        <label class="labels mt-2">Supply</label>
                        <input type="text" class="form-control" name="supply" placeholder="supply" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels mt-2">From</label>
                        <input type="text" class="form-control" name="location" placeholder="where you from" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels mt-2">Language</label>
                        <input type="text" class="form-control" name="language" placeholder="your language" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels mt-2">Date of Joining</label>
                        <input type="date" class="form-control" name="joining" placeholder="Add joining date" value="">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2 mt-2">
                    <h4 class="text-right">Contact</h4>
                </div>
                   
                    <div class="col-md-12">
                        <label class="labels mt-2">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="address" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels mt-2">Message</label>
                        <input type="text" class="form-control" name="message" placeholder="message" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels mt-2">Email ID</label>
                        <input type="email" class="form-control" name="email" placeholder="email" value="">
                    </div>
                   
                </div>
                <div class="mt-5">
    <div class="row">
        <div class="col text-left">
        <a href="manufacture_interface.php"><button class="btn btn-primary btn-danger " type="button">Back</button></a>
           
        </div>
        <div class="col text-right">
        <button class="btn btn-primary profile-button" name="save" type="submit">Save Profile</button>
        </div>
    </div>
</div>
            </div>
        </div>
        <div class="col-md-4">
  <div class="p-3 py-5">
    <div class="d-flex justify-content-between align-items-center experience">
      <span>Add categories <strong>(Optional)</strong></span>
      <span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Category</span>
    </div>
    <br>
    <div class="col-md-12">
      <label class="labels mb-2">Type</label>
      <input type="text" class="form-control" name="category_type" placeholder="Select type" value="">
      <div class="categories mt-4">
        <h5>Categories</h5>
        <form method="post" enctype="multipart/form-data">
        <div class="category-boxes">
            <?php foreach ($_SESSION['categories'] as $index => $category) { ?>
                <div class="category-box">
                    <label for="category-image<?= $index ?>">
                        <img class="rounded-circle mt-5 category-image" width="70px" src="<?php echo $category ? 'data:image/jpeg;base64,' . $category : 'images/11.jpg'; ?>">
                        <input type="file" id="category-image<?= $index ?>" class="category-image-input" name="category_image[]" style="display: none;">
                    </label>
                    <div class="overlay">
                        <div class="overlay-content">
                            <a href="#"><i class="fas fa-plus"></i></a>
                            <button class="remove-btn" name="remove_category" value="<?= $index ?>"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="text-center mt-4">
            <button type="submit" name="add_category" class="btn btn-primary"><i class="fas fa-plus-circle"></i>Add Category</button>
        </div>
    </form>
        
</div>
  </div>
</div>
    </div>
</div>
</form>

<script>
    document.getElementById("profile-picture").addEventListener("change", function (event) {
    var file = event.target.files[0];
    var reader = new FileReader();

    reader.onload = function (e) {
        document.getElementById("profile-img").src = e.target.result;
    };

    reader.readAsDataURL(file);
});

</script>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            var categoryBoxesContainer = document.querySelector(".category-boxes");
            var addCategoryBtn = document.querySelector("button[name='add_category']");

            addCategoryBtn.addEventListener("click", function () {
                var newCategoryBox = document.createElement("div");
                newCategoryBox.classList.add("category-box");

                var label = document.createElement("label");

                var newImageElement = document.createElement("img");
                newImageElement.classList.add("rounded-circle", "mt-5", "category-image");
                newImageElement.width = "70px";

                var newImageInput = document.createElement("input");
                newImageInput.type = "file";
                newImageInput.classList.add("category-image-input");
                newImageInput.style.display = "none";
                newImageInput.name = "category_image[]";

                label.appendChild(newImageElement);
                label.appendChild(newImageInput);

                var overlay = document.createElement("div");
                overlay.classList.add("overlay");

                var overlayContent = document.createElement("div");
                overlayContent.classList.add("overlay-content");

                var addLink = document.createElement("a");
                addLink.href = "#";
                addLink.innerHTML = '<i class="fas fa-plus"></i>';

                var removeBtn = document.createElement("button");
                removeBtn.classList.add("remove-btn");
                removeBtn.type = "button";
                removeBtn.innerHTML = '<i class="fas fa-minus"></i>';

                overlayContent.appendChild(addLink);
                overlayContent.appendChild(removeBtn);

                overlay.appendChild(overlayContent);

                newCategoryBox.appendChild(label);
                newCategoryBox.appendChild(overlay);

                categoryBoxesContainer.appendChild(newCategoryBox);
            });

            categoryBoxesContainer.addEventListener("change", function (event) {
                var target = event.target;
                if (target.classList.contains("category-image-input")) {
                    var index = Array.from(categoryBoxesContainer.children).indexOf(target.parentElement);
                    var imageElement = target.previousElementSibling;

                    if (target.files && target.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            imageElement.src = e.target.result;

                            // Submit form to change category image
                            var form = new FormData();
                            form.append("change_category_image", index);
                            form.append("category_image[]", target.files[0]);

                            var xhr = new XMLHttpRequest();
                            xhr.open("POST", window.location.href);
                            xhr.send(form);
                        };
                        reader.readAsDataURL(target.files[0]);
                    }
                }
            });

            categoryBoxesContainer.addEventListener("click", function (event) {
                if (event.target.classList.contains("remove-btn")) {
                    var categoryBox = event.target.closest(".category-box");
                    categoryBox.remove();
                }
            });
        });
    </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</script>
</body>
</html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Assuming you have established a database connection
$host = '172.17.0.2';
$dbname = 'clothdatabase';
$username = 'root';
$password = '786110';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Rest of your code...

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if (isset($_POST['save'])) {
    // Retrieve the form data
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $description = $_POST['description'];
    $supply = $_POST['supply'];
    $location = $_POST['location'];
    $language = $_POST['language'];
    $joiningDate = $_POST['joining'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    $email = $_POST['email'];

     // Check if name, surname, or email already exists
     $existingData = $pdo->prepare("SELECT * FROM manufacturer_profile WHERE name = :name OR surname = :surname OR email = :email");
     $existingData->bindParam(':name', $name);
     $existingData->bindParam(':surname', $surname);
     $existingData->bindParam(':email', $email);
     $existingData->execute();
     $rowCount = $existingData->rowCount();
 
     if ($rowCount > 0) {
         echo "<script>alert('The name, surname, or email already exists. Please enter different values.');</script>";
         echo "<script>window.location.href = 'manufacture-edit.php';</script>";  
        } else {

    // Handle the profile picture upload
    $profilePicture = $_FILES['profile_picture']['tmp_name'];

    // Read the contents of the profile picture file
    $profilePictureData = file_get_contents($profilePicture);

    if ($profilePictureData !== false) {
        // Prepare the SQL statement
        $sql = "INSERT INTO manufacturer_profile (name, surname, description, supply, location, language, joining_date, address, message, email, category_type, profile_picture) 
                VALUES (:name, :surname, :description, :supply, :location, :language, :joiningDate, :address, :message, :email, :categoryType, :profilePicture)";

        // Prepare and execute the SQL statement with PDO
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':supply', $supply);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':language', $language);
        $stmt->bindParam(':joiningDate', $joiningDate);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':categoryType', $categoryType);
        $stmt->bindParam(':profilePicture', $profilePictureData, PDO::PARAM_LOB);

        // Check if the query executed successfully
        if ($stmt->execute()) {
            echo "<script>alert('Data inserted successfully')</script>";
            echo "<script>window.location.href = 'manufacture-edit.php';</script>";

        } else {
            echo "Error: Unable to insert data.";
        }
    } else {
        echo "Error: Failed to read profile picture data.";
    }
}
}
// Fetch the profile picture path from the database
$profilePictureQuery = $pdo->prepare("SELECT profile_picture FROM manufacturer_profile WHERE name = :name AND surname = :surname AND email = :email");
$profilePictureQuery->bindParam(':name', $name);
$profilePictureQuery->bindParam(':surname', $surname);
$profilePictureQuery->bindParam(':email', $email);
$profilePictureQuery->execute();
$profilePictureRow = $profilePictureQuery->fetch(PDO::FETCH_ASSOC);

if ($profilePictureRow) {
    $profilePicturePath = $profilePictureRow['profile_picture'];
} else {
    // Handle the case when no profile picture is found
    $profilePicturePath = 'images/11.jpg'; // Replace with the path to a default profile picture
}

?>




