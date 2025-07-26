<?php
include "db_connection.php";
$Id = $_POST['Id'];
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Contact = $_POST['Contact'];
$Gender = $_POST['Gender'];

$sql="UPDATE Patient SET Name='$Name', Gender='$Gender', Contact='$Contact', Address='$Address' WHERE Id = $Id";
if (!mysqli_query($conn, $sql)) {
    Die ("Error Updating data.." .mysqli_error($conn) );
} else {
 mysqli_close($conn);
    echo "<script>
        alert('Data updated successfully');
        window.location.href = 'PShowData.php';
    </script>";
    
}

?>