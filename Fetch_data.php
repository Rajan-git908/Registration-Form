<?php
include 'db_connection.php';

$sql="select *from ContactUS";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Comment</th>
                </tr>";
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['Name']}</td>
                    <td>{$row['Email']}</td>
                    <td>{$row['Gender']}</td>
                    <td>{$row['Comment']}</td>
		 <td>
                    <a href='update.php?id={$row['id']}'>Update</a> | 
                    <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                </td>


                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }

    mysqli_close($conn);
?>