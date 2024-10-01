<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الموزعون</title>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel='stylesheet' id='bootstrap-icons-css'
        href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css?ver=1.10.5' media='all' />

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --pri-color: #282561;
            --sec-color: #67b6cc;
            --third-color: #b52e5b;
            --light-purple: #423d71;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        ul {
            padding: 0 !important;
        }

        .mybreadcrumb {
            border-radius: 10px;
            padding: 10px 20px;
            background-color: #f6f6f6;
        }

        ol {
            margin: 0 !important;
            padding: 0 !important;
        }

        .mybreadcrumb i {
            color: black;
        }

        .breadcrumb-item {
            color: var(--sec-color) !important;
            font-size: 0.9rem;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: #bbb !important;
        }

        #dist-section h3 {
            color: var(--pri-color) !important;
            font-size: 2rem !important;
            font-weight: bold;
        }

        #dist-section .myCard {
            background-color: var(--pri-color);
            border-radius: 15px;
            height: 350px;
        }

        #dist-section .line {
            height: 3px;
            width: 100%;
            background-color: var(--sec-color);
        }

        #dist-section .info p {
            background-color: var(--sec-color);
            opacity: 0.9;
            padding: 5px;
            font-size: 1rem;
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <main>
        <section id="breadcrumb-section" class="mt-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="d-none d-md-block col-12 col-xl-11">
                        <nav class="mybreadcrumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house "></i></a>
                                </li>
                                <li class="breadcrumb-item active fw-bold" aria-current="page">الموزعون</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div id="dist-section" class="mt-3 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11">
                        <h3 class="text-center mt-2">الموزعون</h3>
                        <div class="line mt-3 mb-5">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="row justify-content-center">
                            <div class="col-11 col-md-6 col-xl-5">
                                <div class="myCard text-white p-3 mb-4">
                                    <h4 class="text-center mb-4">استراليا – Australia</h4>
                                    <div class="info">
                                        <p><i class="fa-solid fa-phone"></i> : 0061481090155</p>
                                        <p><i class="fa-solid fa-location-dot"></i> : 39 Bentham St Roxburgh Park VIC 3064
                                        </p>
                                        <p><i class="fa-solid fa-location-dot"></i> : </p>
                                        <p><i class="fa-solid fa-envelope"></i> : rabi@fenmaktoob.com </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-11 col-md-6 col-xl-5">
                                <div class="myCard text-white p-3 mb-4">
                                    <h4 class="text-center mb-4">الولايات المتحدة</h4>
                                    <div class="info">
                                        <p><i class="fa-solid fa-phone"></i> : 0012483784616</p>
                                        <p><i class="fa-solid fa-location-dot"></i> : united-states / Michigan
                                        </p>
                                        <p><i class="fa-solid fa-location-dot"></i> : </p>
                                        <p><i class="fa-solid fa-envelope"></i> : info@fenmaktoob.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-11 col-md-6 col-xl-5">
                                <div class="myCard text-white p-3 mb-4">
                                    <h4 class="text-center mb-4">كندا – Canada</h4>
                                    <div class="info">
                                        <p><i class="fa-solid fa-phone"></i> : 0061481090155</p>
                                        <p><i class="fa-solid fa-location-dot"></i> : Canada
                                        </p>
                                        <p><i class="fa-solid fa-location-dot"></i> : </p>
                                        <p><i class="fa-solid fa-envelope"></i> : info@fenmaktoob.com </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-11 col-md-6 col-xl-5">
                                <div class="myCard text-white p-3 mb-4">
                                    <h4 class="text-center mb-4">أكدم استنبول- تركيا</h4>
                                    <div class="info">
                                        <p><i class="fa-solid fa-phone"></i> : 00905425365793</p>
                                        <p><i class="fa-solid fa-location-dot"></i> : Turkey
                                        </p>
                                        <p><i class="fa-solid fa-location-dot"></i> : </p>
                                        <p><i class="fa-solid fa-envelope"></i> : info@akdemistanbul.com.tr </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-11 col-md-6 col-xl-5">
                                <div class="myCard text-white p-3 mb-4">
                                    <h4 class="text-center mb-4">Newviwes – Germany</h4>
                                    <div class="info">
                                        <p><i class="fa-solid fa-phone"></i> : 004915770295702</p>
                                        <p><i class="fa-solid fa-location-dot"></i> : Germany
                                        </p>
                                        <p><i class="fa-solid fa-location-dot"></i> : addres 2</p>
                                        <p><i class="fa-solid fa-envelope"></i> : ney@ney.com </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "footer.php"; ?>


</body>

</html>