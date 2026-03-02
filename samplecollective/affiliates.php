<?php
include "header.php"; 
?>
<b>Affiliates:</b><br><br>
<?php
include ENTH_PATH . 'show_collective_affiliates.php';

if (!file_exists(ENTH_PATH . 'show_collective_affiliates.php')) {
    echo "Affiliates information is currently unavailable.";
} else {
    include ENTH_PATH . 'show_collective_affiliates.php';
}
?>

