<?php

session_start();

$conn = mysqli_connect(
  'localhost',
  'karmaester',
  'Car26290686!',
  'concesionario'
) or die(mysqli_erro($mysqli));

?>