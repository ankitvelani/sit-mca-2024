
<?php

# Display functions
# echo
# print
# print_r
# var_dump


echo "Welcome to PHP !";
?>

<?= 1 + 1 ?>


<?php


$emp_name = "John";


/*
###### FUNCTION: add_two_num ######
# DESCRIPTION:
    This function helps in addition two numeric values

# PARAMETERS:
    num1: numeric number
    num2: numeric number

# RETURN VALUES
    numberic values
*/
function add_two_num($num_1, $num_2): int
{
    return $num_1 + $num_2;
}

echo add_two_num(num_1: 10, num_2: 10);


# Print Function 


$company = array(0=>"Apple", 1=>"IBM", 2=>"Google");
print_r($company);

$apple = array("Product"=> "iPhone", "Model" => "16Pro", "Year" => "2024");
print_r($apple);

$num = 1;
$num2 = 2;
var_dump($num, $num2);


foreach($apple as $element){
    echo $element;
    echo "<br>";
}

# Step: 1 Start PHP Session
session_start();

# Step: 2 Add Variable into Session
$_SESSION['user_name'] = 'John';

# Step: 3 Access PHP Session Variable
$user_name = $_SESSION['user_name'];

# Step: 4 Display PHP Session Variable Value
echo $user_name;

# Step: 5 Remove PHP Session Variable
session_unset();
echo $_SESSION['user_name'];

# Step: 6 Destroy OHO Session
session_destroy();



/*
############ FORMS ############

Step: 1 Create HTML Form
Step: 2 Set proper php action file
Step: 3 Use proper method GET or POST based on the requirement
Step: 4 Display simple message in Action File before doing anything
Step: 5 Execute the HTML page and click on Submit button to see Simple message from Action file
Step: 5 Retrieve forms values in PHP
Step: 6 Print the forms values in PHP
*/


/*
############ MySQL Connectivity ############
Step: 1 Define Database credentials as CONSTANT
Step: 2 Establish connectivity with MySQL
Step: 3 Display Message on successfull connection
Step: 4 Close the connection
*/


/*
############ HTML Forms & Database ############
Step: 1 Create HTML Forms
Step: 2 Set proper php action file
Step: 3 Use proper method GET or POST based on the requirement
Step: 4 Retrieve forms values in PHP
Step: 5 Print the forms values in PHP
Step: 6 Create Table in MySQL
Step: 7 Establish connectivity with MySQL
Step: 8 Insert data in Table
Step: 9 Display Last Insert ID for the database entry
Step: 10 Close the connection
*/


/*
############ Display data from MySQL Table ############
Step: 1 Establish connectivity with MySQL
Step: 2 Write proper SQL Query
Step: 3 Display SQL Query (optional)
Step: 4 Display table data
Step: 5 Close connection
*/


/*
############ Display data from MySQL Table and Display in HTML Table ############
Step: 1 Create HTML Table with Proper Values (ie. Static/Hardcoded values)
Step: 2 Establish connectivity with MySQL
Step: 3 Write proper SQL Query
Step: 4 Display SQL Query (optional)
Step: 5 Display table data
Step: 6 Convert Static HTML Table using PHP to display dynamic value
Step: 7 Close connection
*/


/*
############ Create CRUD(Create, Retrieve, Update, Delete) Operation ############

Step: 1 Establish connectivity with MySQL
Step: 2 Create HTML Forms
Step: 3 Use proper method GET or POST based on the requirement
Step: 4 Set proper php action file for Data Insert
Step: 5 Create Helper function for Insert into MySQL
Step: 6 Call helper function action file

Step: 7 Create Static HTML Table for displaying data
Step: 8 Create Helper function for Selecting data from MySQL
Step: 9 display data using print_r function
Step: 10 Convert static table to Dynamic Table
Step: 11 Add Hyperlink for Create New Entry

Step: 12 Redirect page to Step# 2 (Create HTML Form)

Step: 13 Create Update HTML Forms
Step: 14 Retrieve  Form data using GET for user_id
Step: 15 Get the data from MySQL table for the selected user_id
Step: 16 Fill the Form values for the selected users.  
Step: 17 Use proper method GET or POST based on the requirement
Step: 18 Set proper php action file for Data Update
Step: 19 Create Helper function for Update into MySQL
Step: 20 Call helper function action file
Step: 21 Redirect page to Step# 7 (Display Data)

Step: 22 Create action file for Delete data
Step: 23 Retrieve  Form data using GET for user_id
Step: 24 Create Helper function for Delete into MySQL
Step: 25 Call helper function action file
Step: 26 Redirect page to Step# 7 (Display Data)

*/


/*
########### SESSION ##########
Step: 1 Start PHP Session
Step: 2 Add Variable into Session
Step: 3 Access PHP Session Variable
Step: 4 Display PHP Session Variable Value
Step: 5 Remove PHP Session Variable
Step: 6 Destroy OHO Session
*/


/* 
########### Login Page ##########

*/