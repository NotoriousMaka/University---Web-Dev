<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Web Applications and Technologies</title>

        <link type="text/css" rel="stylesheet" href="main.css" />
    </head>

    <body>

        <header>
            <h1>Alexe Tataru c3640898</h1>
        </header>

        <section id="container">
            <h1>Fundamentals of PHP</h1>

            <?php
                echo "<h1>Selection</h1>";

                $day = 'Tuesday';
                echo 'It`s ' . $day . '.';
                echo "</br>";

                if ($day == 'Wednesday') {
                    echo "It`s midweek.";
                    echo "</br>";
                }
                else {
                    echo "It`s not midweek.";
                    echo "</br>";
                }

                $hour = date('h');
                if ($hour < 12)
                {
                    echo "Good morning.";
                }
                elseif ($hour > 12 && $hour < 18){
                    echo "Good afternoon.";
                }
                else {
                    echo "Goodnight.";
                }

                $pass = "password";
                if (strlen($pass) > 4 && strlen($pass) < 10)
                {
                    if ($pass == "password" || $pass == "username")
                        echo "Password is valid.";
                    else {
                        echo "Password length is correct, but not the password itself.";
                    }

                }
                else
                {
                    echo "Password length is invalid.";
                }

                $ticket_price = 25;
                $age = 11;
                $membership = true;
                $final_price = 0;

                if ($age < 12) {

                    echo "Initial Ticket Price: " . $ticket_price;
                    echo "</br>";

                    echo "Age " . $age;
                    echo "</br>";

                    if ($membership = true) {
                        echo "Membership: Yes";
                        echo "</br>";

                        $final_price = $ticket_price - ($ticket_price * (50 / 100));
                    }
                    else {
                        echo "Membership: No";
                        echo "</br>";

                        $final_price = $ticket_price - ($ticket_price * (50 / 100));
                    }

                    echo "Final Ticket Price: " . $final_price;
                    echo "</br>";
                }
                elseif ($age > 12 && $age < 18) {
                    echo "Initial Ticket Price: " . $ticket_price;
                    echo "</br>";

                    echo "Age " . $age;
                    echo "</br>";

                    if ($membership = true) {
                        echo "Membership: Yes";
                        echo "</br>";

                        $final_price = $ticket_price - ($ticket_price * (35 / 100));
                    }
                    else {
                        echo "Membership: No";
                        echo "</br>";

                        $final_price = $ticket_price - ($ticket_price * (25 / 100));
                    }

                    echo "Final Ticket Price: " . $final_price;
                    echo "</br>";
                }
                else if ($age > 65) {
                    echo "Initial Ticket Price: " . $ticket_price;
                    echo "</>";

                    echo "Age " . $age;
                    echo "</br>";

                    if ($membership = true) {
                        echo "Membership: Yes";
                        echo "</br>";

                        $final_price = $ticket_price - ($ticket_price * (35 / 100));
                    }
                    else {
                        echo "Membership: No";
                        echo "</br>";

                        $final_price = $ticket_price - ($ticket_price * (25 / 100));
                    }

                    echo "Final Ticket Price: " . $final_price;
                    echo "</br>";
                }

                echo "<h1>Arrays</h1>";
                echo "<h2>Simple Arrays</h2>";

                $products = array("tee", "pants", "jacket");

                print_r($products);
                echo "</br>";

                echo "The item at index[0] is: " . $products[0];
                echo "</br>";

                echo "The item at index[1] is: " . $products[1];
                echo "</br>";

                echo "The item at index[2] is: " . $products[1];
                echo "</br>";


                echo "<h2>Associaive Arrays</h2>";

                $customer = array("CustID" => 12, "CustName" => "Sarah", "CustAge" => 23, "CustGender" => "Female");

                print_r($customer);
                echo "</br>";

                $customer[2] = 49;
                array_push($customer, "CustEmail");
                $customer["custEmail"] = "sarah@gmail.com";
                
                print_r($customer);
                echo "</br>";

                echo "Items in my customer array.";
                echo "</br>";

                echo "The item at index[custName] is: " . $customer["CustName"];
                echo "</br>";
                
                echo "The item at index[custMail] is: " . $customer["CustMail"];
                echo "</br>";

                echo "Multi-Dimensional Array";

                $stock = array(
                    "id1" => array(
                        "description" => "t-shirt",
                        "price" => 9.99,
                        "stock" => 100,
                        "colour" => ["blue", "green", "red"]
                    ),
                    "id2" => array(
                        "description" => "cap",
                        "price" => 4.99,
                        "stock" => 50,
                        "colour" => ["blue", "black", "grey"]
                    ),
                    "id3" => array(
                        "description" => "mug",
                        "price" => 6.99,
                        "stock" => 30,
                        "colour" => ["yellow", "green", "pink"]
                    )
                );

                print_r($stock);
                $order1 = "green " . $stock['id1']['description'] . "</br>" . " Price: £" . $stock['id1']['price'];
                $order2 = "grey " . $stock['id2']['description'] . "</br>" . " Price: £" . $stock['id2']['price'];

                echo "This is my order: ";
                echo "</br>";
                echo $order1;
                echo "</br>";
                echo $order2;
                echo "</br>";
                
                echo "<h1>Loops</h1>";
                echo "<h2>While Loop</h2>";

                $counter = 1;

                while ($counter < 6)
                {
                    echo 'Count: '.$counter.'<br />';
                    $counter++;
                }

                $shirtPrice = 9.99;

                echo "<table>";
                echo "<tr><th>Quantity</th><th>Total</th></tr>";

                $counter = 1;

                while ($counter < 10)
                {
                    $total = $counter * $shirtPrice;
                    echo "<tr><td>" . $counter . "</td><td>$" . number_format($total, 2) . "</td></tr>";
                    $counter++;
                }

                echo "</table>";

                echo "<h2>For Loops</h2>";
                $names = array(
                    "Alexe", "Mariano", "George", "Maria", "John"
                );

                for ($i = 0; $i < 5; $i++) {
                    echo $names[$i] ."<br/>";
                }

                echo "<h2>Foreach Loops</h2>";

                $names = array(
                    "Alexe" => "c123456",
                    "Mariano" => "c234567",
                    "George" => "c300421",
                    "Maria" => "c281237",
                    "John" => "c192838"
                );

                foreach ($names as $name => $id) {
                    echo "Name: $name, Student ID: $id<br/>";
                }

                $city = array('Peter' => 'LEEDS', 'Kat' => 'bradford', 'Laura' => 'wakeFIeld');

                echo "Before modification:<pre>";
                print_r($city);
                echo "</pre>";

                foreach ($city as $key => $value) {
                    $city[$key] = ucfirst(strtolower($value));
                }

                echo "After modification:<pre>";
                print_r($city);
                echo "</pre>";
            ?>
        </section>

        <footer>
            <small> <a href="../watIndex.html">Home</a></small>
        </footer>
    </body>
</html>