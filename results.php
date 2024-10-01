<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        النتائج
    </title>
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

        a {
            text-decoration: none !important;

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

        #result-section h3 {
            color: var(--pri-color) !important;
            font-size: 2rem !important;
            font-weight: bold;
        }


        #result-section .line {
            height: 3px;
            width: 100%;
            background-color: var(--sec-color);
        }

        .results {
            padding: 10px 5%;
            border-radius: 10px;
            box-shadow: 0 0 2px 1.5px rgba(0, 0, 0, 0.1);
        }

        #result-section img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }

        .result-title {
            color: var(--pri-color);
            font-size: 1.2rem;
            font-weight: bold;
        }

        .results p {
            font-size: 0.9rem;
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
                                <li class="breadcrumb-item active fw-bold" aria-current="page">نتيجة البحث عن:</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>


        <div id="result-section" class="mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11">
                        <h3 class="text-center mt-2"> البحث عن:</h3>
                        <div class="line mt-3 mb-4">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-11">
                        <div
                            class="results bg-light d-flex flex-column align-items-center gap-2 flex-md-row gap-md-5 mt-3">
                            <div class="img-container mb-3 mb-md-0"><img src="./imgs/product1.jpg" alt="result-image">
                            </div>
                            <div class="text">
                                <a href="sign-in.php">
                                    <h4 class="result-title">
                                        دندنة – المستوى الثالث</h4>
                                </a>
                                في حال تود الاستفسار عن المنتج راسلنا عبر الواتس آب 00905537338097
                            </div>
                        </div>
                    </div>
                    <div class="col-11">
                        <div
                            class="results bg-light d-flex flex-column align-items-center gap-2 flex-md-row gap-md-5 mt-3">
                            <div class="img-container mb-3 mb-md-0"><img src="./imgs/product2.jpg" alt="result-image">
                            </div>
                            <div class="text">
                                <a href="sign-in.php">
                                    <h4 class="result-title">
                                        دندنة – المستوى الثالث</h4>
                                </a>
                                في حال تود الاستفسار عن المنتج راسلنا عبر الواتس آب 00905537338097
                            </div>
                        </div>
                    </div>
                    <div class="col-11">
                        <div
                            class="results bg-light d-flex flex-column align-items-center gap-2 flex-md-row gap-md-5 mt-3">
                            <div class="img-container mb-3 mb-md-0"><img src="./imgs/product3.jpg" alt="result-image">
                            </div>
                            <div class="text">
                                <a href="sign-in.php">
                                    <h4 class="result-title">
                                        دندنة – المستوى الثالث</h4>
                                </a>
                                في حال تود الاستفسار عن المنتج راسلنا عبر الواتس آب 00905537338097
                            </div>
                        </div>
                    </div>
                    <div class="col-11">
                        <div
                            class="results bg-light d-flex flex-column align-items-center gap-2 flex-md-row gap-md-5 mt-3">
                            <div class="img-container mb-3 mb-md-0"><img src="./imgs/product4.jpg" alt="result-image">
                            </div>
                            <div class="text">
                                <a href="sign-in.php">
                                    <h4 class="result-title">
                                        دندنة – المستوى الثالث</h4>
                                </a>
                                في حال تود الاستفسار عن المنتج راسلنا عبر الواتس آب 00905537338097
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