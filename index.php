<?php
include("includes/RL_conexion.php"); // conexión con la base de datos

// si el formulario se envió
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $carrito = $_POST["carrito"];
    $subtotal = $_POST["subtotal"];

    // inserto los datos en la tabla pedidos
    $sql = "INSERT INTO pedidos (nombre, direccion, telefono, carrito, subtotal, fecha)
            VALUES ('$nombre', '$direccion', '$telefono', '$carrito', '$subtotal', NOW())";
    mysqli_query($conexion, $sql);
    echo "<script>alert('Pedido guardado correctamente');</script>"; // mensaje al guardar
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodExpress</title>
  <link rel="stylesheet" href="css/RL_estilos.css"> <!-- estilos -->
</head>
<body>

  <h1>FoodExpress</h1>

  <!-- Menú de productos -->
  <section>
    <h2>Hamburguesas</h2>
    <ul>
      <li>Clásica - $2500 <button onclick="agregar('Clásica',2500)">Agregar</button></li>
      <li>Cheddar Bacon - $2800 <button onclick="agregar('Cheddar Bacon',2800)">Agregar</button></li>
      <li>Veggie - $2600 <button onclick="agregar('Veggie',2600)">Agregar</button></li>
    </ul>
  </section>

  <section>
    <h2>Pizzas</h2>
    <ul>
      <li>Muzzarella - $3000 <button onclick="agregar('Muzzarella',3000)">Agregar</button></li>
      <li>Napolitana - $3200 <button onclick="agregar('Napolitana',3200)">Agregar</button></li>
      <li>Fugazzeta - $3300 <button onclick="agregar('Fugazzeta',3300)">Agregar</button></li>
    </ul>
  </section>

  <section>
    <h2>Bebidas</h2>
    <ul>
      <li>Coca-Cola - $1200 <button onclick="agregar('Coca-Cola',1200)">Agregar</button></li>
      <li>Agua Mineral - $800 <button onclick="agregar('Agua Mineral',800)">Agregar</button></li>
      <li>Cerveza - $1500 <button onclick="agregar('Cerveza',1500)">Agregar</button></li>
    </ul>
  </section>

  <section>
    <h2>Postres</h2>
    <ul>
      <li>Helado de Vainilla - $2000 <button onclick="agregar('Helado de Vainilla',2000)">Agregar</button></li>
    </ul>
  </section>

  <hr>

  <!-- Carrito -->
  <section id="carrito">
    <h2>Carrito</h2>
    <ul id="lista-carrito"></ul>
    <p><strong>Subtotal:</strong> $<span id="subtotal">0</span></p>
  </section>

  <!-- Formulario de pedido -->
  <section>
    <h2>Enviar Pedido</h2>
    <form method="POST" onsubmit="return enviarPedido()">
      <!-- datos ocultos del carrito -->
      <input type="hidden" name="carrito" id="carritoInput">
      <input type="hidden" name="subtotal" id="subtotalInput">
      <input type="text" name="nombre" placeholder="Tu nombre" required><br><br>
      <input type="text" name="direccion" placeholder="Dirección" required><br><br>
      <input type="text" name="telefono" placeholder="Teléfono" required><br><br>
      <button type="submit">Enviar Pedido</button>
    </form>
  </section>

  <script src="js/RL_script.js"></script> <!-- script del carrito -->
</body>
</html>
