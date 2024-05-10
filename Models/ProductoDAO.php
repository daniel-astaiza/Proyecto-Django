<?php
// $val1 = 10;
// $val2 = 20;
// $Rta =$val1 + $val2;
// echo $Rta;
//eso es la conexion a la basse de datos
// try{
//     $conexion = new PDO("mysql:host=localhost; dbname=Trabajo_PHP", "root","");
//     echo"conexion realizada";
// }catch(Exception $e){
//     echo "error al conectar a la base de datos ======>".$e;

// }

//aqui tmb se conecta y se muestra lo que tengo en la base de tados
// $usuario = "root";
// $contraseña = "";
// try {
//     $conexion = new PDO('mysql:host=localhost;dbname=php', $usuario, $contraseña);
//     foreach($conexion->query('SELECT * from electrodomesticos') as $fila) {
//         print_r($fila);
//     }
//     $conexion = null;
// } catch (PDOException $e) {
//     print "¡Error!: " . $e->getMessage() . "<br/>";
//     die();
// }
include("../Conexiones/conexion.php");

class ProductoDAO{
    public $id;
    public $nombre;
    public $descripcion;

    function __construct($id=null,$nombre=null ,$descripcion=null)
    {
        $this-> id=$id;
        $this -> nombre=$nombre;
        $this -> descripcion=$descripcion;


    }
    function TraerClases(){
        $conexion=new Conexion ("localhost", "php" ,  "root" , "");
        //  $ const = conexion -> Conectar ();
        try{
            $conn = $conexion -> Conectar();
            $stmt = $conn -> query('SELECT * FROM electrodomesticos');
            $rows = $stmt -> fetchAll (PDO::FETCH_ASSOC);
        
            return$rows;
           
        } catch(PDOException $e){
            echo"error de conexion" . $e->getMessage();
        }



    }
    function eliminarClase($id){
        $conexion=new Conexion ("localhost", "php" ,  "root" , "");
        //  $ const = conexion -> Conectar ();
        try{
            $conn = $conexion -> Conectar();
            $stmt = $conn -> query("DELETE  FROM electrodomesticos WHERE id=$id ");
            $consulta=$conexion->prepare($query);
            $consulta->execute();
            return"se elimino ";
        } catch(PDOException $e){
            echo"error de conexion" . $e->getMessage();
        }



    }
    







}










?>