$(document).ready(function () {
  // Hacer una solicitud AJAX para obtener el número de contrato al cargar la página
  $.ajax({
    url: `${location.origin}/api/contrato`, // Ajusta la URL a tu endpoint PHP
    type: "GET",
    dataType: "json", // Especifica que la respuesta es JSON
    success: function (respuesta) {
      if (respuesta.error) {
        iziToast.error({
          title: "Error",
          message: respuesta.error,
          position: "topRight",
        });
      } else {
        // Asignar el valor del número de contrato al input
        $("#contrato_no").val(respuesta.numeroContrato);
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.error("Error en la solicitud:", textStatus, errorThrown);
    },
  });

  // Enviar el formulario al backend
  $("#miFormulario").on("submit", function (e) {
    e.preventDefault();

    // Crear una instancia de FormData
    var formData = new FormData();

    // Agregar el número de contrato a FormData
    formData.append("contrato_no", $("#contrato_no").val());
    formData.append("representado", $("#representado").val());
    formData.append("escritura_no", $("#escritura_no").val());

    // Realizar la solicitud AJAX para enviar los datos al backend
    $.ajax({
      url: `${location.origin}/api/guardar_contrato`, // Ajusta la URL a tu endpoint de guardado
      type: "POST",
      data: formData,
      processData: false, // Evitar que jQuery procese los datos
      contentType: false, // Evitar que jQuery establezca el tipo de contenido
      dataType: "json", // Especifica que la respuesta es JSON
      success: function (respuesta) {
        console.log( respuesta )
         if (respuesta.status === "error") {
           respuesta.alertas.forEach(function (alerta) {
             iziToast.error({
               title: "Error",
               message: alerta,
               position: "topRight",
             });
           });
           return
         } else {
           iziToast.success({
             title: "Éxito",
             message: respuesta.mensaje,
             position: "topRight",
           });
         }

        setTimeout(function () {
          location.reload();
        }, 2000);
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error("Error en la solicitud:", textStatus, errorThrown);
      },
    });
  });

});

 
