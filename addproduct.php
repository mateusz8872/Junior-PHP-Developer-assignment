<?php include_once("inc/header.php")?>
<div class="row">

<form method="post" action="addproductprcss.php" class="row g-3 needs-validation" novalidate>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="title">
        <label for="floatingInput">Name of product</label>
        <small id='Title' class='form-text text-muted'>Max 255 characters</small>
    </div>
    <div class="form-floating mb-3">
        <input type="number" step='0.01' min='0.01' class="form-control" min='0.01' name="price">
        <label for="floatingPassword">Price</label>
        <small id='Price' class='form-text text-muted'>Min 0.01$ </small>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
</div>
<?php include_once("inc/footer.php")?>