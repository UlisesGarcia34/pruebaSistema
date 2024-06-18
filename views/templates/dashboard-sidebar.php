
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> 





<!-- Barra lateral -->
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/dashboard">
                <img src="img/logoMiraBlanco.png" alt="" height="60px" width="150px">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/dashboard">Mr</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menú</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-address-book"></i> <span>Contrato de servicios</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/gen-contrato">Generar Contrato</a></li>
                    <li><a class="nav-link" href="/ver-contrato">Consultar Contratos</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-file"></i> <span>Hoja de consumo</span></a></li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-history"></i> <span>Estudios Gabinete</span></a>
                <ul class="dropdown-menu">
                    <!-- Enlace para abrir el modal de registro de estudios de gabinete -->
                    <li>
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalEstudios" id="abrirModalGabinete">
                            <span>Registrar</span>
                        </a>
                    </li>
                    <li><a class="nav-link" href="/consultar-gabinete">Consultar Agenda</a></li>
                    <li><a class="nav-link" href="/consultar-gabinete">Programa de Estudios</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-history"></i> <span>Programa Cirugìas</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalCirugias" id="abrirModalCirugias">
                            <span>programar Cirugía</span>
                        </a>
                    </li>
                    <li><a class="nav-link" href="/consultar-cirugias">Ver Programación</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-history"></i> <span>Lista de precios</span></a>
                <ul class="dropdown-menu">
                    <br>
                    <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#programaPrecios">Est. Gabinete con interpretación</a></li><br>
                    <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#programaRefractivas">Suite Refractivas</a></li><br>
                    <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#programaProcedimientos">Procedimientos</a></li><br>
                    <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#programaVarios">Varios</a></li><br>
                </ul>
            </li>
        </ul>
    </aside>
</div>


<?php include_once __DIR__ . '/../modales/modalGabinete.php' ?>

<!-- Modal para programa de estudios -->
<div class="modal fade" id="programaEstudios" tabindex="-1" aria-labelledby="programaEstudiosLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="programaEstudiosLabel">Programa de Estudios</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenido del modal aquí -->
            </div>
        </div>
    </div>
</div>

<?php include_once __DIR__ . '/../modales/modalCirugias.php' ?>

<!-- Modal para programa de estudios -->
<div class="modal fade" id="programaCirugias" tabindex="-1" aria-labelledby="programaCirugiasLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="programaCirugiasLabel">Programación de Cirugias y Procesos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenido del modal aquí -->
            </div>
        </div>
    </div>
</div>

<?php include_once __DIR__ . '/../modales/modalPresios.php' ?>

<?php include_once __DIR__ . '/../modales/modalRefractivas.php' ?>

<?php include_once __DIR__ . '/../modales/modalProcedimientos.php' ?>

<?php include_once __DIR__ . '/../modales/modalVarios.php' ?>




</body>

</html>