<?php
include_once("inc/mysql.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Title = $_POST['Title'];
    $Price = $_POST['Price'];
    $id = $_POST['id'];
} 
$sql = "UPDATE Product SET Title ='$Title', Price='$Price' WHERE ID = ".$id;
if ($conn->query($sql) === TRUE) {
} else {
  echo "Error updating record: " . $conn->error;
}
header('Location: index.php');
?>