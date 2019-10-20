<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Contact";

$firstname=$_POST["firstname"];
$laststname=$_POST["lastname"];
$country=$_POST["country"];
$comment=$_POST["subject"];


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contactdetails (firstname, lastname, country, comment)
VALUES ('$firstname', '$laststname','$country','$comment')";

if ($conn->query($sql) === TRUE) {
    header('location:contact.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>