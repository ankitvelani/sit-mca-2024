<?php
/* 
################### ACTION: Form Actions ###################
# Actions file to retrive data from simple html form
*/

# IMPORT REUSABLE CODE
require_once "../config.php";
require_once "./helper_database.php";


# RETRIVE FORM DATA
$user_id = $_GET['user_id'];

# ESTABLISH DATABASE CONNECTIVITY
$connection_object = establish_connection();

# DELETE DATA
$delete_query = " DELETE FROM users WHERE user_id = $user_id; ";

delete_table_data($connection_object, $delete_query);


# CONNECTION CLOSE
close_database_connect($connection_object);

# REDIRECT TO DISPLAY PAGE
header("location: ../02_html_table.php");