<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table> 
    <h1>LISTA DE RONES</h1>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
      </tr>
    </thead>
  </table>
</body>
<?php 
$file = fopen('productos.csv', 'r');
if (!$file) die("ERROR AL ABRIR EL ARCHIVO");
while($product = fgets($file)) {
  list($nombre,$precio,$stock) = explode(';', $product);
}
?>
<form action="" method="post">
    <p>
       Nombre 
      <input type="text" id="nombre" placeholder="nombre">
    </p>
    <p>
       Precio 
      <input type="number" step="0.01" name="precio" placeholder="precio"> €
    </p>
    <p>
       Stock 
      <input type="numbre" id="stock" placeholder="stock">
    </p>
    <p>
      <button type="button" id="enviar">Enviar</button>
    </p>
  </form>
 
  <script src="productos.csv"></script>

</html>