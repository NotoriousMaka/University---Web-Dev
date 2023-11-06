<?php
 //Make connection to database
 include 'connection.php';

 //(a)Gather from $_POST[] all the data submitted and store in variables
 $first_name = $_POST['first_name'];
 $surname = $_POST['surname'];
 $password = $_POST['password'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
 $age = $_POST['age'];

 //(b)Construct INSERT query using variables holding data gathered
 $query = "INSERT INTO customer (FirstName, LastName, Email, Password, Gender, Age) 
           VALUES('$first_name','$surname','$email','$password','$gender','$age')";

 //Temporarily echo $query for debugging purposes
 echo $query;

 //run $query
 $result = mysqli_query($connection, $query);

 if ($result) {
     echo "Data has been successfully inserted into the database.";
 } else {
     echo "Error: " . mysqli_error($connection);
 }
?>
