    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <?php include_once __DIR__ . '/../templates/dashboard-navbar.php' ?>

            <?php include_once __DIR__ . '/../templates/dashboard-sidebar.php' ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Centro Oftalmológico Mira</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                            <div class="breadcrumb-item">Generar Contrato</div>
                        </div>
                    </div>

                    <div class="section-body">
                        <div class="card">
                            <div class="card-header">
                                <h4>Registro</h4>
                            </div>
                            <div class="card-body">
                                <form id="miFormulario">
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="enFecha">En fecha</label>
                                            <input type="date" class="form-control" id="enFecha" placeholder="Ingresar nombre completo de representado">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="contrato_no">Contrato No.</label>
                                            <input type="text" class="form-control" style="cursor: not-allowed;" id="contrato_no" name="contrato_no" readonly>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Datos del solicitante del servicio</h4>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="nombreSol">Nombre</label>
                                                    <input type="text" class="form-control" id="nombreSol" placeholder="Ingresar nombre ">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="domicilioSol">Domicilio</label>
                                                    <input type="text" class="form-control" id="domicilioSol" placeholder="Ingresar domicilio ">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="telefonoSol">Telefono</label>
                                                    <input type="number" class="form-control" id="telefonoSol" placeholder="Ingresar telefono">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Datos del paciente</h4>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="nombrePac">Nombre</label>
                                                    <input type="text" class="form-control" id="nombrePac" placeholder="Ingresar nombre del paciente">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="domicilioPac">Domicilio</label>
                                                    <input type="text" class="form-control" id="domicilioPac" placeholder="Ingresar domicilio del paciente ">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="telefonoPac">Telefono</label>
                                                    <input type="number" class="form-control" id="telefonoPac" placeholder="Ingresar telefono del paciente">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" type="submit">Guardar Contrato</button>
                            </div>
                            </form>
                        </div>



                    </div>
                </section>
            </div>

            <?php include_once __DIR__ . '/../templates/dashboard-footer.php' ?>
        </div>
    </div>