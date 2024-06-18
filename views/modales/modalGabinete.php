<!-- Modal de Estudios de Gabinete -->

<div class="modal fade" id="modalEstudios" tabindex="-1" aria-labelledby="modalEstudiosLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEstudiosLabel">Estudios de Gabinete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formularioEstudios" novalidate>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre_paciente">Nombre y Apellido</label>
                                <input type="text" class="form-control" id="nombre_paciente" name="nombre_paciente" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="edad">Edad del paciente</label>
                                <input type="text" class="form-control" id="edad_paciente" name="edad_paciente" readonly style="cursor: not-allowed;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="telefono">Número de Teléfono</label>
                                <input type="number" class="form-control" id="telefono" name="telefono" maxlength="10" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="estudios">Estudios</label>
                                <select name="estudios" id="estudios" class="form-control">
                                <option value="#">-- Seleccione --</option>
                                    <option value="AUTOFLUORESCENCIA">AUTOFLUORESCENCIA</option>
                                    <option value="AUTOFLUORESCENCIA Y OCT">AUTOFLUORESCENCIA Y OCT</option>
                                    <option value="CAL DE LENTE INT INMERSIÓN">CAL DE LENTE INT INMERSIÓN</option>
                                    <option value="CAL DE LENTE INT MASTER">CAL DE LENTE INT MASTER</option>
                                    <option value="CAMPOS VISUALES">CAMPOS VISUALES</option>
                                    <option value="FLUORANGIOGRAFÍA">FLUORANGIOGRAFÍA</option>
                                    <option value="MICROSCOPÍA ESPECULAR">MICROSCOPÍA ESPECULAR / CEL ENDOTELIALES</option>
                                    <option value="OCT MACULAR">OCT MACULAR</option>
                                    <option value=">OCT NERVIO OPTICO">OCT NERVIO OPTICO</option>
                                    <option value="OCT SEGMENTO ANTERIOR">OCT SEGMENTO ANTERIOR</option>
                                    <option value="OCT MACULAR Y OCT NERVIO OPT">OCT MACULAR Y OCT NERVIO OPT</option>
                                    <option value="PAQUIMETRÍA">PAQUIMETRÍA</option>
                                    <option value="PENTACAM (REF / QUERATOCONO)">PENTACAM (REF / QUERATOCONO)</option>
                                    <option value="TRES OCT(TRI SPECTRALIS)">TRES OCT(TRI SPECTRALIS)</option>
                                    <option value="ULTRASONIDO MODO AB / ECOGRAFÍA">ULTRASONIDO MODO AB / ECOGRAFÍA</option>
                                    <option value="SUITE GLOUCOMA">SUITE GLOUCOMA</option>
                                    <option value="SUITE REFRACTIVO">SUITE REFRACTIVO</option>
                                    <option value="SUITE RETINA">SUITE RETINA</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="medico">Médico</label>
                                <select name="medico" id="medico" class="form-control">
                                <option value="">-- Seleccione --</option>
                                    <option value="DR. LOZANO ALCAZAR JAIME">Dr. Lozano Alcazar Jaime</option>
                                    <option value="DR. CELIS SUAZO BENITO">Dr. Celis Suazo Benito</option>
                                    <option value="DRA. BETECH HANNO MIRIAM">Dra. Betech Hannoo Miriam</option>
                                    <option value="DRA. DOMINGUEZ DUEÑAS FRANCISCA">Dra. Dominguez Dueñas Francisca</option>
                                    <option value="DRA. ARROYO MUÑOZ LAURA LETICIA">Dr. Arroyo Muñoz Laura Leticia</option>
                                    <option value="DRA. GALICIA CASTILLO BLANCA ADRIANA">Dra. Galicia Castillo Blanca Adriana</option>
                                    <option value="DR. GERRERO BERGER OSCAR">Dr. Guerrero Berger Oscar</option>
                                    <option value="DR. RAMIRÉZ ESTUDILLO JUAN ABEL">Dr. Ramiréz Estudillo Juan Abel</option>
                                    <option value="DR. GARCÍA ARROLLO SANTIAGO">Dr. García Arrollo Santiago</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="fecha_estudios">Fecha de estudios</label>
                                <input type="date" class="form-control" id="fecha_estudios" name="fecha_estudios">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Horas disponibles</label>
                                <select id="horaDisponible" class="form-control form-control-sm">
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary mt-3" value="Enviar" id="btnEnviar">
                    <input type="hidden" name="enviar">
                </form>
            </div>
        </div>
    </div>
</div>



</body>

</html>