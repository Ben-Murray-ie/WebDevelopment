<?php

#This is a php script to fetch product data from the database.

#Declare variables to house database login credentials.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "g00275740";

#Connect to database.
$conn = new mysqli($servername, $username, $password, $dbname);
#Verify connection success.
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/*SQL query to select all values in the products table of the database. $row is an array containing the values in a given row. 
To access all values in all rows from one include, a multidimensional array $Rows is created, with a while loop
populating each element of $Rows with a $row array, with all the values of each row.*/ 

#Query selects all values from products table.
$sql = "SELECT * FROM products";
#Connect and query the database with $sql
$result = $conn->query($sql);
#Declare $Rows array to contain row arrays returned from database.
$Rows = array();
#Loop through all rows in products table, populate array with values of that row.
while($row = mysqli_fetch_array($result))
{
    #Add populated row to array.
	$Rows [] = $row;
}

#Close database connection.
$conn->close();
?>