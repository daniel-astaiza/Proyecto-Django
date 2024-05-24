<?php
include("../Models/ProductoDAO.php");

$clase = new ProductoDAO();
$clases = $clase->TraerClase($_GET['id']);
echo json_encode($clases);
?>
