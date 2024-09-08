<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $recibirFactura = isset($_GET['recibirFactura']) ? 'Sí' : 'No';
    $genero = $_GET['genero'];
    $nombre = $_GET['nombre'];
    $direccion = $_GET['direccion'];
    $correo = $_GET['correo'];
    $envioFactura = $_GET['envioFactura'];

    echo "<h1>Datos Recibidos</h1>";
    echo "¿Desea recibir la factura? $recibirFactura<br>";
    echo "Género: $genero<br>";
    echo "Nombre: $nombre<br>";
    echo "Dirección: $direccion<br>";
    echo "Correo Electrónico: $correo<br>";
    echo "Forma de envío de la factura: $envioFactura<br>";
}
?>
