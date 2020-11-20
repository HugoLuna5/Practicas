function updateProduct(event) {
  event.preventDefault();
  const headers = {
    "Content-Type": "application/json",
  };
  let id = document.getElementById("id").value;
  let name = document.getElementById("name").value;
  let price = document.getElementById("price").value;
  let stock = document.getElementById("stock").value;
  let description = document.getElementById("description").value;

  fetch("./scripts/update.php", {
    method: "POST",
    headers: headers,
    body: JSON.stringify({
      id: id,
      name: name,
      price: price,
      stock: stock,
      description: description,
    }),
  })
    .then((response) => response.json())
    .then(function (data) {
      if (data.status === "success") {
        Swal.fire({
          title: "Respuesta de la acción",
          text: "Producto actualizado con exito",
          icon: "success",
          confirmButtonText: "Ok",
        });
      } else {
        Swal.fire({
          title: "Error",
          text: "No se pudo actualizar tu producto",
          icon: "error",
          confirmButtonText: "Ok",
        });
      }
    });
}
