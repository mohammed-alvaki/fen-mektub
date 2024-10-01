<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

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

        #main-section h3 {
            color: var(--pri-color) !important;
            font-size: 2rem !important;
            font-weight: bold;
        }


        #main-section .line {
            height: 3px;
            width: 100%;
            background-color: var(--sec-color);
        }

        #main-section form input,
        #main-section form textarea {
            border-radius: 5px;
            resize: none;
            width: 100%;
            margin-bottom: 15px;
            background-color: #f6f6f6 !important;
            padding: 5px;
            border: 0;
            box-shadow: 0 0 1px 2px rgba(0, 0, 0, 0.1);

        }

        form :where(input, textarea):focus {
            outline: 0;
            box-shadow: 0 0 2px 1px var(--sec-color) !important;
        }

        #main-section .info {
            color: var(--pri-color);
        }

        #main-section .info p {
            font-size: 1rem;
        }

        #main-section span {
            box-shadow: 0 0 3px 3px rgba(0, 0, 0, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #main-section form button[type="submit"] {
            background-color: var(--sec-color);
            padding: 5px 10px;
            transition: all 0.2s linear;
            font-size: 0.9rem;
        }

        #main-section form button[type="submit"]:hover {
            background-color: white;
            color: var(--pri-color) !important;
        }

        .dashed-line {
            width: 100%;
            background-color: white;
            border-bottom: 1px dashed;
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
                                <li class="breadcrumb-item active fw-bold" aria-current="page">اتصل بنا</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div id="main-section" class="mt-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11">
                        <h3 class="text-center mt-2">اتصل بنا</h3>
                        <div class="line mt-3 mb-5">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6">
                                <form action="">
                                    <input type="text" placeholder="الاسم الكامل" required>
                                    <input class="text-start" type="email" placeholder="البريد الاكتروني" required>
                                    <input class="text-start" type="tel" placeholder="الهاتف" required>
                                    <textarea name="" id="" rows="3" placeholder="نص الرسالة"></textarea>
                                    <button type="submit" class="btnSend text-white fw-bold border-0 d-block mx-auto"><i
                                            class="fa-solid fa-share-from-square fa-flip-horizontal me-2"></i>أرسل</button>
                                </form>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="info mt-5 mt-md-0 d-flex flex-column align-items-center gap-2">
                                    <span><i class="fa-solid fa-phone-flip fa-xl"></i></span>
                                    <p dir="ltr">+905537338097
                                    </p>
                                </div>
                                <div class="info d-flex flex-column align-items-center">
                                    <span><i class="fa-solid fa-envelope fa-xl"></i></span>
                                    <p class="mt-2"> info@fenmaktoob.com
                                    </p>
                                </div>
                                <div class="info d-flex flex-column align-items-center">
                                    <span><i class="fa-solid fa-location-dot fa-xl"></i></span>
                                    <p class="mt-2 text-center"> canada . 2 Bursill Rd. Winnipeg, MB / R2J3X6
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11">
                        <div class="dashed-line my-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "footer.php"; ?>

</body>

</html>