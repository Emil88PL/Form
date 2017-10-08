<?php
$host="localhost";
$db_user="root";
$db_password="";
$db_name="form";

// Create connection
$conn = new mysqli($host, $db_user, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql= "INSERT INTO comments (Email,Name,Comment,Terms) VALUES ('$_POST[email]','$_POST[name]','$_POST[comment]','$_POST[terms]')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<html>
<body>

<br>


Name: <?php echo $_POST["name"]; ?><br>
Email address: <?php echo $_POST["email"]; ?><br>
Comment: <?php echo $_POST["comment"]; ?><br>
Terms &amp; Conditions: <?php echo $_POST["terms"] ?>



</body>
</html>
