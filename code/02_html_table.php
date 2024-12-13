<?php

# REUSE EXISTING CODE
require_once "./config.php";
require_once "./actions/helper_database.php";

# ESTABLISH CONNECTION
$connection_object = establish_connection();

# RETRIVE DATA FROM TABLE
$select_query = "SELECT * FROM users";

$result_set = get_table_data($connection_object, $select_query);


# GENERATE DYNAMIC TABLE ROWS
$html_table_data = "";

foreach ($result_set as $row) {
    $html_table_data .= " 
    <tr>
        <td>" . $row[0] . "</td>
        <td>" . $row[1] . "</td>
        <td>" . $row[2] . "</td>
        <td> <a href='./01_html_update_forms.php?user_id=" . $row[0] . "'> Click to Update</a>
             <a href='./actions/01_delete.php?user_id=" . $row[0] . "'> Click to Delete</a>
        </td>
    </tr>";
}


?>

<html>

<head>
    <title> Working with HTML Forms & PHP</title>
</head>

<body>

    <a href="./01_html_forms.php"> Click to Add</a>
    <br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>Actions</th>
        </tr>
        <?php
        echo $html_table_data;
        ?>
    </table>

</body>

</html>