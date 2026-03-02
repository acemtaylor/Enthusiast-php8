<?php
include "header.php";
?>
<b>Current owned fanlistings:</b>
<?php      
$status = 'current';
$hide_dropdown = false; // Added for clarity; can be used if needed
$show_list = true;

try {
    // Include the file for showing owned fanlistings
    include ENTH_PATH . 'show_owned.php';
} catch (Exception $e) {
    // Error handling for any issues in including the file
    error_log('Error including show_owned.php: ' . $e->getMessage());
    echo '<p class="error">There was an issue retrieving the owned fanlistings. Please try again later.</p>';
}

// Include the footer
include "footer.php";
?>

