<!DOCTYPE html>
<html>
    <body>
        <?php
        $title = "<h1>Using Escape Characters</h1>";
        $name = "Alexe";
        $age = 19;

        echo $title;
        echo "<br />";
        echo "Hi! My name is $name and I am $age years old.";
        echo "<br />";
        echo "Mi nombre es Alexe y tengo 19 anos de edad";
        echo "<br />";
        echo "“most programmers say it`s better to use `echo` rather than `print`” says who?";
        echo "<br />";
        echo "Alexe Tataru";
        echo "<br />";
        echo "c3640898";
        echo "<br />";

        //getype() returns..
        echo gettype($name);
        echo "<br />";

        //strlen() returns..
        echo strlen($name);
        echo "<br />";

        //strtoUpper() returns..
        echo strtoupper($name);
        echo "<br />";

        $num1 = 9;
        $num2 = 12;

        echo "Num1 x Num2 = " . $num1 * $num2;
        echo "<br />";
        echo "Num1 as a percentage of Num2 = " . ($num1 / $num2) * 100;
        echo "<br />";
        echo "Num2 divided by Num1 = " . floor($num2 / $num1); 
        echo "<br />";
        ?>
    </body>
</html>
