@extends('backend.layouts.app')
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="bg-primary pt-10 pb-21"></div>
                    <div class="mt-n22 px-6 container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mb-3 mb-lg-1">
                                            <h3 class="mb-2"></h3>
                                        </div>
                                        <div>
                                            <a class="btn btn-white" href="/#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 col-xl-3 col-lg-6 col-md-12 col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div>
                                                <h4 class="mb-0">Users </h4>
                                            </div>
                                            <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18"
                                                    height="18" fill="currentColor">
                                                    <path
                                                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <h1> {{ $totalUsers }} </h1>
                                            <p class="mb-0">
                                                <a href="backend.interns.index" class="small-box-footer">More info <i
                                                        class="fas fa-arrow-circle-right"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 col-xl-3 col-lg-6 col-md-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div>
                                                <h4 class="mb-0">Companies </h4>
                                            </div>
                                            <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                                    <path
                                                        d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                                                    <path
                                                        d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div>

                                            <h1 class="fw-bold">{{ $totalCompany }} </h1>
                                            <p class="mb-0">
                                                <a href="backend.companies.index" class="small-box-footer">More info <i
                                                        class="fas fa-arrow-circle-right"></i></a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="mt-6 col-xl-3 col-lg-6 col-md-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div>
                                                <h4 class="mb-0"> Com Supervisors</h4>
                                            </div>
                                            <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18"
                                                    height="18" fill="currentColor">
                                                    <path
                                                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <h1 class="fw-bold">{{ $totalCompanySupervisor }}</h1>
                                            <p class="mb-0">
                                                <a href="backend.company-supervisors.index" class="small-box-footer">More
                                                    info <i class="fas fa-arrow-circle-right"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="mt-6 col-xl-3 col-lg-6 col-md-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div>
                                                <h4 class="mb-0">Universities</h4>
                                            </div>
                                            <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                                {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18"
                                                    height="18" fill="currentColor">
                                                    <path
                                                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                                    </path>
                                                </svg> --}}
                                                <i class="nav-icon fas fa-university"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h1 class="fw-bold">{{ $totalUniversity }}</h1>
                                            <p class="mb-0">
                                                <a href="backend.universities.index" class="small-box-footer">More info <i
                                                        class="fas fa-arrow-circle-right"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="mt-6 col-xl-3 col-lg-6 col-md-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div>
                                                <h4 class="mb-0"> Uni Supervisors</h4>
                                            </div>
                                            <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18"
                                                    height="18" fill="currentColor">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                    </path>
                                                    <path
                                                        d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                                    </path>
                                                    <path
                                                        d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z">
                                                    </path>
                                                    <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <h1 class="fw-bold">{{ $totalUniSupervisor }}</h1>
                                            <p class="mb-0">
                                                <a href="backend.university-supervisors.index" class="small-box-footer">More
                                                    info <i class="fas fa-arrow-circle-right"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="mt-6 col-xl-3 col-lg-6 col-md-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div>
                                                <h4 class="mb-0"> Intern Reports</h4>
                                            </div>
                                            <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    width="18" height="18" fill="currentColor">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                    </path>
                                                    <path
                                                        d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                                    </path>
                                                    <path
                                                        d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z">
                                                    </path>
                                                    <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <h1 class="fw-bold">{{ $totalInternReports }}</h1>
                                            <p class="mb-0">
                                                <a href="backend.intern-reports.index" class="small-box-footer">More info
                                                    <i class="fas fa-arrow-circle-right"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            {{--
                            <div class="mt-6 col-xl-3 col-lg-6 col-md-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div>
                                                <h4 class="mb-0">Evaluations</h4>
                                            </div>
                                            <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    width="18" height="18" fill="currentColor">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                    </path>
                                                    <path
                                                        d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                                    </path>
                                                    <path
                                                        d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z">
                                                    </path>
                                                    <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <h1 class="fw-bold">{{ $totalEvaluations }}</h1>
                                            <p class="mb-0">
                                                <a href="backend.evaluations.index" class="small-box-footer">More info <i
                                                        class="fas fa-arrow-circle-right"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> --}}






                            <div class="row">
                                <!-- Left col -->
                                <div class="col-md-6 connectedSortable ui-sortable">
                                    <!-- Custom tabs (Charts with tabs)-->
                                    <section class="card">
                                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                                            <h3 class="card-title">
                                                <i class="fas fa-chart-pie mr-1"></i>
                                                Sales
                                            </h3>
                                            <div class="card-tools">
                                                <ul class="nav nav-pills ml-auto">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#revenue-chart"
                                                            data-toggle="tab">Area</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="tab-content p-0">
                                                <!-- Morris chart - Sales -->
                                                <div class="chart tab-pane active" id="revenue-chart"
                                                    style="position: relative; height: 300px;">
                                                    <div class="chartjs-size-monitor">
                                                        <div class="chartjs-size-monitor-expand">
                                                            <div class=""></div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink">
                                                            <div class=""></div>
                                                        </div>
                                                    </div>
                                                    <canvas id="revenue-chart-canvas" height="386"
                                                        style="height: 300px; display: block; width: 587px;" width="755"
                                                        class="chartjs-render-monitor"></canvas>
                                                </div>
                                                <div class="chart tab-pane" id="sales-chart"
                                                    style="position: relative; height: 300px;">
                                                    <canvas id="sales-chart-canvas" height="0"
                                                        style="height: 0px; display: block; width: 0px;" width="0"
                                                        class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </div>
                                        </div><!-- /.card-body -->
                                    </section>
                                </div>
                                {{-- </section> --}}
                                {{-- <section class="col-md-6 connectedSortable ui-sortable"> --}}
                                <div class="col-md-6">
                                    <div class="card card">
                                        <div class="card-header">
                                            <h3 class="card-title">Bar Chart</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div>
                                                <canvas id="barChart"
                                                    style="min-height: 305px; height: 305px; max-height: 305px; max-width: 100%; display: block; width: 587px;"
                                                    width="755" height="300"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    {{-- </section> --}}


                                    <!-- /.card -->
                                </div><!-- row -->

        </div>


        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    </div>
    <!-- /.col (RIGHT) -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>

@endsection
@section('script')
    <script>
        $(function() {

            /* Chart.js Charts */
            // Sales chart
            var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d')
            // $('#revenue-chart').get(0).getContext('2d');

            var salesChartData = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                        label: 'Digital Goods',
                        backgroundColor: 'rgba(60,141,188,0.9)',
                        borderColor: 'rgba(60,141,188,0.8)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [28, 48, 40, 19, 86, 27, 90]
                    },
                    {
                        label: 'Electronics',
                        backgroundColor: 'rgba(210, 214, 222, 1)',
                        borderColor: 'rgba(210, 214, 222, 1)',
                        pointRadius: false,
                        pointColor: 'rgba(210, 214, 222, 1)',
                        pointStrokeColor: '#c1c7d1',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data: [65, 59, 80, 81, 56, 55, 40]
                    }
                ]
            }

            var salesChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: false
                        }
                    }]
                }
            }

            // This will get the first returned node in the jQuery collection.
            // eslint-disable-next-line no-unused-vars
            var salesChart = new Chart(salesChartCanvas, { // lgtm[js/unused-local-variable]
                type: 'line',
                data: salesChartData,
                options: salesChartOptions
            })

            // Donut Chart
            var pieChartCanvas = $('#sales-chart-canvas').get(0).getContext('2d')
            var pieData = {
                labels: [
                    'Instore Sales',
                    'Download Sales',
                    'Mail-Order Sales'
                ],
                datasets: [{
                    data: [30, 12, 20],
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12']
                }]
            }
            var pieOptions = {
                legend: {
                    display: false
                },
                maintainAspectRatio: false,
                responsive: true
            }
            // Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            // eslint-disable-next-line no-unused-vars
            var pieChart = new Chart(pieChartCanvas, { // lgtm[js/unused-local-variable]
                type: 'doughnut',
                data: pieData,
                options: pieOptions
            })


        });
    </script>
@endsection

@section('script')
    <script>
        $(function() {
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChartData = $.extend(true, {}, areaChartData)
            var temp0 = areaChartData.datasets[0]
            var temp1 = areaChartData.datasets[1]
            barChartData.datasets[0] = temp1
            barChartData.datasets[1] = temp0

            var barChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                datasetFill: false
            }

            new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })
        });
    </script>
@endsection

{{-- @section('javascript')
    <script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
    var totalMale = {{ Js::from($totalMale) }};
    var totalFemale = {{ Js::from($totalFemale) }};

    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Number of interns in IRS',
            align: 'left'
        },
        xAxis: {
            categories: ['Male and Female List'],
            crosshair: true,
            accessibility: {
                description: 'IRS'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Number of interns'
            }
        },
        tooltip: {
            valueSuffix: ' interns'
        },
        plotOptions: {
            column: {
                pointPadding: 0.4,
                borderWidth: 0
            }
        },
        series: [{
                name: 'Male',
                data: [totalMale]
            },
            {
                name: 'Female',
                data: [totalFemale]
            }
        ]
    });
</script> --}}



@section('script')
    <script type="text/javascript">
        $(document).ready(function() {

        })
    </script>
@endsection
