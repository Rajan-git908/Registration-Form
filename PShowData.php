<?php
include "db_connection.php";
$sql="SELECT * FROM Patient";
$result=mysqli_query($conn,$sql);   
if(mysqli_num_rows($result)>0){
    echo "<table border='1' cellpadding='10' cellspacing='0'>
    <tr>    
        <th>Id</th>
        <th>Name</th>
        <th>Gender
        <th>Contact
        <th>Address
    </tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>
        <td>{$row['Id']}
        <td>{$row['Name']}
        <td>{$row['Gender']}
        <td>{$row['Contact']}
        <td>{$row['Address']}
        </tr>";
    }
   "</table>"; 
} else {
    echo "No records found.";
}
mysqli_close($conn);
echo "<br><br>
<button onclick=\"window.location.href='Patient.html'\">Back TO Home Page</button>
";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <style>
        body {
            background-image:url('back.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }
        table {
            background-color: rgba(250, 183, 178, 0.46);
            width: 80%;
            margin: 50px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color:rgb(21, 60, 252);
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        button {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            background-color:rgb(225, 240, 140);
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        </style>
</head>
<body>
    
</body>
</html>