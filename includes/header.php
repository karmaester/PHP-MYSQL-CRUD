<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <title>PHP/MYSQL</title>
</head>
<body>
<script>
function validar(element)
{
const min=parseInt(element.dataset.lengthmin);
if(element.value.length>=min)
{

element.classList.remove("borderRed");
return true;
}else{

alert("Debe ingresar el minimo de caracteres indicados");
element.classList.add("borderRed");
return false;
}
}

function validarFormulario(formulario)
{
let result=true;
const input=formulario.querySelectorAll("input[type=text]");
// recorremos todos los input para ver si algun input no cumple con los caracteres minimos
for (i of input) {
if (validar(i)==false) {
result=false;
}
}
return result;
}
</script>
<style>
.borderGrey {border:2px solid Grey;}
.borderRed {border-color: Red;}
</style>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">
        PHP MYSQL CRUD
        </a>
    </div>
</nav>