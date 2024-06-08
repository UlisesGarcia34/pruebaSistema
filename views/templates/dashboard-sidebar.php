<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modales de Estudios</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilo personalizado para los modales -->
    <style>
        .modal-content {
            border: none;
            border-radius: 0;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .modal-header {
            border-bottom: none;
            background-color: #f8f9fa;
        }
        .modal-title {
            font-weight: bold;
            color: #333;
        }
        .modal-footer {
            border-top: none;
            background-color: #f8f9fa;
        }
        .form-control {
            border-radius: 0;
        }
        .btn-primary {
            border-radius: 0;
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-secondary {
            border-radius: 0;
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #545b62;
            border-color: #545b62;
        }
    </style>
</head>
<body>

<!-- Barra lateral -->
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="img/logoMiraBlanco.png" alt="" height="60px" width="150px">
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/dashboard">Mr</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menú</li> 
            <li class="dropdown">
                <li class="dropdown <?php echo (pagina_actual('/gen-contrato') || pagina_actual('/ver-contrato')) ? 'active' : ''; ?>">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-address-book"></i> <span>Contrato de servicios</span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php echo pagina_actual('/gen-contrato') ? 'active' : ''; ?>"><a class="nav-link" href="/gen-contrato">Generar Contrato</a></li>
                        <li class="<?php echo pagina_actual('/ver-contrato') ? 'active' : ''; ?>"><a class="nav-link" href="/ver-contrato">Consultar Contratos</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="blank.html"><i class="far fa-file"></i> <span>Hoja de consumo</span></a></li>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-history"></i> <span>Estudios De Gabinete</span></a>
                <ul class="dropdown-menu">
                    <!-- Enlace para abrir el modal de registro de estudios de gabinete -->
                    <li>
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#modalEstudios">
                        <span>Registrar</span>
                        </a>
                    </li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Consultar Registro</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-history"></i> <span>Programa de Estudios</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#modalProgramaEstudios">
                        <span>Generar programa</span>
                        </a>
                    </li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Ver Programa</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-history"></i> <span>Cirugías/Procedimientos</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#modalCirugias">
                        <span>Generar programa</span>
                        </a>
                    </li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Ver Programa</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-history"></i> <span>Lista de precios</span></a>
                <ul class="dropdown-menu">
                    <br>
                    <li><a class="nav-link" href="bootstrap-alert.html">Est. Gabinete con interpretación</a></li><br>
                    <li><a class="nav-link" href="bootstrap-badge.html">Suite Refractivas</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Procedimientos</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Varios</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>

<!-- Modal de Estudios de Gabinete -->
<div class="modal fade" id="modalEstudios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Estudio de Gabinete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
              </div>
              <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fechaNacimiento">
              </div>
              <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" placeholder="Ingrese su edad">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" placeholder="Ingrese su teléfono">
              </div>
              <div class="form-group">
                <label for="examenes">Exámenes</label>
                <input type="text" class="form-control" id="examenes" placeholder="Ingrese los exámenes">
              </div>
              <div class="form-group">
                <label for="medico">Médico</label>
                <input type="text" class="form-control" id="medico" placeholder="Ingrese el nombre del médico">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de Programa de Estudios -->
<div class="modal fade" id="modalProgramaEstudios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Generar Programa de Estudios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nombre_paciente_programa">Nombre del paciente</label>
                <input type="text" class="form-control" id="nombre_paciente_programa">
              </div>
              <div class="form-group">
                <label for="fechaInicio_programa">Fecha de Inicio</label>
                <input type="date" class="form-control" id="fechaInicio_programa">
              </div>
              <div class="form-group">
                <label for="fecha_nacimiento_programa">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fecha_nacimiento_programa">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="edad_programa">Edad</label>
                <input type="number" class="form-control" id="edad_programa">
              </div>
              <div class="form-group">
                <label for="estudio_programa">Estudio</label>
                <input type="text" class="form-control" id="estudio_programa">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal de Cirugías/Procedimientos -->
<div class="modal fade" id="modalCirugias" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Generar Programa de Cirugías/Procedimientos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" class="form-control" id="hora">
              </div>
              <div class="form-group">
                <label for="paciente">Paciente</label>
                <input type="text" class="form-control" id="paciente">
              </div>

              <div class="form-group">
                <label for="empresa">Empresa</label>
                <select class="form-control" id="empresa">
                <option value="#">--Seleccione--</option>
                  <option value="empresa1">Empresa 1</option>
                  <option value="empresa2">Empresa 2</option>
                
                </select>
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="quirofano1">Quirofano 1</label>
                <select class="form-control" id="quirofano1">
                <option value="#">--Seleccione--</option>
                  <option value="quirofano1_opcion1">Opción 1</option>
                  <option value="quirofano1_opcion2">Opción 2</option>
                  
                </select>
              </div>
              <div class="form-group">
                <label for="lio_quirofano1">Lio</label>
                <input type="text" class="form-control" id="lio_quirofano1" >
              </div>


              <div class="form-group">
                <label for="quirofano2">Quirofano 2</label>
                <select class="form-control" id="quirofano2">
                <option value="#">--Seleccione--</option>
                  <option value="quirofano2_opcion1">Opción 1</option>
                  <option value="quirofano2_opcion2">Opción 2</option>
                  
                </select>
              </div>
              <div class="form-group">
                <label for="lio_quirofano2">Lio</label>
                <input type="text" class="form-control" id="lio_quirofano2">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="cirujano">Cirujano</label>
                <select class="form-control" id="cirujano">
                <option value="#">--Seleccione--</option>
                  <option value="cirujano1">Cirujano 1</option>
                  <option value="cirujano2">Cirujano 2</option>
                  
                </select>
              </div>
              <div class="form-group">
                <label for="ayudante">Ayudante</label>
                <input type="text" class="form-control" id="ayudante">
              </div>


              <div class="form-group">
                <label for="anestesia">Anestesia</label>
                <select class="form-control" id="anestesia">
                <option value="#">--Seleccione--</option>
                  <option value="anestesia1">Anestesia 1</option>
                  <option value="anestesia2">Anestesia 2</option>
                  
                </select>
              </div>

              <div class="form-group">
                <label for="anestesiologo">Anestesiólogo</label>
                <select class="form-control" id="anestesiologo">
                <option value="#">--Seleccione--</option>
                  <option value="anestesiologo1">Anestesiólogo 1</option>
                  <option value="anestesiologo2">Anestesiólogo 2</option>
                  
                </select>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Bootstrap y jQuery JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Script adicional para cerrar el modal -->
<script>
    $(document).ready(function() {
        // Cerrar el modal cuando se haga clic en el botón "Cancelar" o fuera del modal
        $('.modal').on('hidden.bs.modal', function() {
            $(this).find('form')[0].reset(); // Restablecer el formulario
        });
    });
</script>

</body>
</html>
