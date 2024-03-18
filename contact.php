<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Get form data
$name = $_POST['Full name'];
$email = $_POST['Email'];
$phone  = $_POST['Phone number'];
$Message = $_POST['Message'];

// Insert data into database
$sql = "INSERT INTO users (full name, email, phone number, Message, ) VALUES ('$fullname',
'$email', '$phonenumber', '$address', )";
if ($conn->query($sql) === TRUE) {
echo "user created successfully";
} else {
echo "Error: user not created " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>