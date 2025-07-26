<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Delete </title>
    <style>
        body {
            background-image: url('back.jpg');
            background-size: cover; 
            font-family: Arial, sans-serif;
        }
        form {
            background-color: rgba(250, 183, 178, 0.4);
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            border-radius: 5px;
        
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        input[type="number"] {
            width: 200px;
            padding: 10px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        </style>
</head>
<body>
    <form name="DeletePatientForm" method="post">
        
            <h1>Delete Patient Form</h1>
            Patient Id: <input type="number" id="Id" name="Id" required> <br>
            <button type="submit">Delete</button>
            <button onclick="window.location.href='Patient.html'">Back TO Home Page</button>
    

    </form>
    <?php
    include "db_connection.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Id = $_POST['Id'];

        // Prepare the SQL statement
        $sql = "DELETE FROM Patient WHERE Id = $Id";
        if(!mysqli_query($conn, $sql)) {
            die("Error deleting data: " . mysqli_error($conn));
        }   
        else{
            mysqli_close($conn);
             echo "<script>
                alert('Data deleted successfully');
                window.location.href = 'PShowData.php';
            </script>";
        }
    }
    ?>
</body>
</html>