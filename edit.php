<?php
    include_once("inc/header.php"); 
    include('inc/mysql.php');
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
?>
<form method="post" class="py-2" action="editprcss.php">
    <?php 
        $sql1 = "SELECT * FROM Product WHERE ID =".$id;
        $result = $conn->query($sql1);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "
                <input class='form-control 'hidden name='id'value=".$row["ID"].">
                <div class='form-group'>
                    <label>Title:</label>
                    <input type='text' maxlength='255' class='form-control' name='Title' aria-describedby='Title' value='".$row["Title"]."'>
                    <small id='Title' class='form-text text-muted'>Max 255 characters</small>
                </div>
                <div class='form-group'>
                    <label>Price:</label>
                    <input type='number' maxlength='255' step='0.01' min='0.01' class='form-control' name='Price' aria-describedby='Price' value='".$row["Price"]."'>
                    <small id='Price' class='form-text text-muted'>Min 0.01$ </small>
                </div>";
            }
        }
    ?>
    
    <button class="btn btn-primary" type="submit" value="submit">Submit</button>
</form>
<?php include_once("inc/footer.php");?>