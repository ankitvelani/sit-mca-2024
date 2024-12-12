<?php

####################### MODULE: DATABASE HELPER MODULE #######################
# 1. DATABASE CONNECTIVITY METHOD
# 2. DATABASE CONNECTION CLOSE METHOD
# 3. INSERT INTO TABLE METHOD
##############################################################################

# CODE REUSE
require_once './config.php';


############### 1. DATABASE CONNECTIVITY METHOD ###############
# DESCRIPTION: 
#       Method to establish the MySQL database connectivity
# 
# PARAMETERS: None
#
# RETURN VALUES:
#       mysqli connection object
function establish_connection(): mysqli
{

    $connection_object = mysqli_connect(
        DATABASE_HOST,
        DATABASE_USER,
        DATABASE_PASSWORD,
        DATABASE_NAME
    );

    if ($connection_object == False) {
        exit();
    }

    return $connection_object;
}

############### 2. DATABASE CONNECTION CLOSE METHOD ###############
# DESCRIPTION: 
#       Method to close the MySQL Connectivity
# 
# PARAMETERS:
#       connection_object: mysql database connection object
#
# RETURN VALUES: None
#     
function close_database_connect($connection_object)
{
    mysqli_close($connection_object);
}


############### 3. INSERT INTO TABLE METHOD ###############
# DESCRIPTION: 
#       Method to insert records into table
# 
# PARAMETERS:
#       connection_object: mysql database connection object
#       insert_query: string
#
# RETURN VALUES:
#       last_id : int

function insert_data($connection_object, $insert_query): int
{

    $last_id = 0;

    $query_response = $connection_object->query($insert_query);

    if ($query_response == true) {
        $last_id = $connection_object->insert_id;
    }

    return $last_id;
}
