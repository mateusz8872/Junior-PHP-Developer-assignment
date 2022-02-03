<?php 
include_once("inc/mysql.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $sql = "INSERT INTO Product (Title, Price) VALUES ('$title', '$price')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}
header("Location: index.php");
?>