CREATE DATABASE IF NOT EXISTS foodexpress;
USE foodexpress;

CREATE TABLE pedidos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  direccion VARCHAR(200),
  telefono VARCHAR(50),
  carrito TEXT,
  subtotal DECIMAL(10,2),
  fecha DATETIME
);
