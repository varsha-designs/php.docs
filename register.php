<?php
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypt password

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. <a href='login.php'>Login Here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Register</h2>

    <form method="POST" >
         <label>Username </label>
         <input type="text" name="username" required><br /> <br />
        <label>   Email  </label>
        <input type="email" name="email" required><br /><br />
          <label> Password </label>
        <input type="password" name="password" required><br /><br />
        <button type="submit">Register</button>
    </form>
</body>
</html>
