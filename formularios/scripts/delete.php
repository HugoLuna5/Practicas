<?php
require('connection.php');
 
$data = json_decode(file_get_contents("php://input"));

$id = $data->id;

$query = "DELETE FROM products WHERE id = ".$id.";";


$result = mysqli_query($conn, $query);


if($result){
     echo json_encode([
        "status" => "success",
        "message" => "Producto eliminado con exito"
    ]);
}else{
    echo json_encode([
        "status" => "error",
        "message" => "Error al eliminar el producto"
    ]);
}


 mysqli_close($conn);