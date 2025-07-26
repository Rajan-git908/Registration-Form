<?php
include 'db_connection.php';

if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);

    $sql = "UPDATE ContactUS SET Name='$name', Email='$email', Gender='$gender', Comment='$comment' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: fetch_data.php"); // Redirect after update
}
?>