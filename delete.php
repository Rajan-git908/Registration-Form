

<?php
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize ID input
    $sql = "DELETE FROM ContactUS WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: fetch_data.php"); // Redirect after deletion
}
?>
