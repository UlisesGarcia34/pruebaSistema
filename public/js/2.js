$(document).ready(function () {
  var table = $("#example").DataTable({
    ajax: {
      url: `${location.origin}/api/contratos`, // URL de tu API para leer los datos
      type: "GET", // Tipo de método HTTP
      dataType: "json", // Especificar que los datos son JSON
      success: function (data) {
        // Procesar los datos y actualizar la tabla
        $("#example").DataTable().clear().rows.add(data).draw();
      },
      error: function (xhr, status, error) {
        console.error("Error al cargar los datos: " + error);
      },
    },
    columns: [
      { data: "id" },
      { data: "contrato_no" },
      { data: "representado" },
      {
        data: "pdf",
        render: function (data, type, row, meta) {
          return `<button class="btn btn-primary" onclick="openPdf('${data}')">Ver PDF</button>`;
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
  });


  // Recargar DataTable cada 30 segundos (30000 milisegundos)
  setInterval(function () {
    table.ajax.reload(null, false); // false para mantener el estado actual de la tabla
  }, 5000); // Ajusta el intervalo según sea necesario
});



  // Función para abrir el PDF en otra ventana
  function openPdf(pdfUrl) {
    window.open(pdfUrl, "_blank");
  }