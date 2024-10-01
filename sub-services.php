<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        صفحة 2
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

        #sub-services-section h3 {
            color: var(--pri-color) !important;
            font-size: 2.3rem !important;
            font-weight: bold;
        }

        #sub-services-section .line {
            height: 3px;
            width: 100%;
            background-color: var(--sec-color);
        }

        #sub-services-section .pw-box {
            background-color: var(--pri-color);
            border-radius: 10px;
            overflow: hidden;
        }

        #sub-services-section .pw-box .img-container {
            overflow: hidden;
        }

        #sub-services-section .pw-box .img-container img {
            aspect-ratio: 12/9;
        }

        #sub-services-section .text {
            background-image: url("./imgs/part.png");
            background-repeat: no-repeat;
            background-position: 90% bottom;
            background-size: 100px 170px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        #sub-services-section .text h4 {
            font-size: 1.1rem;
            height: 45px;
            line-height: 25px;
            margin-bottom: 10px;
            text-align: center;
            margin-top: 5px;
            color: white;
        }

        #sub-services-section .text p {
            font-size: 14px;
            height: 4.3rem;
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            text-overflow: ellipsis;
            line-height: 1.5rem;
            color: white;
        }

        #sub-services-section .text a.swipBtn {
            display: block;
            width: fit-content;
            background-color: white;
            color: var(--pri-color);
            border-radius: 20px;
            padding: 5px 10px;
            transition: all 0.2s linear;
            font-size: 1rem;
        }

        #sub-services-section .pag li {
            background-color: #ddd;
            width: 35px;
            height: 35px;
            transition: all 0.1s linear;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1);
        }

        #sub-services-section .pag li:hover {
            transform: scale(1.05);

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
                                <li class="breadcrumb-item active fw-bold" aria-current="page">أكاديمية فنمكتوب</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>


        <section id="sub-services-section" class="mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-12 col-lg-12 col-xl-11">
                        <h3 class="text-center mt-2">أكاديمية فنمكتوب</h3>
                        <div class="line mt-3 mb-5">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10 col-md-12 col-lg-12 col-xl-11">
                        <div class="row justify-content-center justify-content-lg-start">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                                <div class="pw-box mb-4">
                                    <a href="sign-in.php" title="">
                                        <div class="img-container">
                                            <img src="./imgs/للماقدمين-600x403.jpg" class="img-fluid" alt="image">
                                        </div>
                                        <div class="text">
                                            <h4>
                                                لغة عربية – البرنامج المتقدم /</h4>
                                            <p class="text-center">هو برنامج يدعم المستوى القرائي والكتابي والاستيعابي
                                                للمتعلم .. حيث يتعرّض فيه لنصوص متنوّعة بمواضيع مختلفة تتم مناقشتها مع
                                                المعلمة ويتوصّل من خلالها إلى عبارات للكتابة والتدوين .
                                            </p>
                                            <a href="sign-in.php" title="" class="swipBtn ms-auto fw-bold">
                                                المزيد <i class="fa-solid fa-chevron-left"></i>
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                                <div class="pw-box mb-4">
                                    <a href="sign-in.php" title="">
                                        <div class="img-container">
                                            <img src="./imgs/al-maslak-01-01-600x608.jpg" class="img-fluid" alt="image">
                                        </div>
                                        <div class="text">
                                            <h4>برنامج ممارسة القراءة / حمزة وملك وميرا</h4>
                                            <p>هو برنامج يدعم المستوى القرائي والكتابي للمتعلم .. حيث يتعرّض فيه لنصوص
                                                متنوّعة بمواضيع مختلفة تتم مناقشتها مع المعلمة ويتوصّل من خلالها إلى
                                                عبارات للكتابة والتدوين .
                                            </p>
                                            <a href="sign-in.php" title="" class="swipBtn ms-auto fw-bold">
                                                المزيد <i class="fa-solid fa-chevron-left"></i>
                                            </a>
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                                <div class="pw-box mb-4">
                                    <a href="sign-in.php" title="">
                                        <div class="img-container">
                                            <img src="./imgs/العربية-للصغار-فنمكتوب3-15-600x557.jpg" class="img-fluid" alt="image">
                                        </div>
                                        <div class="text">
                                            <h4>
                                                البرنامج التمهيدي للصغار – رابط خاص آدم</h4>
                                            <p class="text-center">يهدف البرنامج إلى بناء أرضية بسيطة من مئة كلمة أساسية
                                                في اللغة العربية (أسماء وأفعال) إضافة لتعريف الطفل على أحرف اللغة
                                                العربية.
                                            </p>
                                            <a href="sign-in.php" title="" class="swipBtn ms-auto fw-bold">
                                                المزيد <i class="fa-solid fa-chevron-left"></i>
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                                <div class="pw-box mb-4">
                                    <a href="sign-in.php" title="">
                                        <div class="img-container">
                                            <img src="./imgs/afnan-fenmaktoob-600x424.jpg" class="img-fluid" alt="image">
                                        </div>
                                        <div class="text">
                                            <h4>
                                                لغة عربية – البرنامج الشّامل – رابط خصم للأخوة 2</h4>
                                            <p class="text-center">يهدف البرنامج إلى تطوير اللغة العربية للمتعلم
                                                وتمليكها إياه، عن طريق مهارات الاستماع والمحادثة والقراءة واستيعاب
                                                المقروء.
                                            </p>
                                            <a href="sign-in.php" title="" class="swipBtn ms-auto fw-bold">
                                                المزيد <i class="fa-solid fa-chevron-left"></i>
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                                <div class="pw-box mb-4">
                                    <a href="sign-in.php" title="">
                                        <div class="img-container">
                                            <img src="./imgs/Durba-reading-600x400.jpg" class="img-fluid" alt="image">
                                        </div>
                                        <div class="text">
                                            <h4>برنامج ممارسة القراءة / رابط خاص</h4>
                                            <p class="text-center">وهو برنامج يهدف إلى تطوير مهارة القراءة وتصحيح مخارج
                                                الحروف من خلال تمكين المتعلم من قراءة ما يقارب الـ 700 كلمة في المستوى
                                                الواحد.
                                            </p>
                                            <a href="sign-in.php" title="" class="swipBtn ms-auto fw-bold">
                                                المزيد <i class="fa-solid fa-chevron-left"></i>
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="list-unstyled d-flex gap-2 pag">
                            <li class="rounded-circle d-flex align-items-center justify-content-center  fw-bold p-1">
                                <a class="text-white" href="services.php">&lt;</a>
                            </li>
                            <li class="rounded-circle d-flex align-items-center justify-content-center  fw-bold p-1"><a
                                    class="text-white" href="services.php">1</a></li>
                            <li
                                class="rounded-circle d-flex align-items-center justify-content-center  fw-bold p-1  bg-secondary">
                                <a class="text-white" href="">2</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include "footer.php"; ?>

</body>

</html>