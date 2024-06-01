<?php
include ('../Models/ProductoDAO.php');
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-control-Allow-Headers: Content-Type , Authorization");

$method = $_SERVER['REQUEST_METHOD'];
    $class = new ProductoDAO();

switch($method){
    case 'GET':
        $resultado = $class->TraerClases();
        echo json_encode($resultado);
        break;
    case'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        $resultado =$class->agregarClase($data['id'], $data['nombre'], $data['descripcion']);
        echo json_encode($resultado);
        break;
    case'DELETE':
        $data = json_decode(file_get_contents('php://input'), true);
        $resultado = $class->eliminarClase($data["id"]);
        echo json_encode($resultado);
        break;
    case'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        $resultado =$class->modificarClase($data['id'], $data['nombre'], $data['descripcion']);
        echo json_encode($resultado);
        break;
        case 'OPTIONS':
            header("HTTP/1.1 200 OK");
            break;
    default;
    http_response_code(405);
    echo json_encode(array('message'=> 'metodo no permitido'));
}
?>