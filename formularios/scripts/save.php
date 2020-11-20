<?php
require('connection.php');


$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$description = $_POST['description'];


$query = "INSERT INTO products (name, price, stock, description) VALUES ('$name', '$price', '$stock', '$description')";


if(mysqli_query($conn, $query)){

    echo '<script>alert("Producto agregado con exito!"); window.location.href="../index.php"</script>';


}else{
    echo 'Error: '.$query.'<br/>'. mysqli_error($conn);
}

mysqli_close($conn);