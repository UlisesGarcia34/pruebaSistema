<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> -->



<!-- Modal de Estudios de Gabinete -->
<div class="modal fade" id="modalCirugias" tabindex="-1" aria-labelledby="modalcirugiasLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCirugiasLabel">Programación de Cirugias y Procesos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="closeModalCirugias"></button>
            </div>
            <div class="modal-body">
                <form id="formularioCirugias" novalidate>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hora">Hora</label>
                                <input type="time" class="form-control" id="horaC" name="hora" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="paciente">Nombre del Paciente</label>
                                <input type="text" class="form-control" id="paciente" name="paciente">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="empresa">Empresa</label>
                                <input type="text" class="form-control" id="empresa" name="empresa">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quirofano1">Quirófano1</label>
                                <input type="text" class="form-control" id="quirofano1" name="quirofano1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="lio">Lio</label>
                                <input type="text" class="form-control" id="lio" name="lio">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quirofano2">Quirofano2</label>
                                <input type="text" class="form-control" id="quirofano2" name="quirofano2">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ayudante">Ayudante</label>
                                <input type="text" class="form-control" id="ayudante" name="ayudante">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="anestesia">Anestesia</label>
                                <input type="text" class="form-control" id="anestesia" name="anestesia">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="anestesiologo">Anestesiologo</label>
                                <input type="text" class="form-control" id="anestesiologo" name="anestesiologo">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="telefono_paciente">Teléfono del Paciente</label>
                                <input type="number" class="form-control" id="telefono_paciente" name="telefono_paciente">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emailPaciente">Correo Electrónico</label>
                                <input type="email" class="form-control" id="emailPaciente" name="emailPaciente">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emailPaciente">Cirujano</label>
                                <input type="text" class="form-control" id="cirujano" name="cirujano">
                            </div>
                        </div>

                    </div>
                    <input type="submit" class="btn btn-primary mt-3" value="Guardar" id="btnEnviar">
                    <input type="hidden" name="enviar">
                </form>
            </div>
        </div>
    </div>
</div>