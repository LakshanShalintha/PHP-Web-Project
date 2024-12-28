@extends('layouts.adminNav')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar mt-2">
                <div class="d-flex flex-column">
                    <h3>Dashboard</h3>
                    <a href="#" class="active">Users</a>
                    <a href="#">Locations</a>
                    <a href="#">Accommodations</a>
                </div>
            </nav>

            <div class="col-md-1"></div>

            <!-- Main Content -->
            <main class="col-md-9 offset-md-2 main-content">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card-dash p-4">
                            <h5 class="card-title">Visited</h5>
                            <h2>2780</h2>
                            <p class="text-success">+30%</p>
                            <!-- Insert a chart here if necessary -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-dash p-4">
                            <h5 class="card-title">Top Signed</h5>
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
                    <div class="col-12">
                        <!-- Shared Background Container -->
                        <div class="p-4"
                             style="background-color: #ffffff; border-radius: 15px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                            <div class="row">
                                <!-- Reviewed Card -->
                                <div class="col-md-3">
                                    <div class="text-center p-4">
                                        <h5 class="card-title">Destinations</h5>
                                        <div class="circle-chart">
                                            <canvas id="reviewedChart"></canvas>
                                            <div class="percentage">412</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Logged Card -->
                                <div class="col-md-3">
                                    <div class="text-center p-4">
                                        <h5 class="card-title">Festivals</h5>
                                        <div class="circle-chart">
                                            <canvas id="loggedChart"></canvas>
                                            <div class="percentage">350</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Signed In Card -->
                                <div class="col-md-3">
                                    <div class="text-center p-4">
                                        <h5 class="card-title">Accommodations</h5>
                                        <div class="circle-chart">
                                            <canvas id="signedInChart"></canvas>
                                            <div class="percentage">172</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Engaged Card -->
                                <div class="col-md-3">
                                    <div class="text-center p-4">
                                        <h5 class="card-title">Documents</h5>
                                        <div class="circle-chart">
                                            <canvas id="engagedChart"></canvas>
                                            <div class="percentage">59</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

{{--                <div class="row">--}}
{{--                    <div class="col-md-3">--}}
{{--                        <div class="card-dash p-4">--}}
{{--                            <h5 class="card-title">Gender</h5>--}}
{{--                            <h1 class="card-title">Male</h1>--}}
{{--                            <div class="circle-chart">--}}
{{--                                <canvas id="maleChart"></canvas>--}}
{{--                                <div class="percentage">412</div>--}}
{{--                            </div>--}}
{{--                            <h1 class="card-title">Female</h1>--}}
{{--                            <div class="circle-chart">--}}
{{--                                <canvas id="femaleChart"></canvas>--}}
{{--                                <div class="percentage">350</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 offset-md-3">--}}
{{--                        <div class="card-dash p-4">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <h5 class="card-title">Age</h5>--}}
{{--                                    <h1 class="card-title">Under 18</h1>--}}
{{--                                    <div class="circle-chart">--}}
{{--                                        <canvas id="ageChart18"></canvas>--}}
{{--                                        <div class="percentage">172</div>--}}
{{--                                    </div>--}}
{{--                                    <h1 class="card-title">18-25</h1>--}}
{{--                                    <div class="circle-chart">--}}
{{--                                        <canvas id="ageChart18-25"></canvas>--}}
{{--                                        <div class="percentage">172</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <h1 class="card-title">25-60</h1>--}}
{{--                                    <div class="circle-chart">--}}
{{--                                        <canvas id="ageChart25-60"></canvas>--}}
{{--                                        <div class="percentage">172</div>--}}
{{--                                    </div>--}}
{{--                                    <h1 class="card-title">60+</h1>--}}
{{--                                    <div class="circle-chart">--}}
{{--                                        <canvas id="ageChart60"></canvas>--}}
{{--                                        <div class="percentage">172</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
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
                        borderWidth: 2,
                    }]
                },
                options: {
                    cutoutPercentage: 80,
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    }
                }
            });
        };

        createChart('reviewedChart', 80, '#000');
        createChart('loggedChart', 70, '#000');
        createChart('signedInChart', 35, '#000');
        createChart('engagedChart', 15, '#000');
        createChart('maleChart', 70, '#000');
        createChart('femaleChart', 60, '#000');
        createChart('ageChart18', 40, '#000');
        createChart('ageChart18-25', 40, '#000');
        createChart('ageChart25-60', 40, '#000');
        createChart('ageChart60', 40, '#000');
    </script>

@endsection
