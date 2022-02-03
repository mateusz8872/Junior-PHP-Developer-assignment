<?php 
include_once("inc/header.php");
include_once("inc/mysql.php");
session_start();
if(empty($_SESSION['cart'])){
    echo"<h2>Cart is empty!</h2>";
}else{
$price = NULL; //eliminate warning
$vals = array_count_values($_SESSION['cart']); //looking for duplicates and unique values
foreach($vals as $id => $x){ //loop for select every product added to cart and check how many times it was added
    $sql = "SELECT * FROM Product WHERE ID = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "
            <div class='row'>
                <div class='card my-1'>
                <div class='card-body'>
                    <h4 class='card-title'>x".$x." ".$row["Title"]."</h4>
                    <p class='col-3 d-inline-flex'>ID: ".$row["ID"]."</p>
                    <p class='col-4 d-inline-flex'>Price: ".$row["Price"]."&dollar;</p>
                    <p class='col-4 d-inline-flex'>Total price: ".$row["Price"]*$x."&dollar;</p>
                </div>
                </div>
            </div>
            ";
            $price+=$row["Price"]*$x; //returning total cost at the end of loop
        }
    }
}

}
if(empty($_SESSION['cart'])){
    $price=0;
}else{
echo "
<div class='row'>
    <div class='col-6 py-2 h2'>
        <p>Total cost = ".$price."&dollar;
        </p>
    </div>
    <div class='h3 py-2 col-6'>
        <a href='clearcart.php'>
            <button class='btn btn-outline-danger float-end'>Clear shopping cart</button>
        </a>
    </div>
</div>
";
}
include_once("inc/footer.php");
?>