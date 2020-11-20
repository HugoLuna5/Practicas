<?php
require('connection.php');

$query = "SELECT * FROM products";
$results = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($results)){
    echo '<tr>
    <td scope="col">'.$row['id'].'</td>
    <td scope="col">'.$row['name'].'</td>
    <td scope="col">'.$row['price'].' MXN</td>
    <td scope="col">'.$row['stock'].'</td>
    <td scope="col">'.$row['description'].'</td>
    <td scope="col"><button onclick="goToEdit('.$row['id'].')" class="btn btn-primary"><i class="fas fa-edit"></i></button></td>
   <td scope="col"><button onclick="deleteProduct('.$row['id'].')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
    </tr>';
}

mysqli_close($conn);