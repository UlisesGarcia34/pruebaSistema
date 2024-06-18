// $(document).ready(function () {
//   var table = $("#tablaContratos").DataTable({
//     ajax: {
//       url: `${location.origin}/api/contratos`, // URL de tu API para leer los datos
//       type: "GET", // Tipo de método HTTP
//       dataType: "json", // Especificar que los datos son JSON
//       success: function (data) {
//         // Procesar los datos y actualizar la tabla
//         $("#tablaContratos").DataTable().clear().rows.add(data).draw();
//       },
//       error: function (xhr, status, error) {
//         console.error("Error al cargar los datos: " + error);
//       },
//     },
//     columns: [
//       { data: "id" },
//       { data: "contrato_no" },
//       { data: "enFecha" },
//       {
//         data: "pdf",
//         render: function (data, type, row, meta) {
//           return `<button class="btn btn-primary" onclick="openPdf('${data}')">Ver PDF</button>`;
//         },
//       },
//     ],
//     language: {
//       url: "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json",
//       emptyTable: "No se encontró información",
//       info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
//       infoEmpty: "Mostrando 0 a 0 de 0 registros",
//       infoFiltered: "(filtrado de _MAX_ registros totales)",
//       lengthMenu: "Mostrar _MENU_ registros",
//       loadingRecords: "Cargando...",
//       processing: "Procesando...",
//       search: "Buscar:",
//       zeroRecords: "No se encontraron registros coincidentes",
//       paginate: {
//         first: "Primero",
//         last: "Último",
//         next: "Siguiente",
//         previous: "Anterior",
//       },
//     },
//   });


 
  
// });



//   // Función para abrir el PDF en otra ventana
//   function openPdf(pdfUrl) {
//     window.open(pdfUrl, "_blank");
//   }

$(document).ready(function () {
  var table = $("#tablaContratos").DataTable({
    ajax: {
      url: `${location.origin}/api/contratos`, // URL de tu API para leer los datos
      type: "GET", // Tipo de método HTTP
      dataType: "json", // Especificar que los datos son JSON
      success: function (data) {
        // Procesar los datos y actualizar la tabla
        $("#tablaContratos").DataTable().clear().rows.add(data).draw();
      },
      error: function (xhr, status, error) {
        console.error("Error al cargar los datos: " + error);
      },
    },
    columns: [
      { data: "id" },
      { data: "contrato_no" },
      { data: "enFecha" },
      {
        // Columna de acciones
        data: null,
        render: function (data, type, row, meta) {
          var acciones = `<button class="btn btn-primary mr-2" onclick="openPdf('${row.pdf}')">Ver PDF</button>`;
          acciones += `<button class="btn btn-danger" onclick="confirmarEliminar(${row.id})">Eliminar Contrato</button>`;
          return acciones;
        },
      },
    ],
    language: {
      url: "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json",
      emptyTable: "No se encontró información",
      info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
      infoEmpty: "Mostrando 0 a 0 de 0 registros",
      infoFiltered: "(filtrado de _MAX_ registros totales)",
      lengthMenu: "Mostrar _MENU_ registros",
      loadingRecords: "Cargando...",
      processing: "Procesando...",
      search: "Buscar:",
      zeroRecords: "No se encontraron registros coincidentes",
      paginate: {
        first: "Primero",
        last: "Último",
        next: "Siguiente",
        previous: "Anterior",
      },
    },
    responsive: true,
    ordering: false
  });

 
});

 // Función para abrir el PDF en otra ventana
  function openPdf(pdfUrl) {
    window.open(pdfUrl, "_blank");
  }

  // Función para confirmar la eliminación usando SweetAlert
  function confirmarEliminar(idContrato) {
    Swal.fire({
      title: "¿Estás seguro?",
      text: "Una vez eliminado, no podrás recuperar este contrato.",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Sí, eliminarlo",
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.isConfirmed) {
        // Enviar la solicitud para eliminar el contrato
        eliminarContrato(idContrato);
      }
    });
  }

  // Función para eliminar contrato
  function eliminarContrato(idContrato) {
    $.ajax({
      url: `${location.origin}/api/eliminar_contrato`, // URL del endpoint para eliminar el contrato
      type: "POST", // Método HTTP POST para enviar los datos
      dataType: "json",
      data: { id: idContrato }, // Datos a enviar en la solicitud
      success: function (respuesta) {
        
        if (respuesta.status === "success") {
          // Actualizar la tabla después de eliminar
          $("#tablaContratos").DataTable().ajax.reload(); // Recargar los datos de la tabla
          // Mostrar mensaje de éxito con SweetAlert
          iziToast.success({
            title: "Éxito",
            message: respuesta.mensaje,
            position: "topRight",
          });
        }
      
      
        
      },
      error: function (xhr, status, error) {
        console.error("Error al eliminar el contrato:", error);
        // Mostrar mensaje de error con SweetAlert
        Swal.fire({
          title: "Error",
          text: "Hubo un problema al intentar eliminar el contrato, reporta este error al area correspondiente.",
          icon: "error",
        });
      },
    });
  }

