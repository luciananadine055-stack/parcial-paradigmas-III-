let carrito = []; // acá guardo los productos
let subtotal = 0; // suma total

function agregar(nombre, precio) {
  // agrego el producto al carrito
  carrito.push({ nombre, precio });

  // muestro el producto en la lista del carrito
  const lista = document.getElementById("lista-carrito");
  const item = document.createElement("li");
  item.textContent = `${nombre} - $${precio}`;
  lista.appendChild(item);

  // actualizo el subtotal
  subtotal += precio;
  document.getElementById("subtotal").textContent = subtotal;
}

function enviarPedido() {
  // paso los datos del carrito al formulario
  document.getElementById("carritoInput").value = JSON.stringify(carrito);
  document.getElementById("subtotalInput").value = subtotal;
  return true; // envío el formulario
}
