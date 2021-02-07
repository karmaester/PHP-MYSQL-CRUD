<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save_car.php" method="POST">
                    <div class="form-group">
                        <label for="register">Register</label>
                        <input type="text" name="register" class="form-control" placeholder="Enter value" autofocus>
                        <label for="serial_engine">Engine Serial</label>
                        <input type="text" name="serial_engine" class="form-control" placeholder="Enter value">
                        <label for="serial_chassis">Chassis Serial</label>
                        <input type="text" name="serial_chassis" class="form-control" placeholder="Enter value">
                        <label for="brand">Brand</label>
                        <input type="text" name="brand" class="form-control" placeholder="Enter brand">
                        <label for="model">Model</label>
                        <input type="text" name="model" class="form-control" placeholder="Enter model">
                        <label for="color">Color</label>
                        <input type="text" name="color" class="form-control" placeholder="Enter color">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" placeholder="Enter price">
                    </div>
                    <input type="submit" name="save_car" class="btn btn-success" value="Add car">
                </form>
            </div>
        </div>
        <div class="col-md-8">
        </div>
    </div>

</div>



<?php include("includes/footer.php") ?>