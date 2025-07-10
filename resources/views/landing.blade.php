<html lang="id" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-style="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="fsaJFwHDGwI8qDZJoQN5Zq3pykXiw8pUKOJSgAb1">
    <title>Airin Life</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/favicon/site.webmanifest">

    <!-- Fonts and Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="/assets/css/demo.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendor/libs/aos/aos.css">

    <!-- Page CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/pages/page-auth.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style media="print">
        .noprint {
            display: none;
        }
    </style>


    <style>
        .main-container {
            position: relative;
        }

        .main-bg {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        h4.section-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 20px;
            text-transform: uppercase;
            position: relative;
        }

        h4.section-title:before {
            content: "";
            position: absolute;
            display: block;
            width: 160px;
            height: 2px;
            background: color-mix(in srgb, var(--bs-white), transparent 60%);
            left: 0;
            right: 0;
            bottom: 1px;
            margin: auto;
        }

        h4.section-title::after {
            content: "";
            position: absolute;
            display: block;
            width: 60px;
            height: 3px;
            background: var(--bs-primary);
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }

        .text-gradient {
            background: linear-gradient(90deg, #007bff, #8a2be2);
            background-clip: text;
            color: transparent;
        }

        .title {
            line-height: 2.5rem;
        }

        .btn-gradient {
            border-radius: 50px;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            background: linear-gradient(90deg, #1e90ff, #9370db);
            color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .btn-gradient:hover {
            background: transparent;
            border: 1.5px solid #1e90ff;
            color: #1e90ff;
        }

        .testimoni-text-gradient {
            background: linear-gradient(90deg, #1e90ff, #9370db);
            background-clip: text;
            color: transparent;
        }

        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .team-card {
            transition: all 0.3s ease;
            border-radius: 12px;
            overflow: visible;
            border: none;
            margin-bottom: 15px;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .team-card .card-body {
            padding: 1.5rem;
            padding-top: 4rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .team-card .card-title {
            font-weight: 600;
            margin-top: 40px;
            margin-bottom: 8px;
        }

        .team-card .social-icon i {
            transition: all 0.3s ease;
        }

        .team-card .social-icon:hover i.text-github {
            color: #333 !important;
            transform: scale(1.2);
        }

        .team-card .social-icon:hover i.text-instagram {
            color: #e1306c !important;
            transform: scale(1.2);
        }

        .team-card .social-icon:hover i.text-person {
            color: #0077b5 !important;
            transform: scale(1.2);
        }

        .team-card .social-icon:hover i.text-journals {
            color: #ea4335 !important;
            transform: scale(1.2);
        }

        .team-card .card-text {
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .team-card .rounded-circle {
            border: 4px solid #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 120px;
            height: 120px;
            object-fit: cover;
            transform: scale(1.05);
        }

        .team-card .social-icon {
            transition: color 0.3s ease;
        }

        .team-card .social-icon:hover {
            color: #007bff !important;
        }

        #our-team .row {
            margin: 0 -10px;
        }

        .gilang-card,
        .fauzan-card,
        .dodo-card,
        .auliaHamdi-card,
        .ian-card {
            position: relative;
        }

        .footer {
            position: relative;
        }

        @keyframes ping {
            0% {
                transform: scale(0.8);
                opacity: 0.7;
            }

            100% {
                transform: scale(2.4);
                opacity: 0;
            }
        }

        .animate-ping {
            animation: ping 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;
        }

        .accordion-button {
            font-size: 1.1rem;
            font-weight: 500;
        }

        .accordion-button:not(.collapsed) {
            background-color: #f8f9fa;
            color: #000;
        }

        .accordion-body {
            padding: 1rem 1.25rem;
        }

        .btn-acordion-wa {
            border-radius: 5px;
            padding: 0.5rem 1rem;
            font-size: 14px;
            background: linear-gradient(90deg, #34a853, #0f9d58);
            color: #fff;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-acordion-wa:hover {
            background: linear-gradient(90deg, #4caf50, #1db954);
            color: #fff;
        }

        .btn-acordion-gm {
            border-radius: 5px;
            padding: 0.5rem 1rem;
            font-size: 14px;
            background: linear-gradient(90deg, #1e90ff, #9370db);
            color: #fff;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-acordion-gm:hover {
            background: linear-gradient(90deg, #4aa8ff, #ab8cff);
            color: #fff;
        }

        .btn-outline-primary {
            border-color: #007bff;
            color: #007bff;
        }

        .btn-outline-primary:hover {
            background-color: #007bff;
            color: #fff;
        }

        .fancy-line {
            border: 0;
            height: 1px;
            background: linear-gradient(to right, #007bff, rgba(0, 0, 0, 0), #8a2be2);
            margin: 20px 0;
            position: relative;
        }

        .fancy-line::before {
            content: '';
            position: absolute;
            left: 50%;
            top: -10px;
            transform: translateX(-50%);
            width: 50px;
            height: 5px;
            background-color: #000;
            border-radius: 5px;
        }

        /* Responsive Styles */
        @media (max-width: 575.98px) {
            .title {
                font-size: 1.5rem;
                line-height: 2rem;
            }

            .left-faq {
                text-align: center;
                margin-bottom: 1.2rem;
            }

            .carousel-item {
                padding: 0 1.5rem;
            }

            .gilang-card {
                top: 40px;
            }

            .fauzan-card {
                top: 80px;
            }

            .dodo-card {
                top: 120px;
            }

            .auliaHamdi-card {
                top: 160px;
            }

            .ian-card {
                top: 200px;
            }

            .team-card .card-body {
                padding: 0.75rem;
            }

            .team-card .rounded-circle {
                width: 80px;
                height: 80px;
            }

            .team-card .card-title {
                font-size: 1.1rem;
            }

            .team-card .card-text {
                font-size: 0.8rem;
            }

            .team-card .social-icon i {
                font-size: 1rem;
            }

            .footer {
                top: 12rem;
                padding-bottom: 10px;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            .title {
                font-size: 1.75rem;
                line-height: 2.25rem;
            }

            .left-faq {
                margin-bottom: 2rem;
            }

            .faq-text {
                text-align: center;
            }

            .gilang-card {
                top: 40px;
            }

            .fauzan-card {
                top: 80px;
            }

            .dodo-card {
                top: 120px;
            }

            .auliaHamdi-card {
                top: 160px;
            }

            .ian-card {
                top: 200px;
            }

            .testi-size {
                height: 400px;
            }

            .col {
                margin-top: 2rem !important;
            }

            .team-card .card-body {
                padding: 1rem;
            }

            .team-card .rounded-circle {
                width: 100px;
                height: 100px;
            }

            .team-card .card-title {
                font-size: 1.15rem;
            }

            .team-card .card-text {
                font-size: 0.85rem;
            }

            .btn-acordion-wa {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                padding: 8px 12px;
                margin-top: 8px;
            }

            .btn-acordion-gm {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                padding: 8px 12px;
                margin-top: 8px;
            }

            .footer {
                padding-top: 12rem;
            }

            .footer p {
                font-size: 0.9rem;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .title {
                font-size: 2rem;
                line-height: 2.5rem;
            }

            .dodo-card,
            .auliaHamdi-card,
            .ian-card {
                top: 30px;
            }

            .col {
                margin-top: 2rem;
            }

            .team-card .card-body {
                padding: 1.25rem;
            }

            .team-card .rounded-circle {
                width: 110px;
                height: 110px;
            }

            .team-card .card-title {
                font-size: 1.2rem;
            }

            .team-card .card-text {
                font-size: 0.9rem;
            }

            .footer {
                padding: 1.5rem 0;
            }
        }

        @media (min-width: 992px) {
            .title {
                font-size: 2.5rem;
                line-height: 3rem;
            }

            .height-hero-features {
                height: 85vh;
            }

            .height-testimonials {
                height: 55vh;
            }

            .height-faq {
                height: 90vh;
            }

            .auliaHamdi-card,
            .ian-card {
                top: 30px;
            }

            .col {
                margin-top: 2rem;
            }

            .team-card .card-body {
                padding: 1.5rem;
            }

            .team-card .rounded-circle {
                width: 120px;
                height: 120px;
            }

            .team-card .card-title {
                font-size: 1.25rem;
            }

            .team-card .card-text {
                font-size: 0.9rem;
            }

            #our-team .row {
                display: flex;
                flex-wrap: wrap;
            }

            #our-team .row .col {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .footer {
                padding-top: 1.5rem;
            }
        }
    </style>
    <style type="text/css">
        .layout-menu-fixed .layout-navbar-full .layout-menu,
        .layout-page {
            padding-top: 0px !important;
        }

        .content-wrapper {
            padding-bottom: 0px !important;
        }
    </style>
    <style>
        .htmx-indicator {
            opacity: 0
        }

        .htmx-request .htmx-indicator {
            opacity: 1;
            transition: opacity 200ms ease-in;
        }

        .htmx-request.htmx-indicator {
            opacity: 1;
            transition: opacity 200ms ease-in;
        }
    </style>
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
        <div class="layout-container">
            <!-- Toast default -->

            <!-- Navbar -->


            <!-- Konten Utama -->
            <div class="layout-page">
                <div class="main-container">
                    <img src="/assets/img/front-pages/hero-bg.png" class="main-bg img-fluid">

                    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                        id="layout-navbar"
                        style="height: 5.5rem; border-color: rgba(255,255,255,.68); background: rgba(255,255,255,.38); position: sticky; width: 100%; z-index: 100; top: 0;">

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                            <!-- Logo -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item d-flex align-items-center">
                                    <img src="/assets/img/logo/logo.png" alt="" height="40px">
                                    <span class="mb-0 border-0 shadow-none form-control ps-1 ps-sm-2 fw-medium">
                                        <span style="font-size: 1.3rem;" class="fw-bold">Airin Life</span>
                                        <br>
                                        <small class="text-primary d-none d-sm-block">by OnCodes</small>
                                    </span>
                                </div>
                            </div>
                            <!-- End Logo -->

                            <!-- Navbar Menus -->
                            <ul class="flex-row navbar-nav align-items-center ms-auto">
                                <li class="nav-item me-4 d-none d-md-flex d-lg-flex">
                                    <a class="nav-link fw-medium collapsed" href="/">Beranda</a>
                                </li>
                                <li class="nav-item me-4 d-none d-md-flex d-lg-flex">
                                    <a class="nav-link fw-medium collapsed" href="#FAQ">Tentang</a>
                                </li>
                                <li class="nav-item me-4 d-none d-md-flex d-lg-flex">
                                    <a class="nav-link fw-medium collapsed" href="#our-team">Profile</a>
                                </li>
                                <li>
                                    <a href="/login" class="btn btn-primary" style="border-radius: 50px;">
                                        <span class="tf-icons bx bx-log-in-circle scaleX-n1-rtl me-md-1"></span>
                                        <span class="d-none d-md-block">Login</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Navbar Menus -->

                        </div>
                    </nav>

                    <!-- Content wrapper -->
                    <div class="content-wrapper">

                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">

                            <div class="height-hero-features">
                                <!-- Hero -->
                                <section class="px-4 py-5 my-5 text-center">
                                    <div class="container">
                                        <h1 class="fw-extrabold title" style="color: #161b2c">
                                            Revolusi Baru <br>
                                            <span class="text-gradient">Pembayaran dan Pengelolaan Air</span>
                                        </h1>
                                        <div class="col-lg-6 mx-auto mt-7">
                                            <p class="lead mb-4">
                                                Nikmati pengalaman mudah, aman, dan instan dalam mengelola air. Pantau,
                                                bayar, dan kendalikan penggunaan air dengan efisiensi maksimal serta
                                                integrasi
                                                layanan
                                                pintar untuk kemudahan sehari-hari.
                                            </p>
                                        </div>
                                        <div class="justify-content-center mt-11">
                                            <a href="/login" class="btn-gradient btn-lg px-6">Mulai Sekarang</a>
                                        </div>
                                    </div>
                                </section>
                                <!-- End Hero -->

                                <!-- Features -->
                                <section style="margin-top: 4rem;">
                                    <div class="row align-items-center">
                                        <!-- Card 1 - Tagihan Transparan -->
                                        <div class="col-md-4 mb-4 feature-card aos-init aos-animate"
                                            data-aos="fade-up" data-aos-duration="2000">
                                            <div class="card h-70 shadow-sm"
                                                style="background: rgba(255, 255, 255, 0.75);">
                                                <div class="card-body">
                                                    <p class="text-start card-title mb-4">
                                                        <i class="bi bi-wallet2 rounded h4 text-white px-3 py-2 me-4"
                                                            style="background: linear-gradient(45deg, #28a745, #81c784);"></i>
                                                        <span class="h5 fw-bold">Tagihan Transparan</span>
                                                    </p>
                                                    <p class="card-text text-start">Sistem kami mencatat penggunaan air
                                                        secara
                                                        akurat,
                                                        sehingga Anda menerima tagihan yang transparan dan rinci sesuai
                                                        pemakaian.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card 2 - Monitoring Real-time -->
                                        <div class="col-md-4 mb-4 feature-card aos-init aos-animate"
                                            data-aos="fade-up" data-aos-duration="1000">
                                            <div class="card h-70 shadow-sm"
                                                style="background: rgba(255, 255, 255, 0.75);">
                                                <div class="card-body">
                                                    <p class="text-start card-title mb-4">
                                                        <i class="bi bi-clock rounded h4 text-white px-3 py-2 me-4"
                                                            style="background: linear-gradient(45deg, #ff6f61, #f8d7da);"></i>
                                                        <span class="h5 fw-bold">Monitoring Real-time</span>
                                                    </p>
                                                    <p class="card-text text-start">Pantau penggunaan air secara
                                                        real-time dan
                                                        terima
                                                        notifikasi instan untuk setiap perubahan, memberi Anda kendali
                                                        penuh atas
                                                        konsumsi air.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card 3 - Layanan Responsif -->
                                        <div class="col-md-4 mb-4 feature-card aos-init aos-animate"
                                            data-aos="fade-up" data-aos-duration="2000">
                                            <div class="card h-70 shadow-sm"
                                                style="background: rgba(255, 255, 255, 0.75);">
                                                <div class="card-body">
                                                    <p class="text-start card-title mb-4">
                                                        <i class="bi bi-lightning-charge rounded h4 text-white px-3 py-2 me-4"
                                                            style="background: linear-gradient(45deg, #ffc107, #ff9800);"></i>
                                                        <span class="h5 fw-bold">Layanan Responsif</span>
                                                    </p>
                                                    <p class="card-text text-start">Kami menyediakan layanan cepat dan
                                                        responsif,
                                                        memastikan setiap kebutuhan pelanggan ditangani dengan segera
                                                        dan efektif.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- End Features -->
                            </div>

                            <!-- Testimonials -->
                            <section class="height-testimonials">
                                <h3 class="testimonial-title text-center fw-bold my-5 aos-init" data-aos="fade-up"
                                    data-aos-duration="1500">
                                    Apa Kata Pelanggan Kami?
                                </h3>
                                <div id="testimoniCarousel" class="carousel slide" data-bs-ride="carousel"
                                    data-bs-interval="8000">
                                    <div class="carousel-inner aos-init" data-aos="fade-up" data-aos-duration="1500">
                                        <!-- Testimoni 1 -->
                                        <div class="carousel-item active">
                                            <div class="card mx-10 shadow-sm rounded-3"
                                                style="testi-size min-height: 220px; display: flex; flex-direction: column; justify-content: center; background: rgba(255, 255, 255, 0.85);">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center p-5">
                                                    <img src="/assets/img/avatars/1.png" alt="Avatar Pelanggan"
                                                        class="rounded-circle me-3 mb-4" width="70"
                                                        height="70">
                                                    <p class="fs-5 fst-italic card-text text-center"
                                                        style="color: #333; font-weight: 500; line-height: 1.6;">
                                                        "Sangat puas dengan aplikasi ini! Memudahkan saya dalam memantau
                                                        dan
                                                        mengelola pemakaian air sehari-hari."
                                                    </p>
                                                    <div
                                                        class="mt-4 d-flex align-items-center justify-content-center w-100">
                                                        <div class="d-flex align-items-center w-100"
                                                            style="max-width: 350px; width: 100%; text-align: center;">
                                                            <hr class="flex-grow-1"
                                                                style="border: 1px solid #8a2be2; margin: 0 10px;">
                                                            <p class="lh-sm mb-0 text-nowrap testimoni-text-gradient"
                                                                style="font-weight: 600; font-size: 1.1rem;">Ahmad
                                                                Salim</p>
                                                            <hr class="flex-grow-1"
                                                                style="border: 1px solid #8a2be2; margin: 0 10px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Testimoni 2 -->
                                        <div class="carousel-item">
                                            <div class="card mx-10 shadow-sm rounded-3"
                                                style="min-height: 220px; display: flex; flex-direction: column; justify-content: center; background: rgba(255, 255, 255, 0.85);">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center p-5">
                                                    <img src="/assets/img/avatars/5.png" alt="Avatar Pelanggan"
                                                        class="rounded-circle me-3 mb-4" width="70"
                                                        height="70">
                                                    <p class="fs-5 fst-italic card-text text-center"
                                                        style="color: #333; font-weight: 500; line-height: 1.6;">
                                                        "Dengan website ini, saya dapat mengontrol penggunaan air secara
                                                        real-time,
                                                        sehingga lebih hemat dan efisien."
                                                    </p>
                                                    <div
                                                        class="mt-4 d-flex align-items-center justify-content-center w-100">
                                                        <div class="d-flex align-items-center w-100"
                                                            style="max-width: 350px; width: 100%; text-align: center;">
                                                            <hr class="flex-grow-1"
                                                                style="border: 1px solid #8a2be2; margin: 0 10px;">
                                                            <p class="lh-sm mb-0 text-nowrap testimoni-text-gradient"
                                                                style="font-weight: 600; font-size: 1.1rem;">Viki
                                                                Mahardika</p>
                                                            <hr class="flex-grow-1"
                                                                style="border: 1px solid #8a2be2; margin: 0 10px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Testimoni 3 -->
                                        <div class="carousel-item">
                                            <div class="card mx-10 shadow-sm rounded-3"
                                                style="min-height: 220px; display: flex; flex-direction: column; justify-content: center; background: rgba(255, 255, 255, 0.85);">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center p-5">
                                                    <img src="/assets/img/avatars/7.png" alt="Avatar Pelanggan"
                                                        class="rounded-circle me-3 mb-4" width="70"
                                                        height="70">
                                                    <p class="fs-5 fst-italic card-text text-center"
                                                        style="color: #333; font-weight: 500; line-height: 1.6;">
                                                        "Website ini sangat membantu! Sekarang saya bisa memantau
                                                        pemakaian air
                                                        dengan mudah dan efisien."
                                                    </p>
                                                    <div
                                                        class="mt-4 d-flex align-items-center justify-content-center w-100">
                                                        <div class="d-flex align-items-center w-100"
                                                            style="max-width: 350px; width: 100%; text-align: center;">
                                                            <hr class="flex-grow-1"
                                                                style="border: 1px solid #8a2be2; margin: 0 10px;">
                                                            <p class="lh-sm mb-0 text-nowrap testimoni-text-gradient"
                                                                style="font-weight: 600; font-size: 1.1rem;">Firman
                                                                Rudiman</p>
                                                            <hr class="flex-grow-1"
                                                                style="border: 1px solid #8a2be2; margin: 0 10px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Testimoni 4 -->
                                        <div class="carousel-item">
                                            <div class="card mx-10 shadow-sm rounded-3"
                                                style="min-height: 220px; display: flex; flex-direction: column; justify-content: center; background: rgba(255, 255, 255, 0.85);">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center p-5">
                                                    <img src="/assets/img/avatars/8.jpg" alt="Avatar Pelanggan"
                                                        class="rounded-circle me-3 mb-4" width="70"
                                                        height="70" style="object-fit: cover;">
                                                    <p class="fs-5 fst-italic card-text text-center"
                                                        style="color: #333; font-weight: 500; line-height: 1.6;">
                                                        "Setelah menggunakan Airin, management penggunaan air di rumah
                                                        menjadi lebih
                                                        efisien."
                                                    </p>
                                                    <div
                                                        class="mt-4 d-flex align-items-center justify-content-center w-100">
                                                        <div class="d-flex align-items-center w-100"
                                                            style="max-width: 350px; width: 100%; text-align: center;">
                                                            <hr class="flex-grow-1"
                                                                style="border: 1px solid #8a2be2; margin: 0 10px;">
                                                            <p class="lh-sm mb-0 text-nowrap testimoni-text-gradient"
                                                                style="font-weight: 600; font-size: 1.1rem;">Lisa
                                                                Helena</p>
                                                            <hr class="flex-grow-1"
                                                                style="border: 1px solid #8a2be2; margin: 0 10px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Testimoni 5 -->
                                        <div class="carousel-item">
                                            <div class="card mx-10 shadow-sm rounded-3"
                                                style="min-height: 220px; display: flex; flex-direction: column; justify-content: center; background: rgba(255, 255, 255, 0.85);">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center p-5">
                                                    <img src="/assets/img/avatars/9.jpg" alt="Avatar Pelanggan"
                                                        class="rounded-circle me-3 mb-4" width="70"
                                                        height="70" style="object-fit: cover;">
                                                    <p class="fs-5 fst-italic card-text text-center"
                                                        style="color: #333; font-weight: 500; line-height: 1.6;">
                                                        "Dengan menggunakan website ini penggunaan air di rumah saya
                                                        menjadi lebih
                                                        terkontrol. Terima kasih Airin!"
                                                    </p>
                                                    <div
                                                        class="mt-4 d-flex align-items-center justify-content-center w-100">
                                                        <div class="d-flex align-items-center w-100"
                                                            style="max-width: 350px; width: 100%; text-align: center;">
                                                            <hr class="flex-grow-1"
                                                                style="border: 1px solid #8a2be2; margin: 0 10px;">
                                                            <p class="lh-sm mb-0 text-nowrap testimoni-text-gradient"
                                                                style="font-weight: 600; font-size: 1.1rem;">Aira Laila
                                                            </p>
                                                            <hr class="flex-grow-1"
                                                                style="border: 1px solid #8a2be2; margin: 0 10px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Button next and previous -->
                                    <button
                                        class="carousel-control-prev position-absolute top-50 start-0 translate-middle-y"
                                        type="button" data-bs-target="#testimoniCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button
                                        class="carousel-control-next position-absolute top-50 end-0 translate-middle-y"
                                        type="button" data-bs-target="#testimoniCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                    <!-- End Button next and previous -->

                                </div>
                            </section>
                            <!-- End Testimonials -->

                            <!-- FAQ -->
                            <section id="FAQ" class="container height-faq aos-init" data-aos="fade-up"
                                data-aos-duration="1000">
                                <h3 class="testimonial-title text-center fw-bold my-5">Ingin tahu lebih?</h3>
                                <div class="row px-4 my-5">
                                    <!-- Bagian Kiri -->
                                    <div class="col-md-6 left-faq">
                                        <p class="mb-4 faq-text">
                                            Platform inovatif yang dirancang untuk membantu Anda memantau dan mengelola
                                            penggunaan
                                            air secara efisien. Dengan teknologi terkini, kami memberikan solusi cerdas
                                            untuk
                                            menghemat air, mengurangi pemborosan, dan meningkatkan kesadaran akan
                                            pentingnya
                                            konservasi air.
                                        </p>
                                    </div>
                                    <!-- Bagian Kanan -->
                                    <div class="col-md-6">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Apa itu Airin?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body mt-3">
                                                        <p>
                                                            <strong>Airin</strong> adalah sebuah platform inovatif yang
                                                            dirancang
                                                            untuk membantu pengguna memantau dan mengelola penggunaan
                                                            air secara
                                                            efisien. Dengan teknologi terkini, Airin memberikan solusi
                                                            cerdas untuk
                                                            menghemat air, mengurangi pemborosan, dan meningkatkan
                                                            kesadaran akan
                                                            pentingnya konservasi air.
                                                        </p>
                                                        <p>
                                                            Platform ini dilengkapi dengan fitur-fitur seperti
                                                            pemantauan real-time,
                                                            analisis penggunaan air, dan notifikasi untuk membantu
                                                            pengguna
                                                            mengoptimalkan konsumsi air sehari-hari.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Kenapa membangun website ini?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body mt-3">
                                                        <p>
                                                            Website ini dibangun dengan tujuan untuk memberikan solusi
                                                            nyata dalam
                                                            mengelola dan memantau penggunaan air. Kami percaya bahwa
                                                            dengan
                                                            teknologi yang tepat, kita dapat membantu masyarakat
                                                            menghemat air dan
                                                            berkontribusi pada pelestarian lingkungan.
                                                        </p>
                                                        <p>
                                                            Selain itu, website ini juga menjadi wadah bagi tim OnCodes
                                                            untuk
                                                            menunjukkan kemampuan dan kreativitas dalam mengembangkan
                                                            produk
                                                            teknologi yang bermanfaat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        Apa keunggulan Airin?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body mt-2">
                                                        <p>
                                                            <strong>Keunggulan Airin</strong> meliputi:
                                                        </p>
                                                        <ul>
                                                            <li><strong>Pemantauan Real-Time:</strong> Pantau penggunaan
                                                                air secara
                                                                langsung dan akurat.</li>
                                                            <li><strong>Analisis Cerdas:</strong> Dapatkan laporan dan
                                                                rekomendasi
                                                                untuk mengoptimalkan penggunaan air.</li>
                                                            <li><strong>Notifikasi:</strong> Dapatkan pemberitahuan jika
                                                                terjadi
                                                                kebocoran atau penggunaan berlebihan.</li>
                                                            <li><strong>Ramah Pengguna:</strong> Antarmuka yang
                                                                sederhana dan mudah
                                                                digunakan.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingFive">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">
                                                        Bagaimana cara menggunakan Airin?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body mt-2">
                                                        <p>
                                                            Menggunakan Airin sangat mudah! Berikut langkah-langkahnya:
                                                        </p>
                                                        <ol>
                                                            <li><strong>Daftar Akun:</strong> Buat akun baru di platform
                                                                Airin.</li>
                                                            <li><strong>Hubungkan Perangkat:</strong> Sambungkan
                                                                perangkat pemantau
                                                                air ke akun Anda.</li>
                                                            <li><strong>Pantau Penggunaan:</strong> Lihat data
                                                                penggunaan air secara
                                                                real-time di dashboard.</li>
                                                            <li><strong>Terima Rekomendasi:</strong> Ikuti rekomendasi
                                                                yang
                                                                diberikan untuk menghemat air.</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Butuh kontak yang bisa di hubungi, atau ingin datang?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body d-flex gap-2 mt-2">
                                                        <a href="https://wa.me/6288806946074" target="_blank"
                                                            class="btn-acordion-wa btn-sm">
                                                            Whatsapp <i class="bi bi-whatsapp"></i>
                                                        </a>
                                                        <a href="https://maps.app.goo.gl/nsYeoAPbb31FFuQ48"
                                                            target="_blank" class="btn-acordion-gm btn-sm">
                                                            Google Maps <i class="bi bi-map-marker-alt"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- End FAQ -->

                            <!-- Our Team -->
                            <section id="our-team" class="container mt-8">
                                <h3 class="testimonial-title text-center fw-bold my-5 aos-init" data-aos="fade-up"
                                    data-aos-duration="1000">
                                    Tim Kami</h3>
                                <div
                                    class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center mt-12">
                                    <!-- Card 1 -->
                                    <div class="col aos-init" data-aos="fade-up" data-aos-duration="500">
                                        <div class="card h-70 w-80 shadow-sm position-relative team-card">
                                            <div class="card-body text-center">
                                                <img src="assets\img\profile\Firman.jpg"
                                                    class="rounded-circle mx-auto mb-4 position-absolute top-0 start-50 translate-middle"
                                                    style="width: 120px; height: 120px; object-fit: cover; object-position: top">
                                                <h5 class="card-title mt-6 pt-5">Firman Zamzami</h5>
                                                <p class="card-text text-muted">Team Leader</p>
                                                <div class="d-flex justify-content-center gap-3 mt-3">
                                                    <a href="https://github.com/GwFirman" target="_blank"
                                                        class="text-decoration-none social-icon"><i
                                                            class="bi bi-github fs-5 text-github"></i></a>
                                                    <a href="https://www.instagram.com/gw_firman/?hl=id"
                                                        target="_blank" class="text-decoration-none social-icon"><i
                                                            class="bi bi-instagram fs-5 text-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 2 -->
                                    <div class="col aos-init" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card h-70 w-80 shadow-sm position-relative team-card gilang-card">
                                            <div class="card-body text-center">
                                                <img src="assets\img\profile\Gilang.png"
                                                    class="rounded-circle mx-auto mb-4 position-absolute top-0 start-50 translate-middle"
                                                    style="width: 120px; height: 120px; background-color: rgba(36,91,243,255); object-fit: cover;">
                                                <h5 class="card-title mt-6 pt-5">Gilang Dely</h5>
                                                <p class="card-text text-muted">Creative Director</p>
                                                <div class="d-flex justify-content-center gap-3 mt-3">
                                                    <a href="https://github.com/gilangdely" target="_blank"
                                                        class="text-decoration-none social-icon"><i
                                                            class="bi bi-github fs-5 text-github"></i></a>
                                                    <a href="https://www.instagram.com/gilang.dm/?hl=id"
                                                        target="_blank" class="text-decoration-none social-icon"><i
                                                            class="bi bi-instagram fs-5 text-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 3 -->
                                    <div class="col aos-init" data-aos="fade-up" data-aos-duration="1500">
                                        <div class="card h-70 w-80 shadow-sm position-relative team-card fauzan-card">
                                            <div class="card-body text-center">
                                                <img src="assets\img\profile\Fauzan.jpg"
                                                    class="rounded-circle mx-auto mb-4 position-absolute top-0 start-50 translate-middle"
                                                    style="width: 120px; height: 120px; object-fit: cover; object-position: 0px -20px;">
                                                <h5 class="card-title mt-6 pt-5">Akhmad Fauzan</h5>
                                                <p class="card-text text-muted">Software Engineer</p>
                                                <div class="d-flex justify-content-center gap-3 mt-3">
                                                    <a href="https://github.com/ozan-fn" target="_blank"
                                                        class="text-decoration-none social-icon"><i
                                                            class="bi bi-github fs-5 text-github"></i></a>
                                                    <a href="https://www.instagram.com/ozan.fn/?hl=id" target="_blank"
                                                        class="text-decoration-none social-icon"><i
                                                            class="bi bi-instagram fs-5 text-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 4 -->
                                    <div class="col aos-init" data-aos="fade-up" data-aos-duration="2000">
                                        <div class="card h-70 w-80 shadow-sm position-relative team-card dodo-card">
                                            <div class="card-body text-center">
                                                <img src="assets\img\profile\Dodo.jpg"
                                                    class="rounded-circle mx-auto mb-4 position-absolute top-0 start-50 translate-middle"
                                                    style="width: 120px; height: 120px; object-fit: cover;">
                                                <h5 class="card-title mt-6 pt-5">Afridho Zaki</h5>
                                                <p class="card-text text-muted">Software Engineer</p>
                                                <div class="d-flex justify-content-center gap-3 mt-3">
                                                    <a href="https://github.com/dhodo999" target="_blank"
                                                        class="text-decoration-none social-icon"><i
                                                            class="bi bi-github fs-5 text-github"></i></a>
                                                    <a href="https://www.instagram.com/dhoodo.69/?hl=id"
                                                        target="_blank" class="text-decoration-none social-icon"><i
                                                            class="bi bi-instagram fs-5 text-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 5 -->
                                    <div class="col aos-init" data-aos="fade-up" data-aos-duration="2500">
                                        <div
                                            class="card h-70 w-80 shadow-sm position-relative team-card auliaHamdi-card">
                                            <div class="card-body text-center">
                                                <img src="assets\img\profile\AuliaHamdi.png"
                                                    class="rounded-circle mx-auto mb-4 position-absolute top-0 start-50 translate-middle"
                                                    style="width: 120px; height: 120px; background-color: rgb(177,181,184); object-fit: cover; object-position: 15px 10px;">
                                                <h5 class="card-title mt-6 pt-5">Aulia Hamdi</h5>
                                                <p class="card-text text-muted">Visual Designer</p>
                                                <div class="d-flex justify-content-center gap-3 mt-3">
                                                    <a href="https://dosen.amikompurwokerto.ac.id/main/profil_dosen?p=Aulia%20Hamdi"
                                                        target="_blank" class="text-decoration-none social-icon"><i
                                                            class="bi bi-person-circle fs-5 text-person"></i></a>
                                                    <a href="https://sinta.kemdikbud.go.id/authors/profile/6112151"
                                                        target="_blank" class="text-decoration-none social-icon"><i
                                                            class="bi bi-journals fs-5 text-journals"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 6 -->
                                    <div class="col aos-init" data-aos="fade-up" data-aos-duration="3000">
                                        <div class="card h-70 w-80 shadow-sm position-relative team-card ian-card">
                                            <div class="card-body text-center">
                                                <img src="assets\img\profile\Iyan.jpg"
                                                    class="rounded-circle mx-auto mb-4 position-absolute top-0 start-50 translate-middle"
                                                    style="width: 120px; height: 120px; object-fit: cover; object-position: 0px 0px;">
                                                <h5 class="card-title mt-6 pt-5">Muhammad Agus</h5>
                                                <p class="card-text text-muted">Designer Ui/Ux</p>
                                                <div class="d-flex justify-content-center gap-3 mt-3">
                                                    <a href="https://github.com/Astha4Study" target="_blank"
                                                        class="text-decoration-none social-icon"><i
                                                            class="bi bi-github fs-5 text-github"></i></a>
                                                    <a href="https://www.instagram.com/rheiyn._/?hl=id"
                                                        target="_blank" class="text-decoration-none social-icon"><i
                                                            class="bi bi-instagram fs-5 text-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- End Our Team -->

                            <!-- Footer -->
                            <footer class="footer mt-4">
                                <hr class="fancy-line">
                                <div class="container text-center">
                                    <p>
                                        ©
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>2025
                                        <a href="" target="_blank" class="footer-link">Team Developer
                                            OnCodes</a>
                                    </p>
                                </div>
                            </footer>
                            <!-- End Footer -->

                        </div>
                        <!-- End Content -->
                    </div>
                </div>
                <!-- End Content wrapper -->
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src="/assets/vendor/js/helpers.js"></script>
    <script src="/assets/js/config.js"></script>

    <!-- Vendors JS -->
    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assets/vendor/js/menu.js"></script>
    <script src="/assets/vendor/libs/aos/aos.js"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <script src="https://unpkg.com/htmx.org@2.0.4"
        integrity="sha384-HGfztofotfshcF7+8n44JQL2oJmowVChPTg48S+jvZoztPfvwD79OC/LTtG6dMp+" crossorigin="anonymous">
    </script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>

    <!-- END: Theme JS-->




</body>

</html>
