<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>Enter Customer Details</h1>
    <form action="insertRecord.php" method="post">
      <label for="first_name">First Name:</label>
      <input
        type="text"
        id="first_name"
        name="first_name"
        required
      /><br /><br />

      <label for="surname">Surname:</label>
      <input type="text" id="surname" name="surname" required /><br /><br />

      <label for="password">Password:</label>
      <input
        type="password"
        id="password"
        name="password"
        required
      /><br /><br />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required /><br /><br />

      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option></select
      ><br /><br />

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" required /><br /><br />

      <input type="submit" value="Submit" />
    </form>
  </body>
</html>
