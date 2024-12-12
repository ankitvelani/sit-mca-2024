<?php
/* 
################### ACTION: Form Actions ###################
# Actions file to retrive data from simple html form
*/

# IMPORT REUSABLE CODE
require_once "./config.php";
require_once "./helper_database.php";


# RETRIVE FORM DATA
$user_name = $_GET['user_name'];
$user_email = $_GET['user_email'];
$user_password = $_GET['user_password'];


# ESTABLISH DATABASE CONNECTIVITY
$connection_object = establish_connection();

# INSERT DATA
$insert_query = "INSERT INTO users VALUES ('', '$user_name', '$user_email', '$user_password')";

$last_id = insert_data(
    $connection_object,
    $insert_query
);

# Display Last User ID/Last Insert ID
echo "Last UserID $last_id";

# CONNECTION CLOSE
close_database_connect($connection_object);