<?php
require('connection.php');
 
$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$name = $data->name;
$price = $data->price;
$stock = $data->stock;
$description = $data->description;

$query = "UPDATE products SET name = '$name', price = '$price', stock = '$stock', description = '$description' WHERE id = $id";


if(mysqli_query($conn, $query)){
     echo json_encode([
        "status" => "success",
        "message" => "Producto actualizado con exito"
    ]);
}else{
    echo json_encode([
        "status" => "error",
        "message" => "Error al actualizado el producto"
    ]);
}

 mysqli_close($conn);

