<?php
include("../Models/ProductoDAO.php");

$clase = new ProductoDAO();
$msg=$clase->eliminarClase($_GET["id"]);








?>