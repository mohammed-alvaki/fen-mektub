<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لطلبات الجملة</title>

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

        #wholesale-section h3 {
            color: var(--pri-color) !important;
            font-size: 2rem !important;
            font-weight: bold;
        }

        #wholesale-section .line {
            height: 3px;
            width: 100%;
            background-color: var(--sec-color);
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <main>
        <section id="breadcrumb-section" class="my-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="d-none d-md-block col-12 col-xl-11">
                        <nav class="mybreadcrumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house "></i></a>
                                </li>
                                <li class="breadcrumb-item active fw-bold" aria-current="page">لطلبات الجملة</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div id="wholesale-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11">
                        <h3 class="text-center mt-2">لطلبات الجملة</h3>
                        <div class="line mt-3 mb-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "footer.php"; ?>

    <div class="whatsapp rounded-pill">
        <a href="https://wa.me/+905537338097" target="_blank"
            class="d-flex align-items-center gap-1 text-decoration-none text-white fw-bold">
            <img src="./imgs/whatsapp-icon.png" alt="Whatsapp" />
            مباشر
        </a>
    </div>

</body>

</html>