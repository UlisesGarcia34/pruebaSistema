$(document).ready(function () {
    var table = $("#tabla_quirofano").DataTable({
      ajax: {
        url: `${location.origin}/api/consultar_cirugias`, // URL de tu API para leer los datos
        type: "GET", // Tipo de método HTTP
        dataType: "json", // Especificar que los datos son JSON
        success: function (data) {
          // Procesar los datos y actualizar la tabla
          $("#tabla_quirofano").DataTable().clear().rows.add(data).draw();
        },
        error: function (xhr, status, error) {
          console.error("Error al cargar los datos: " + error);
        },
      },
      columns: [
        { data: "id" },
        { data: "hora" },
        { data: "paciente" },
        { data: "empresa" },
        { data: "quirofano1" },
        { data: "lio" },
        { data: "quirofano2" },
        { data: "cirujano" },
        { data: "ayudante" },
        { data: "anestesia" },
        { data: "anestesiologo" },
        { data: "telefono_paciente" },
        { data: "emailPaciente" },
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
    });
  
    
  });
  
  // // Función para abrir el PDF en otra ventana
  // function openPdf(pdfUrl) {
  //   window.open(pdfUrl, "_blank");
  // }
  