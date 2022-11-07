<?php
$servername = "localhost";
$username = "root";
$password = "alfrednobel";
$dbname = "profile_data";


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt = $conn->prepare("INSERT INTO profile_data_table (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$stmt->execute();


echo "New records created successfully";
$conn = null;

?>
