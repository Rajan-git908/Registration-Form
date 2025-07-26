<?php

include 'db_connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$gender=$_POST['gender'];
 
$sql = "CREATE TABLE IF NOT EXISTS ContactUS (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Gender ENUM('M', 'F', 'O') NOT NULL,
    Comment VARCHAR(90) NOT NULL
)";

if (mysqli_query($conn, $sql)==false) {
    echo "Error creating table: " . mysqli_error($conn)."<br>";
}

$stmt = "INSERT INTO ContactUS (Name, Email, Gender, Comment) VALUES ('$name', '$email', '$gender', '$comment')";

if (mysqli_query($conn, $stmt)) {
    echo "Data inserted successfully <br>";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}
mysqli_close($conn);

?>