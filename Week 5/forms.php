<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_status_errors', 1);
        error_reporting(E_ALL);
    ?>

    <h1>Processing Input from HTML Forms</h1>
    <h2>Login Form using GET</h2>

    <form method="POST" action="/forms.php">
        <fieldset>
            <legend>Login</legend>
            <label for="email">Email: </label>
            <input type="text" name='txtEmail'/><br/>
            <label for="password">Password:</label>
            <input type="password" name='txtPassword'/><br/>
            <input type="submit" value="Submit" name="loginSubmit" />
            <input type="reset" value="Clear"/>
        </fieldset>
    </form>

    <?php
        $email = $_POST['txtEmail'];
        $password = $_POST['txtPassword'];

        echo $email . $password;

        if (isset($_POST["loginSubmit"])) {
            echo "The login form has been submitted";
        } else {
            echo "The login form has not been submitted";
        }
    ?>

    <form method="POST" action="/forms.php">
        <fieldset>
            <legend>Comments</legend>
            <label for="email2">Email</label>
            <input type="text" name="email" value=""> <br/>
            <textarea rows="4" cols="50" name="comment"></textarea> <br/>
            <label for="confirm">Click to Confirm: </label>
            <input type="checkbox" name="confirmed" value="agree" /> <br/>
            <input  type = "submit" value = "Submit" name = "submitted"/> <br/>
            <input type = "reset" value="Clear"/>
        </fieldset>
    </form>

    <?php
        $email2 = $_POST["email2"];
        $confirm = $_POST["confirm"];

        if (isset($_POST["confirmed"])) {
            $confirm = 'Agreed <br/>';
        } else {
            $confirm = 'Not Agreed <br/>';
        }

        if ($_POST["submit"]) {
            if (!empty($_POST["email2"])) {
                echo $email2;
                echo $_POST["comment"];
            } else {
                echo "Email must not be empty";
            }
        }
    ?>

    <h2>Tax Calculator</h2>

    <form action="/action_page.php">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
    </form> 

    <?php
        
    ?>
</body>
</html>