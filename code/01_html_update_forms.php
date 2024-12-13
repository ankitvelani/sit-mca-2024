<?php

# REUSE EXISTING CODE
require_once "./config.php";
require_once "./actions/helper_database.php";

# GET THE FORM DATA
$user_id = $_GET['user_id'];

# ESTABLISH CONNECTION
$connection_object = establish_connection();

# RETRIVE DATA FROM TABLE
$select_query = "SELECT * FROM users where user_id = $user_id";

$result_set = get_table_data(
    $connection_object,
    $select_query
);

foreach ($result_set as $row) {
    $user_id = $row[0];
    $user_name = $row[1];
    $user_email = $row[2];
    $user_password = $row[3];
}

?>

<html>

<head>
    <title> Working with HTML Forms & PHP</title>
</head>

<body>
    <pre>
    <form action="./actions/01_update_actions.php" method="GET">
        ID          : <input type="text" name="user_id" value="<?= $user_id; ?>" readonly/>

        Name        : <input type="text" name="user_name" value="<?= $user_name; ?>" />

        Email       : <input type="email" name="user_email" value="<?= $user_email; ?>" />

        Password    : <input type="password" name="user_password" value="<?= $user_password; ?>"  />

                      <input type="submit" name="btn_update" value="Update"> <input type="reset" name="btn_reset" value="Reset">
    </form>
    </pre>

</body>

</html>


<?php

/*
############ FORMS ############

Step: 1 Create HTML Form
Step: 2 Set proper php action file
Step: 3 Use proper method GET or POST based on the requirement
Step: 4 Display simple message in Action File before doing anything
Step: 5 Execute the HTML page and click on Submit button to see Simple message from Action file
Step: 5 Retrive forms values in PHP
Step: 6 Print the forms values in PHP
*/