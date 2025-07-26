<?php
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM ContactUS WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<form method="POST" action="update_process.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Name: <input type="text" name="name"  required><br>
    Email: <input type="email" name="email"  required><br>
    Gender:
    <select name="gender">
        <option value="M" >Male</option>
        <option value="F" >Female</option>
        <option value="O" >Other</option>
    </select><br>
    Comment: <textarea name="comment" rows="5"></textarea><br>
    <input type="submit" name="update">
</form>