<?php
include("db.php");
$register = '';
$serial_engine = '';
$serial_chassis = '';
$brand = '';
$year = '';
$model = '';
$color = '';
$price = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM cars WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $row = mysqli_fetch_array($result);
    $register = $row['register'];
    $serial_engine = $row['serial_engine'];
    $serial_chassis = $row['serial_chassis'];
    $brand = $row['brand'];
    $year = $row['year'];
    $model = $row['model'];
    $color = $row['color'];
    $price = $row['price'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['title'];
  $description = $_POST['description'];

  $query = "UPDATE car set title = '$title', description = '$description' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-group">
                <label for="register">Register</label>
                <input type="text" name="register" class="form-control" value="<?php echo $register; ?>" data-lengthMin="6" placeholder="Enter value" autofocus>
                <label for="serial_engine">Engine Serial</label>
                <input type="text" name="serial_engine" class="form-control" placeholder="Enter value">
                <label for="serial_chassis">Chassis Serial</label>
                <input type="text" name="serial_chassis" class="form-control" placeholder="Enter value">
                <label for="brand">Brand</label>
                <input type="text" name="brand" class="form-control" placeholder="Enter brand">
                <label for="model">Model</label>
                <input type="text" name="model" class="form-control" placeholder="Enter model">
                <label for="year">Year</label>
                <input type="text" name="year" class="form-control" data-lengthMin="4" placeholder="Enter year">
                <label for="color">Color</label>
                <input type="text" name="color" class="form-control" placeholder="Enter color">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Enter price">
            </div>
            <input type="submit" name="save_car" class="btn btn-success" value="Update">
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>