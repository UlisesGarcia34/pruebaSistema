
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bar-chart, .line-chart, .pie-chart {
            height: 300px;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
        }
        .card-title {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
    
</head>
<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            
            <?php include_once __DIR__ . '/../templates/dashboard-navbar.php' ?>
            <?php include_once __DIR__ . '/../templates/dashboard-sidebar.php' ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Dashboard Mira</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">Layout</a></div>
                            <div class="breadcrumb-item">Centro Oftalmológico Mira</div>
                        </div>
                    </div>

                    <div class="section-body">
                        <h2 class="section-title">Centro Oftalmológico Mira</h2>
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                            <!-- Card 1: Contador de Registros -->
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h4 class="card-title">Contador de Registros</h4>
                                    </div>
                                    <div class="card-body">
                                        <p>Total de registros hoy: <span id="contadorRegistros">0</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2: Registros por Día -->
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h4 class="card-title">Registros por Día</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="barChart" class="bar-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3: Registros por Mes -->
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h4 class="card-title">Registros por Mes</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="lineChart" class="line-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 4: Registros por Año -->
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h4 class="card-title">Registros por Año</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="pieChart" class="pie-chart"></canvas>
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

    <!-- Incluyendo Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Incluyendo Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
    <!-- Script principal -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Example data for charts
            const dailyData = [12, 19, 3, 5, 2, 3, 7];
            const monthlyData = [30, 50, 40, 60, 70, 50, 90, 100, 80, 70, 60, 50];
            const yearlyData = [200, 300, 400, 500, 600, 700];

            // Bar chart
            const ctxBar = document.getElementById('barChart').getContext('2d');
            new Chart(ctxBar, {
                type: 'bar',
                data: {
                    labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
                    datasets: [{
                        label: 'Registros por Día',
                        data: dailyData,
                        backgroundColor: 'rgba(0, 123, 255, 0.5)',
                        borderColor: 'rgba(0, 123, 255, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Line chart
            const ctxLine = document.getElementById('lineChart').getContext('2d');
            new Chart(ctxLine, {
                type: 'line',
                data: {
                    labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                    datasets: [{
                        label: 'Registros por Mes',
                        data: monthlyData,
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Pie chart
            const ctxPie = document.getElementById('pieChart').getContext('2d');
            new Chart(ctxPie, {
                type: 'pie',
                data: {
                    labels: ['2019', '2020', '2021', '2022', '2023'],
                    datasets: [{
                        label: 'Registros por Año',
                        data: yearlyData,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.5)',
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(255, 206, 86, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(153, 102, 255, 0.5)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true
                }
            });
        });
    </script>
</body>
</html>
