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

  // Calcular la edad automáticamente cuando se seleccione la fecha de nacimiento
  $("#fecha_nacimiento").on("change", function () {
    var fechaNacimiento = $(this).val();
    if (fechaNacimiento) {
      var hoy = new Date();
      var cumpleanos = new Date(fechaNacimiento);
      var edad = hoy.getFullYear() - cumpleanos.getFullYear();
      var mes = hoy.getMonth() - cumpleanos.getMonth();
      if (mes < 0 || (mes === 0 && hoy.getDate() < cumpleanos.getDate())) {
        console.log(edad);
        edad--;
      }
      $("#edad_paciente").val(edad + " años");
    } else {
      $("#edad_paciente").val("");
    }
  });

 $("#miFormulario").on("submit", function (e) {
   e.preventDefault();

   // Obtener el valor de la fecha ingresada
   var fechaInput = $("#enFecha").val();

   // Formatear la fecha al formato "Día de la semana día de mes de año"
   var fechaFormateada = formatearFecha(fechaInput);
   // Crear una instancia de FormData
   var formData = new FormData();

   // Agregar los datos al FormData
   formData.append("contrato_no", $("#contrato_no").val());
   formData.append("enFecha", fechaFormateada); // Aquí se envía la fecha formateada
   formData.append("nombreSol", $("#nombreSol").val()); 
   formData.append("domicilioSol", $("#domicilioSol").val()); 
   formData.append("telefonoSol", $("#telefonoSol").val()); 

   formData.append("nombrePac", $("#nombrePac").val());
   formData.append("domicilioPac", $("#domicilioPac").val());
   formData.append("telefonoPac", $("#telefonoPac").val()); 


   // Realizar la solicitud AJAX para enviar los datos al backend
   $.ajax({
     url: `${location.origin}/api/guardar_contrato`,
     type: "POST",
     data: formData,
     processData: false,
     contentType: false,
     dataType: "json",
     success: function (respuesta) {
       console.log(respuesta);
       if (respuesta.status === "error") {
         respuesta.alertas.forEach(function (alerta) {
           iziToast.error({
             title: "Error",
             message: alerta,
             position: "topRight",
           });
         });
         return;
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

 // Función para formatear la fecha al formato "Día de la semana día de mes de año"
 function formatearFecha(fechaInput) {
   var diasSemana = [
     "Domingo",
     "Lunes",
     "Martes",
     "Miércoles",
     "Jueves",
     "Viernes",
     "Sabado",
   ];
   var meses = [
     "enero",
     "febrero",
     "marzo",
     "abril",
     "mayo",
     "junio",
     "julio",
     "agosto",
     "septiembre",
     "octubre",
     "noviembre",
     "diciembre",
   ];

   var fecha = new Date(fechaInput);
   var diaSemana = diasSemana[fecha.getDay()];
   var dia = fecha.getDate();
   var mes = meses[fecha.getMonth()];
   var año = fecha.getFullYear();

   var fechaFormateada = `${diaSemana} ${dia} de ${mes} del ${año}`;

   return fechaFormateada;
 }


  // Enviar el formulario al backend de gabinete
  $("#formularioEstudios").on("submit", function (e) {
    e.preventDefault();

    // Crear una instancia de FormData
    var formData = new FormData();

    // Agregar los datos del formulario a FormData
    formData.append("nombre_paciente", $("#nombre_paciente").val());
    formData.append("fecha_nacimiento", $("#fecha_nacimiento").val());
    formData.append("edad_paciente", $("#edad_paciente").val());
    formData.append("telefono_paciente", $("#telefono").val());
    formData.append("estudios", $("#estudios").val());
    formData.append("medico", $("#medico").val());
    formData.append("hora", $("#hora").val());

    // Formatear la fecha de estudios antes de agregarla a FormData
    var fechaEstudios = $("#fecha_estudios").val();
    var fechaFormateada = formatearFecha(fechaEstudios);
    formData.append("fecha_estudios", fechaFormateada);

    // Realizar la solicitud AJAX para enviar los datos al backend
    $.ajax({
      url: `${location.origin}/api/registrar_gabinete`, // Ajusta la URL a tu endpoint de guardado
      type: "POST",
      data: formData,
      processData: false, // Evitar que jQuery procese los datos
      contentType: false, // Evitar que jQuery establezca el tipo de contenido
      dataType: "json", // Especifica que la respuesta es JSON
      success: function (respuesta) {
        console.log(respuesta);
        if (respuesta.status === "error") {
          respuesta.alertas.forEach(function (alerta) {
            iziToast.error({
              title: "Error",
              message: alerta,
              position: "topRight",
            });
          });
          return;
        } else {
          iziToast.success({
            title: "Éxito",
            message: respuesta.mensaje,
            position: "topRight",
          });

          setTimeout(function () {
            $("#formularioEstudios")[0].reset();
          }, 2000);
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error("Error en la solicitud:", textStatus, errorThrown);
      },
    });
  });

  // Enviar el formulario al backend de cirugías
  $("#formularioCirugias").on("submit", function (e) {
    e.preventDefault();

    // Crear una instancia de FormData
    var formData = new FormData();

    // Agregar los datos del formulario a FormData
    formData.append("hora", $("#horaC").val());
    formData.append("paciente", $("#paciente").val());
    formData.append("empresa", $("#empresa").val());
    formData.append("quirofano1", $("#quirofano1").val());
    formData.append("lio", $("#lio").val());
    formData.append("quirofano2", $("#quirofano2").val());
    formData.append("cirujano", $("#cirujano").val());
    formData.append("ayudante", $("#ayudante").val());
    formData.append("anestesia", $("#anestesia").val());
    formData.append("anestesiologo", $("#anestesiologo").val());
    formData.append("telefono_paciente", $("#telefono_paciente").val());
    formData.append("emailPaciente", $("#emailPaciente").val());

    // Realizar la solicitud AJAX para enviar los datos al backend
    $.ajax({
      url: `${location.origin}/api/registrar_cirugia`, // Ajusta la URL a tu endpoint de guardado
      type: "POST",
      data: formData,
      processData: false, // Evitar que jQuery procese los datos
      contentType: false, // Evitar que jQuery establezca el tipo de contenido
      dataType: "json", // Especifica que la respuesta es JSON
      success: function (respuesta) {
        console.log(respuesta);
        if (respuesta.status === "error") {
          respuesta.alertas.forEach(function (alerta) {
            iziToast.error({
              title: "Error",
              message: alerta,
              position: "topRight",
            });
          });
          return;
        } else {
          iziToast.success({
            title: "Éxito",
            message: respuesta.mensaje,
            position: "topRight",
          });

          setTimeout(function () {
            $("#formularioCirugias")[0].reset();
          }, 2000);
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error("Error en la solicitud:", textStatus, errorThrown);
      },
    });
  });

   $(document).ready(function () {
     $("#abrirModalGabinete").click(function () {
       $("#modalEstudios").modal("show");
     });
   });
   $(document).ready(function () {
     $("#abrirModalCirugias").click(function () {
       $("#modalCirugias").modal("show");
     });
   });
   
});

    function formatearFecha(fecha) {
      var partes = fecha.split("-");
      return `${partes[2]}/${partes[1]}/${partes[0]}`;
    }