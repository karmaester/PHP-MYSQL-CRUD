<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
        <!-- alert message -->
        <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save_car.php" method="POST">
                    <div class="form-group">
                        <label for="register">Register</label>
                        <input type="text" name="register" class="form-control" onkeyup=validar(this); data-lengthMin="6" placeholder="Enter value" autofocus>
                        <label for="serial_engine">Engine Serial</label>
                        <input type="text" name="serial_engine" class="form-control" placeholder="Enter value">
                        <label for="serial_chassis">Chassis Serial</label>
                        <input type="text" name="serial_chassis" class="form-control" placeholder="Enter value">
                        <label for="brand">Brand</label>
                        <input type="text" name="brand" class="form-control" placeholder="Enter brand">
                        <label for="model">Model</label>
                        <input type="text" name="model" class="form-control" placeholder="Enter model">
                        <label for="year">Year</label>
                        <input type="text" name="year" class="form-control" onkeyup=validar(this); data-lengthMin="4" placeholder="Enter year">
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
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Register</th>
                    <th>Engine Serial</th>
                    <th>Chassis Serial</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $query = "SELECT * FROM cars";
                $result_cars = mysqli_query($conn, $query);    

                while($row = mysqli_fetch_assoc($result_cars)) { ?>
                <tr>
                    <td><?php echo $row['register']; ?></td>
                    <td><?php echo $row['serial_engine']; ?></td>
                    <td><?php echo $row['serial_chassis']; ?></td>
                    <td><?php echo $row['brand']; ?></td>
                    <td><?php echo $row['model']; ?></td>
                    <td><?php echo $row['year']; ?></td>
                    <td><?php echo $row['color']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                        <i class="fas fa-marker"></i>
                    </a>
                    <a href="delete_car.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                    </a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>



<?php include("includes/footer.php") ?>