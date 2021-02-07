<?php

session_start();

$conn = mysqli_connect(
  'localhost',
  'karmaester',
  'Car26290686!',
  'php_crud_mysql'
) or die(mysqli_erro($mysqli));

?>