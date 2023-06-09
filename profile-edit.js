document.addEventListener("DOMContentLoaded", function () {
    var categoryBoxesContainer = document.querySelector(".category-boxes");
    var categoryBoxTemplate = document.querySelector(".category-box-template");
  
    // Remove the display: none; style from the category box template
    categoryBoxTemplate.style.display = "block";
  
    // Add event listener for adding a new category
    var addCategoryBtn = document.querySelector("#add-category-btn");
    addCategoryBtn.addEventListener("click", function () {
      var newCategoryBox = categoryBoxTemplate.cloneNode(true);
      newCategoryBox.classList.remove("category-box-template");
  
      // Reset the input value of the cloned category box
      var newImageInput = newCategoryBox.querySelector(".category-image-input");
      newImageInput.value = "";
  
      // Add event listener for the new category's image input
      var newImageElement = newCategoryBox.querySelector(".category-image");
      newImageInput.addEventListener("change", function () {
        if (this.files && this.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            newImageElement.src = e.target.result;
          };
          reader.readAsDataURL(this.files[0]);
        }
      });
  
      // Add event listener for the new category's delete button
      var newDeleteBtn = newCategoryBox.querySelector(".remove-btn");
      newDeleteBtn.addEventListener("click", function () {
        newCategoryBox.remove();
      });
  
      // Append the new category box to the categories container
      categoryBoxesContainer.appendChild(newCategoryBox);
    });
  
    // Add event listener for the existing categories' delete buttons
    categoryBoxesContainer.addEventListener("click", function (event) {
      if (event.target.classList.contains("remove-btn")) {
        var categoryBox = event.target.closest(".category-box");
        categoryBox.remove();
      }
    });
  });
  