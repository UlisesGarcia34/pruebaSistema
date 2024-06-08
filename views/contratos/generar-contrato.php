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
                            <form id="miFormulario" >
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="text">Representado</label>
                                        <input type="text" class="form-control" id="representado" placeholder="Ingresar nombre completo de representado">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="contrato_no">Contrato No.</label>
                                        <input type="text" class="form-control" style="cursor: not-allowed;" id="contrato_no" name="contrato_no" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="escritura_no">Escritura publica No. </label>
                                    <input type="text" class="form-control" id="escritura_no" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="de_fecha">De fecha</label>
                                    <input type="text" class="form-control" id="de_fecha" placeholder="">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exhibida">Exhibida ante la fe del(a) Lic. </label>
                                        <input type="text" class="form-control" id="exhibida">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="notario_no">Notario publico No.</label>
                                        <input type="text" class="form-control" id="notario_no">
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