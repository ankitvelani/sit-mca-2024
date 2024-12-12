<?php

require_once "./config.php";

/* Establish Database Connection */
$connection_object = mysqli_connect(
    DATABASE_HOST,
    DATABASE_USER,
    DATABASE_PASSWORD,
    DATABASE_NAME
);

if ($connection_object == False) {
    exit();
} else {
    echo "Successfully Connected!";
}


/* Close Database Connection */
mysqli_close($connection_object);
