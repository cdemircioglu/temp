<?php
$servername = "localhost";
$username = "root";
$password = "OpenRoadsCe2";
$dbname = "openroads";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO odmmweightsurvey VALUES ('AAA','2000-01-01',1,1,'AAA','AAA');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>