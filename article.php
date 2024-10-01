<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المقالات</title>

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

        h3.cat-title {
            background-color: var(--pri-color);
            font-size: 1.5rem !important;
            border-radius: 10px;
        }

        #article-section .mySec {
            background-color: #eee;
            border-radius: 10px;
        }

        #article-section .img-container {
            overflow: hidden;
            min-width: 250px;
            max-width: 600px;
        }

        #article-section .main-img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        #article-section .accounts a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #article-section .accounts a:first-child {
            background-color: #25D366;
        }

        #article-section .accounts a:nth-child(2) {
            background-color: black;
        }

        #article-section .accounts a:nth-child(3) {
            background-color: #4267B2;
        }

        #article-section .accounts a i {
            color: white;
            font-size: 25px;
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
                                <li class="breadcrumb-item  fw-bold" aria-current="page"><a
                                        class="text-decoration-none text-dark" href="services.php">
                                        مقالاتنا</a></li>
                                <li class="breadcrumb-item active fw-bold" aria-current="page">منتج دندنة</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>


        <section id="article-section" class="mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11">
                        <h3 class="cat-title text-white mb-3 p-2"> منتج دندنة</h3>
                    </div>
                    <div class="col-12 col-xl-11">
                        <div class="img-container">
                            <img class="mb-4 main-img" src="./imgs/afnan-fenmaktoob-600x424.jpg" alt="img">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center gx-0">
                    <div class="col-12 col-xl-11 mySec p-3">
                        <div>منتج دندنة: هو منهج غنائي مسانِد لتعليم قواعد اللغة العربية السّماعية الصرفية بأسلوب ممتع
                            جذاب ولطيف..

                            مرفق بكتيبات، ومتدرج في خمسة مستويات.

                            الفئة المستهدفة:
                            هذا المنهج موجّه لمن يجد صعوبة في تطبيق بعض قواعد اللغة العربية السماعية (مثل إسناد الضمائر
                            وتصريف الأفعال) يصلح لشتى الاعمار؛ ابتداء من عمر 5 سنوات ….

                            منتج دندنة ومكوِّناته:
                            3 كتب.
                            أغاني مسجلة وفق إيقاع تعليمي مدروس .
                            دليل للمربي وجميع ذلك متضمن في الكتاب.
                            فيديوهات توضح كيفية استخدام منتج دندنة.
                        </div>
                    </div>
                    <div class="col-12 col-xl-11 mySec mt-4">
                        <div class="accounts  p-3">
                            <p class="fw-bold">شارك الآن</p>
                            <div class="d-flex gap-2"> <a href="https://wa.me/+905537338097"> <i class="fab fa-whatsapp fa-2xl"></i></a>
                                <a href="#"> <i class="fab fa-x-twitter fa-2xl"></i></a>
                                <a href="https://www.facebook.com/fenmaktoob"> <i class="fab fa-facebook fa-2xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include "footer.php"; ?>

</body>

</html>