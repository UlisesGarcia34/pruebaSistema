$(document).ready(function () {
  // Cuando se cambie la fecha de estudios
  $("#fecha_estudios").on("change", function () {
    var fechaEstudios = $(this).val();

    if (fechaEstudios) {
      var fechaFormateada = formatearFecha(fechaEstudios);
      $.ajax({
        url: `${location.origin}/api/horas_ocupadas`, // Ajusta la URL a tu endpoint
        type: "GET",
        data: { fecha_estudios: fechaFormateada },
        dataType: "json",
        success: function (respuesta) {
          if (respuesta.horas_ocupadas) {
            var horasOcupadas = respuesta.horas_ocupadas;
            actualizarSelectHoras(horasOcupadas);
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.error("Error en la solicitud:", textStatus, errorThrown);
        },
      });
    }
  });

  // Función para formatear la fecha de yyyy-mm-dd a dd/mm/yyyy
  function formatearFecha(fecha) {
    var partes = fecha.split("-");
    return `${partes[2]}/${partes[1]}/${partes[0]}`;
  }
  // Función para actualizar el select de horas
  function actualizarSelectHoras(horasOcupadas) {
    var selectHora = $("#horaDisponible");
    selectHora.empty();

    // Hacer una solicitud para obtener todas las horas disponibles en la tabla "horarios"
    $.ajax({
      url: `${location.origin}/api/horarios`, // Ajusta la URL a tu endpoint para obtener todas las horas
      type: "GET",
      dataType: "json",
      success: function (respuesta) {
        if (respuesta.horas) {
          var horasDisponibles = respuesta.horas;

          // Filtrar las horas ocupadas
          var horasFiltradas = horasDisponibles.filter(
            (hora) => !horasOcupadas.includes(hora.id)
          );

          // Añadir las horas filtradas al select
          horasFiltradas.forEach((hora) => {
            selectHora.append(new Option(hora.hora, hora.id));
          });
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error("Error en la solicitud:", textStatus, errorThrown);
      },
    });
  }
});
