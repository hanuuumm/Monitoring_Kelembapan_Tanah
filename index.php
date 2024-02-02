<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Monitoring Kelembaban Tanah</title>

    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Tambahkan di bagian <head> HTML -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="assets/js/jquuery-latest.js"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">



            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#chart">Chart</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Sistem Monitoring Kelembaban Tanah<span>Berbasis IoT</span></h1>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/iot.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right"> </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                        <h3>Sistem Monitoring Kelembaban Tanah</h3>
                        <p>Sistem monitoring kelembaban tanah adalah teknologi yang digunakan untuk mengukur tingkat kelembaban di dalam tanah secara terus-menerus atau berdasarkan jadwal tertentu. Monitoring kelembaban tanah sangat penting dalam pertanian, kehutanan, pengelolaan sumber daya air, dan aplikasi lainnya, karena tingkat kelembaban tanah dapat memengaruhi pertumbuhan tanaman, keseimbangan ekosistem, dan pengambilan keputusan terkait irigasi</p>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-line-chart"></i></div>
                            <h4 class="title"><a href="">Sensor Kelembaban Tanah</a></h4>
                            <p class="description">Sensor ini ditanam di dalam tanah pada kedalaman tertentu dan dapat mengukur kelembaban tanah di sekitarnya. Terdapat beberapa jenis sensor kelembaban tanah, termasuk sensor resistif, kapasitif, atau sensor berbasis frekuensi.</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-chip"></i></div>
                            <h4 class="title"><a href="">NodeMCU</a></h4>
                            <p class="description">Memiliki kemampuan Wi-Fi yang terintegrasi hal ini memungkinkan perangkat yang menggunakan NodeMCU untuk terhubung ke jaringan Wi-Fi dan dapat berkomunikasi dengan perangkat lain.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Chart Section ======= -->
        <section id="chart" class="chart">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Chart</h2>
                    <p>Menampilkan grafik nilai kelembaban tanah</p>
                    <div class="col-xl-12 col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Grafik Nilai Kelembaban Tanah</h6>
                            </div>

                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Features Section -->


        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Gallery</h2>
                    <p>Check our Gallery</p>
                </div>

                <div class="row g-0" data-aos="fade-left">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                            <a href="assets/img/gallery/kering-img.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/kering-img.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                            <a href="assets/img/gallery/normal.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/normal.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                            <a href="assets/img/gallery/basah-img.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/basah-img.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                            <a href="assets/img/gallery/basah.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/basah.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Gallery Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Hanum Fauziah Isnanto</span></strong>. All Rights Reserved
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-zoom/1.1.1/chartjs-plugin-zoom.min.js"></script>
    

    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            var myChart;

            // Set locale ke bahasa Indonesia
            moment.locale('id');

            function updateChart() {
                fetch('data.php')
                    .then(response => response.json())
                    .then(data => {
                        if (myChart) {
                            myChart.data.labels = data.map(item => formatLabel(item.tanggal));
                            myChart.data.datasets[0].data = data.map(item => item.kelembaban);
                            myChart.update();
                        } else {
                            var canvas = document.getElementById("myChart");
                            var ctx = canvas.getContext('2d');

                            myChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: data.map(item => item.tanggal),
                                    datasets: [{
                                        label: 'Kelembaban',
                                        fill: true,
                                        borderColor: 'rgba(52, 231, 43, 1)',
                                        lineTension: 0.5,
                                        pointRadius: 5,
                                        data: data.map(item => item.kelembaban),
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    maintainAspectRatio: false, // Set to false to allow setting custom height and width
                                    showLines: true,
                                    animation: {
                                        duration: 1000 // General animation time
                                    },
                                    scales: {
                                        y: {
                                            grid: {
                                                // add range with different color
                                                color: function(context) {
                                                    if (context.tick.value < 40) {
                                                        return 'red';
                                                    } else if (context.tick.value > 60) {
                                                        return 'orange';
                                                    } else {
                                                        return 'green';
                                                    }
                                                },
                                            },

                                        }
                                    }
                                }
                            });
                        }
                    })
                    .catch(error => console.error('Error fetching data:', error));
            }

            function formatLabel(tanggal) {
                // Menggunakan Moment.js untuk memformat tanggal ke format yang diinginkan
                return moment(tanggal).format('dddd, HH:mm:ss');
            }

            updateChart();
            // 15 detik
            setInterval(updateChart, 15000);
        });
    </script>



</body>

</html>
