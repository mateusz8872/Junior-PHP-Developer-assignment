<?php
include('inc/mysql.php');
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM Product WHERE ID=".$id;
    $conn->query($sql);
}
header('Location: index.php');
?>