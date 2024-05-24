<?php
include("../Models/ProductoDAO.php");

$clase = new ProductoDAO();

if (empty($_REQUEST['id'])) {
    $msg = $clase->agregarClase($_REQUEST['id'], $_REQUEST['nombre'], $_REQUEST['descripcion']);
} else {
    $msg = $clase->modificarClase($_REQUEST['id'], $_REQUEST['nombre'], $_REQUEST['descripcion']);
}

echo $msg;
?>
