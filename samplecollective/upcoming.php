<?php
include "header.php"; 
?>
<b>Upcoming fanlistings:</b>
<?php
$status = 'upcoming';
$hide_dropdown = false;
$show_list = true;
$show = 'all';

// Error handling for including the owned fanlistings
try {
    include ENTH_PATH . 'show_owned.php';
} catch (Exception $e) {
    // Log the error and display a user-friendly message
    error_log('Error including show_owned.php: ' . $e->getMessage());
    echo '<p class="error">There was an issue retrieving the upcoming fanlistings. Please try again later.</p>';
}

include "footer.php"; 
?>

