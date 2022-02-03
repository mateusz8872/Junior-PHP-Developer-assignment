<?php include_once("inc/header.php")?>
<?php include_once("inc/mysql.php")?>

<div class="col-6 px-5 py-2">
    <a href="addproduct.php" class="px-2">
        <button type="submit" class="btn btn-outline-primary">Add product</button>
    </a>
    <a href="cart.php" class="px-2">
        <button type="submit" class="btn btn-outline-primary">Go to cart</button>
    </a>
</div>

<div class='row'>                   
<?php
    $sql = 'SELECT * FROM Product ORDER BY ID ASC';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo"
            <div class='card my-1'>
                <div class='card-body'>
                    <p class='col-1 h3 px-3 d-inline-flex'>ID: <br>".$row["ID"]."</p>
                    <p class='col-3 h3 px-3 d-inline-flex'>Title: <br>".$row["Title"]." </p>
                    <p class='col-3 h3 px-3 d-inline-flex'>Price: <br>".$row["Price"]."&dollar;</p>
                    <div class='float-end'>
                        <div class='col d-inline-flex'>
                            <form method='post' action='delete.php'>
                                <input class='form-control 'hidden name='id'value=".$row["ID"].">
                                    <button type='submit' class=' col m-1 btn btn-outline-danger float-right' value='submit'>Delete</button>
                                </input>
                            </form>
                        </div>
                        <div class='col d-inline-flex'>
                            <form method='post' action='edit.php'>
                                <input class='form-control 'hidden name='id'value=".$row["ID"].">
                                    <button type='submit' class=' col m-1 btn btn-outline-warning float-right' value='submit'>Edit</button>
                                </input>
                            </form>
                        </div>
                        <div class='col d-inline-flex'>
                            <form method='post' action='addtocart.php?id=".$row["ID"]."'>
                                <input class='form-control' hidden name='id'>
                                    <button type='submit' id='toastbtn' class=' col m-1 btn btn-outline-success float-right' value='submit'>Add to cart</button>
                                </input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
    }
?>
</div>
<?php include_once("inc/footer.php")?>