<main id="main" class="main">

    <div class="pagetitle">
        <h1>Blank Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Blank</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Bar Chart</h5>
                        <!-- Bar Chart -->
                        <div id="barChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#barChart")).setOption({
                                    xAxis: {
                                        type: 'category',
                                        data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                                    },
                                    yAxis: {
                                        type: 'value'
                                    },
                                    series: [{
                                        data: [120, 200, 150, 80, 70, 110, 130],
                                        type: 'bar'
                                    }]
                                });
                            });
                        </script>
                        <!-- End Bar Chart -->
                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vertical Bar Chart</h5>
                        <!-- Vertical Bar Chart -->
                        <div id="verticalBarChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#verticalBarChart")).setOption({
                                    title: {
                                        text: 'World Population'
                                    },
                                    tooltip: {
                                        trigger: 'axis',
                                        axisPointer: {
                                            type: 'shadow'
                                        }
                                    },
                                    legend: {},
                                    grid: {
                                        left: '3%',
                                        right: '4%',
                                        bottom: '3%',
                                        containLabel: true
                                    },
                                    xAxis: {
                                        type: 'value',
                                        boundaryGap: [0, 0.01]
                                    },
                                    yAxis: {
                                        type: 'category',
                                        data: ['Brazil', 'Indonesia', 'USA', 'India', 'China', 'World']
                                    },
                                    series: [{
                                        name: '2011',
                                        type: 'bar',
                                        data: [18203, 23489, 29034, 104970, 131744, 630230]
                                    },
                                    {
                                        name: '2012',
                                        type: 'bar',
                                        data: [19325, 23438, 31000, 121594, 134141, 681807]
                                    }
                                    ]
                                });
                            });
                        </script>
                        <!-- End Vertical Bar Chart -->
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->