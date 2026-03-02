<?php
/******************************************************************************
 * DATABASE VARIABLES
 * These are the variables for your listing collective.
 ******************************************************************************/
$db_server = 'localhost';
$db_user = 'username';
$db_password = 'password';
$db_database = 'databasename';

/******************************************************************************
 * DATABASE TABLE VARIABLES
 * These are the variables for your listing collective's tables.
 ******************************************************************************/
$db_settings = 'settings';
$db_category = 'category';
$db_joined = 'joined';
$db_owned = 'owned';
$db_affiliates = 'affiliates';
$db_emailtemplate = 'emailtemplate';
$db_errorlog = 'errorlog';

/******************************************************************************
 * DO NOT EDIT ANYTHING BELOW THIS LINE UNTIL THE NEXT SIMILAR NOTE!
 ******************************************************************************/
if (!defined('DATABASE_CONNECT_ERROR')) {
    define('DATABASE_CONNECT_ERROR', 'Cannot connect to the database. ' .
        'Check your config file and try again. MySQL said: ');
}
if (!defined('STANDARD_ERROR')) {
    define('STANDARD_ERROR', '<p class="error">Error executing query. ' .
        'Please see the error logs.');
}

if (!defined('ENTH_PATH')) {
    // Get installation path
    $query = "SELECT `value` FROM `$db_settings` WHERE `setting` = :setting"; // Use parameter binding
    try {
        $db_link = new PDO('mysql:host=' . $db_server . ';dbname=' . $db_database . ';charset=utf8', $db_user, $db_password);
        $db_link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare the statement
        $stmt = $db_link->prepare($query);
        
        // Execute with parameter binding
        $stmt->execute([':setting' => 'installation_path']);
        
        // Fetch the result
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 
        if ($row === false) {
            throw new RuntimeException('Query ' . $query . ' returned no results.');
        }
        define('ENTH_PATH', $row['value']);
        
    } catch (PDOException $e) {
        // Log the error message and provide a user-friendly message
        error_log(DATABASE_CONNECT_ERROR . $e->getMessage());
        die(DATABASE_CONNECT_ERROR);
    } catch (RuntimeException $e) {
        // Handle runtime exceptions (like unexpected results)
        error_log($e->getMessage());
        die(STANDARD_ERROR);
    } catch (Exception $e) {
        // Catch all other exceptions
        error_log('Unexpected error: ' . $e->getMessage());
        die(STANDARD_ERROR);
    }
}
/******************************************************************************
 * END OF THE SENSITIVE LINES
 ******************************************************************************/


/******************************************************************************
 * LISTING ID VARIABLE
 * This variable is for the listing ID of the fanlisting this config file is
 * for. When this file is in the collective directory, it should be commented
 * (must have '//' before the line). Otherwise, it MUST be uncommented (no
 * '//' before the line) and the proper listing ID should be set.
 ******************************************************************************/

//$listing = 1; // Uncomment this line and set your listing ID as needed.

