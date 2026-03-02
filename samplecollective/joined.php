<?php include "header.php"; ?>

Last joined: 
<?= isset($joined_newest['added']) && strtotime($joined_newest['added']) !== false ? date('F j, Y', strtotime($joined_newest['added'])) : 'Unknown'; ?>
<br/>

<b>Joined fanlistings:</b>

<?php
$show_list = true;
$show_all_by_categories = true;

// Include the joined fanlistings
try {
    include ENTH_PATH . 'show_joined.php';
} catch (Exception $e) {
    // Log the error
    error_log('Error including show_joined.php: ' . $e->getMessage());
    echo '<p class="error">There was an issue retrieving the joined fanlistings. Please try again later.</p>';
}
?>

<?php include "footer.php"; ?>

