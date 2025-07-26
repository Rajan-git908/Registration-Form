 
<?php
include "db_connection.php";
$Name= $_POST['Name'];
$Address=$_POST['Address'];
$Contact=$_POST['Contact'];
$Gender=$_POST['Gender'];

$sql='CREATE TABLE IF NOT EXISTS Patient(
    Id Int auto_increment primary key,
    Name varchar(50) not null,
    Gender ENUM("Male", "Female") not null,
    Contact varchar(10) not null,
    Address varchar(100) not null
    )';

    if(mysqli_query($conn,$sql)==false){
         echo "Error creating table: " . mysqli_error($conn);
    }
$stmt="Insert into Patient(Name, Gender, Contact, Address ) values('$Name', '$Gender', '$Contact','$Address')";
if(mysqli_query($conn,$stmt)){
    echo "Data inserted successfully <br>";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}
mysqli_close($conn);
echo "<script>
    alert('Data inserted successfully');
    window.location.href = 'Patient.html';
</script>";
?>