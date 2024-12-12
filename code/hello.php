
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
Step: 4 Retrive forms values in PHP
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

