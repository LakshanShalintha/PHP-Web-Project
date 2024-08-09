@extends('layouts.adminNav')
@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>

            body {
                background-color: #f5f5f5;
            }

            .sidebar {
                height: 100%;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                position: absolute; /* or fixed depending on your layout */
                top: 0;
                bottom: 0;
            }


            .sidebar a {
                color: #000;
                text-decoration: none;
                display: block;
                margin-bottom: 15px;
                padding: 10px;
                border-radius: 8px;
            }

            .sidebar a:hover,
            .sidebar a.active {
                background-color: #000;
                color: #fff;
            }

            .main-content {
                padding: 20px;
            }

            .card {
                border-radius: 20px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            }

            .card-title {
                font-weight: bold;
            }

            .circle-chart {
                position: relative;
                margin: 20px 0;
            }

            .circle-chart:before {
                content: "";
                display: block;
                padding-top: 100%;
            }

            .circle-chart canvas {
                position: absolute;
                top: 0;
                left: 0;
            }

            .percentage {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-weight: bold;
                font-size: 24px;
            }

        </style>
    </head>

    <body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="d-flex flex-column">
                    <h3>Dashboard</h3>
                    <a href="#" class="active">Users</a>
                    <a href="#">Locations</a>
                    <a href="#">Accommodations</a>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-10 ms-sm-auto px-md-4 main-content">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card p-4">
                            <h5 class="card-title">Visited</h5>
                            <h2>2780</h2>
                            <p class="text-success">+30%</p>
                            <!-- Insert a chart here if necessary -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-4">
                            <h5 class="card-title">Top Singed</h5>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>New Users</th>
                                    <th>Rate</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>USA</td>
                                    <td>670</td>
                                    <td class="text-success">+21%</td>
                                </tr>
                                <tr>
                                    <td>India</td>
                                    <td>522</td>
                                    <td class="text-success">+32%</td>
                                </tr>
                                <tr>
                                    <td>China</td>
                                    <td>320</td>
                                    <td class="text-danger">-1%</td>
                                </tr>
                                <tr>
                                    <td>Sri Lanka</td>
                                    <td>311</td>
                                    <td class="text-success">+28%</td>
                                </tr>
                                <tr>
                                    <td>Korea</td>
                                    <td>200</td>
                                    <td class="text-danger">-9%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card p-4">
                            <h5 class="card-title">Reviewed</h5>
                            <div class="circle-chart">
                                <canvas id="reviewedChart"></canvas>
                                <div class="percentage">412</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-4">
                            <h5 class="card-title">Logged</h5>
                            <div class="circle-chart">
                                <canvas id="loggedChart"></canvas>
                                <div class="percentage">350</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-4">
                            <h5 class="card-title">Singed In</h5>
                            <div class="circle-chart">
                                <canvas id="singedInChart"></canvas>
                                <div class="percentage">172</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-4">
                            <h5 class="card-title">Engaged</h5>
                            <div class="circle-chart">
                                <canvas id="engagedChart"></canvas>
                                <div class="percentage">59</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-4">
                            <h5 class="card-title">Gender</h5>
                            <h1 class="card-title">Male</h1>
                            <div class="circle-chart">
                                <canvas id="maleChart"></canvas>
                                <div class="percentage">412</div>
                            </div>
                            <h1 class="card-title">Female</h1>
                            <div class="circle-chart">
                                <canvas id="femaleChart"></canvas>
                                <div class="percentage">350</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3"></div>
                    <div class="col-md-6">
                        <div class="card p-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Age</h5>
                                    <h1 class="card-title">Under 18</h1>
                                    <div class="circle-chart">
                                        <canvas id="ageChart18"></canvas>
                                        <div class="percentage">172</div>
                                    </div>
                                    <h1 class="card-title">Under 18</h1>
                                    <div class="circle-chart">
                                        <canvas id="ageChart18-25"></canvas>
                                        <div class="percentage">172</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title"> '</h5>
                                    <h1 class="card-title">Under 18</h1>
                                    <div class="circle-chart">
                                        <canvas id="ageChart25-60"></canvas>
                                        <div class="percentage">172</div>
                                    </div>
                                    <h1 class="card-title">Under 18</h1>
                                    <div class="circle-chart">
                                        <canvas id="ageChart60"></canvas>
                                        <div class="percentage">172</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const createChart = (id, data, color) => {
            const ctx = document.getElementById(id).getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [data, 100 - data],
                        backgroundColor: [color, '#e0e0e0'],
                        borderWidth: 0,
                    }]
                },
                options: {
                    cutout: '80%',
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        };

        createChart('reviewedChart', 80, '#000');
        createChart('loggedChart', 70, '#000');
        createChart('singedInChart', 35, '#000');
        createChart('engagedChart', 15, '#000');
        createChart('maleChart', 70, '#000');
        createChart('femaleChart', 60, '#000');
        createChart('ageChart18', 40, '#000');
        createChart('ageChart18-25', 40, '#000');
        createChart('ageChart25-60', 40, '#000');
        createChart('ageChart60', 40, '#000');

    </script>
    </body>

@endsection
