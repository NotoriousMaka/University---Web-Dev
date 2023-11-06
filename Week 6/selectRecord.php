<?php
    //Make connection to database

    include 'connection.php';

    //Display heading

    echo '<h2>Select ALL from the customer Table</h2>';

    //run query to select all records from customer table

    $query="SELECT * FROM customer LIMIT 5";

    //store the result of the query in a variable called $result

    $result=mysqli_query($connection, $query);

    //Use a while loop to iterate through your $result array and display
    //the first name, last name and email for each record

    while ($row=mysqli_fetch_assoc($result)){

        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';

    }

    unset($query);


    echo '<h2>Select ALL from the customer Table Where Age > 22</h2>';

    $query_22 = "SELECT FirstName, LastName, email FROM customer WHERE Age > 22 LIMIT 10";
    $result_22 = mysqli_query($connection, $query_22);

    echo '<h2>Select ALL from the customer Table Where Age >= 22 AND Gender is Female</h2>';

    $query_22F = "SELECT FirstName, LastName, email FROM customer WHERE Age >= 22 AND Gender = 'F' LIMIT 10";
    $result_22F = mysqli_query($connection, $query_22F);

    echo '<h2>Select ALL from the customer Table Where Gender is Male in Descending Order by Age</h2>';

    $query_MD = "SELECT FirstName, LastName, email FROM customer WHERE Gender = 'M' ORDER BY Age DESC LIMIT 10";
    $result_MD = mysqli_query($connection, $query_MD);

    echo '<h2>Select ALL from the customer Table Where the Letter "A" is in the FirstName</h2>';

    $query_AFN = "SELECT FirstName, LastName, email FROM customer WHERE FirstName LIKE '%a%' LIMIT 10";
    $result_AFN = mysqli_query($connection, $query_AFN);
?>