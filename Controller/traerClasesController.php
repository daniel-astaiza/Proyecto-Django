<?php
include("../Models/ProductoDAO.php");

$clase = new ProductoDAO();
$clases = $clase->TraerClases();
echo json_encode($clases);
?>
