function set_language() {
    var language = $('#language').val();
    localStorage.setItem("selectedLanguage", language); // Store the selected language in localStorage
    var currentUrl = window.location.href;
    var baseUrl = currentUrl.split('?')[0];
    var newUrl = baseUrl + '?language=' + language;
    window.location.href = newUrl;
  }
  
  $(document).ready(function() {
    var storedLanguage = localStorage.getItem("selectedLanguage");
    if (storedLanguage) {
      $('#language').val(storedLanguage); // Set the value of the language dropdown to the stored language
    }
  });