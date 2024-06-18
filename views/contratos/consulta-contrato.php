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
                            <div class="breadcrumb-item">Consultar Contrato</div>
                        </div>
                    </div>

                    <div class="section-body">
                        <h2 class="section-title">Listado de contratos</h2>


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Contratos</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="tablaContratos">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            #
                                                        </th>
                                                        <th>Contrato no.</th>
                                                        <th>En fecha</th>
                                                        <th>Acciones</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>

            <?php include_once __DIR__ . '/../templates/dashboard-footer.php' ?>
        </div>
    </div>

  