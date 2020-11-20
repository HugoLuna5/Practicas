function goToEdit(id) {
  window.location.href = "./show.php?product=" + id;
}

function deleteProduct(id) {
  const headers = {
    "Content-Type": "application/json",
  };
  fetch("./scripts/delete.php", {
    method: "POST",
    body: JSON.stringify({
      id: id,
    }),
    header: headers,
  })
    .then((response) => response.json())
    .then(function (data) {
      if (data.status === "success") {
        Swal.fire({
          title: "Respuesta de la acción",
          text: "Producto eliminado con exito",
          icon: "success",
          confirmButtonText: "Ok",
        });
        location.reload();
      } else {
        Swal.fire({
          title: "Error",
          text: "No se pudo eliminar tu producto",
          icon: "error",
          confirmButtonText: "Ok",
        });
      }
    });
}
