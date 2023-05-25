<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$en_select = '';
$urdu_select = '';
$language = '';

// Check if the language is specified in the query parameter
if (isset($_GET['language']) && ($_GET['language'] == 'en' || $_GET['language'] == 'urdu')) {
    $language = $_GET['language'];
    setcookie('selectedLanguage', $language, time() + (86400 * 30), '/'); // Set a cookie with the selected language
} else {
    // Check if the language is stored in a cookie
    if (isset($_COOKIE['selectedLanguage']) && ($_COOKIE['selectedLanguage'] == 'en' || $_COOKIE['selectedLanguage'] == 'urdu')) {
        $language = $_COOKIE['selectedLanguage'];
    } else {
        // Default language if no language is set
        $language = 'en';
        setcookie('selectedLanguage', $language, time() + (86400 * 30), '/'); // Set a cookie with the default language
    }
}

if ($language == 'en') {
    $en_select = 'selected';
} else {
    $urdu_select = 'selected';
}
?>
