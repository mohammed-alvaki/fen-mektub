<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الرئيسية</title>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel='stylesheet' id='bootstrap-icons-css'
        href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css?ver=1.10.5' media='all' />

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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

        #carousel-section .fa-solid {
            color: var(--third-color);
        }

        /* ------------------------------- */

        #art-section .img-container {
            width: 280px;
        }

        #art-section .img-container img {
            width: 100%;
        }

        #art-section h1 {
            color: var(--sec-color);
            font-size: 2rem;
        }

        #art-section p {
            color: var(--pri-color);
            font-size: 1.3rem;
            text-align: justify;
            line-height: 40px;
        }

        @media(min-width:768px) {
            #art-section h1 {
                font-size: 3rem;
            }
        }

        /* ------------------------------- */
        #store-section {
            background-image: url("./imgs/bgg.png");
            background-attachment: fixed;
            background-repeat: repeat;
            background-size: contain;
            box-shadow: 0 2px 1px 1px rgba(0, 0, 0, 0.1) inset;
            padding: 80px 0;
        }

        #store-section h3 {
            color: var(--pri-color);
        }

        #store-section .line {
            height: 3px;
            width: 100%;
            background-color: var(--third-color);
        }

        #store-section .img-container img {
            aspect-ratio: 12/10;
        }

        #store-section .discription1 {
            background-color: var(--third-color);
        }

        #store-section :where(.discription2, .discription4) {
            background-color: var(--light-purple);
        }

        #store-section :where(.discription3, .discription5) {
            background-color: var(--sec-color);
        }

        #store-section .pr a {
            text-decoration: none;
            color: white;
            border: 1px solid white;
            padding: 5px;
            transition: all 0.2s linear;
        }

        #store-section .pr a:hover {
            background-color: white;
            color: var(--pri-color);
        }

        #store-section .btn-watch {
            background-color: var(--third-color);
            transition: all 0.3s linear;
        }

        #store-section .btn-watch:hover {
            background-color: var(--sec-color);
        }

        /* ---------------------------------- */
        #plog-section h3 {
            font-weight: bold;
            color: var(--pri-color) !important;
        }

        #plog-section .line {
            height: 3px;
            width: 100%;
            background-color: var(--third-color);
        }

        #plog-section .newSwiper1 .swiper-slide {
            padding-block: 10px;
        }

        #plog-section .pw-box {
            max-width: 300px;
            background-color: #eee;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 3px 3px rgba(0, 0, 0, 0.1);
        }

        #plog-section .pw-box .img-container {
            overflow: hidden;
        }

        #plog-section .pw-box img {
            transition: all 0.7s linear;
            aspect-ratio: 1/1;
        }

        #plog-section .pw-box img:hover {
            transform: scale(1.3);
        }

        #plog-section .newSwiper1 h3 {
            font-size: 1.1rem;
            height: 45px;
            line-height: 25px;
            text-align: center;
            margin-top: 5px;
        }

        #plog-section .newSwiper1 a {
            text-decoration: none;
        }

        .newSwiper1 .text {
            background-image: url("./imgs/part.png");
            background-repeat: no-repeat;
            background-position: -20px bottom;
            background-size: 100px 170px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        #plog-section .newSwiper1 .text p {
            text-align: justify;
            font-size: 13px;
            height: 4.3rem;
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            text-overflow: ellipsis;
            line-height: 1.5rem;
            color: var(--pri-color);
            margin-bottom: 0;
        }

        #plog-section .newSwiper1 .text a.swipBtn {
            display: block;
            width: fit-content;
            background-color: var(--sec-color);
            color: white;
            border-radius: 5px;
            padding: 7px;
            transition: all 0.2s linear;
            font-size: 0.8rem;
        }

        #plog-section .newSwiper1 .text a.swipBtn:hover {
            opacity: 0.9;
        }

        #plog-section :where(.pw-new-prev1, .pw-new-next1) {
            z-index: 100;
            width: 40px;
            height: 40px;
            background-color: var(--light-purple);
            border-radius: 50%;
            opacity: 0.8;
        }

        /* -------------------------------- */

        #videos-section h3 {
            font-weight: bold;
            color: var(--pri-color) !important;
        }

        #videos-section .line {
            height: 3px;
            width: 100%;
            background-color: var(--third-color);
        }


        #videos-section .pw-box {
            max-width: 300px;
        }

        a .img-responsive {
            width: 100%;
            height: 100%;
        }

        #videos-section :where(.pw-new-prev2, .pw-new-next2) {
            z-index: 100;
            width: 40px;
            height: 40px;
            background-color: var(--light-purple);
            border-radius: 50%;
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <main>
        <section id="carousel-section">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./imgs/sd3-1024x341.png" class="d-block w-100" alt="image">
                    </div>
                    <div class="carousel-item">
                        <img src="./imgs/sd-1024x341.jpg" class="d-block w-100" alt="image">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span aria-hidden="true"><i class="fa-solid fa-circle-chevron-right fa-2xl"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span aria-hidden="true"><i class="fa-solid fa-circle-chevron-left fa-2xl"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section id="art-section" class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="row justify-content-center justify-content-md-evenly">
                            <div class="col-12 col-md-5 d-none d-md-block">
                                <div class="img-container  mb-5 mb-md-0">
                                    <img src="./imgs/large-logo.png" alt="image">
                                </div>
                            </div>
                            <div class="col-8 col-md-4">
                                <div class="text-center">
                                    <h1 class="mb-3">فنمكتوب</h1>
                                    <p>كل حرفة فن... والكتابة حرفة
                                        اذاً الكتابة فن، والفن مكتوب
                                        وهنا فنمكتوب</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="store-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h3 class="text-center mt-2 fw-bold">منتجاتنا</h3>
                        <div class="line mt-3 mb-5">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center justify-content-md-start gx-4">
                    <div class="col-11 col-md-6 col-lg-4">
                        <div class="pr mb-4">
                            <div class="img-container">
                                <img src="./imgs/product1.jpg" class="img-fluid" alt="درجات" />
                            </div>
                            <div class="discription1 py-4 px-2 text-center text-white">
                                <h4>درجات</h4>
                                <p>منتجٌ صُمّم لرســم عــلاقة حب بين القارئ و ...</p>
                                <div class="mt-5 d-flex gap-2 justify-content-center">
                                    <a href="article.php" title="المزيد">
                                        <i class="fas fa-hand-point-left"></i>
                                        المزيد </a>
                                    <a href="store.php" title="اشترِ">
                                        <i class="fas fa-hand-point-left"></i>
                                        اشترِ </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-md-6 col-lg-4">
                        <div class="pr mb-4">
                            <div class="img-container">
                                <img src="./imgs/product2.jpg" class="img-fluid" alt="دندنة">
                            </div>
                            <div class="discription2 py-4 px-2 text-center text-white">
                                <h4>دندنة</h4>
                                <p>تعليم قواعد اللغة العربية بأسلوبٍ غنائي ......</p>
                                <div class="mt-5 d-flex gap-2 justify-content-center">
                                    <a href="article.php"
                                        title="المزيد">
                                        <i class="fas fa-hand-point-left"></i>
                                        المزيد </a>
                                    <a href="store.php" title="اشترِ">
                                        <i class="fas fa-hand-point-left"></i>
                                        اشترِ </a>
                                    <a href="article.php" title="تَعَرّف">
                                        <i class="fas fa-hand-point-left"></i>
                                        تَعَرّف </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-md-6 col-lg-4">
                        <div class="pr mb-4 mb-lg-0">
                            <div class="img-container">
                                <img src="./imgs/product3.jpg" class="img-fluid" alt="منهج مكنون">
                            </div>
                            <div class="discription3 py-4 px-2 text-center text-white">
                                <h4>منهج مكنون</h4>
                                <p>هو فلسفة جديدة في تعليم اللغة العربية..</p>
                                <div class="mt-5 d-flex gap-2 justify-content-center">
                                    <a href="article.php" title="المزيد">
                                        <i class="fas fa-hand-point-left"></i>
                                        المزيد </a>
                                    <a href="sign-in.php" title="سجل">
                                        <i class="fas fa-hand-point-left"></i>
                                        سجل </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-md-6 col-lg-4">
                        <div class="pr mb-4">
                            <div class="img-container"> <img src="./imgs/product4.jpg" class="img-fluid" alt="دربة">
                            </div>
                            <div class="discription4 py-4 px-2 text-center text-white">
                                <h4>دربة</h4>
                                <p>لتعليم القراءة والاستيعاب للمبتدئين ...</p>
                                <div class="mt-5 d-flex gap-2 justify-content-center">
                                    <a href="article.php" title="المزيد">
                                        <i class="fas fa-hand-point-left"></i>
                                        المزيد </a>
                                    <a href="store.php" title="اشتر">
                                        <i class="fas fa-hand-point-left"></i>
                                        اشتر </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-md-6 col-lg-4">
                        <div class="pr mb-4">
                            <div class="img-container"> <img src="./imgs/product5.jpg" class="img-fluid" alt="الكلمات اللطيفة">
                            </div>
                            <div class="discription5 py-4 px-2 text-center text-white">
                                <h4>الكلمات اللطيفة</h4>
                                <p>يمكن أن يبدأ بها الأطفال كلامهم ...</p>
                                <div class="mt-5 d-flex gap-2 justify-content-center">
                                    <a href="article.php" title="المزيد">
                                        <i class="fas fa-hand-point-left"></i>
                                        المزيد </a>
                                    <a href="store.php" title="اشتر">
                                        <i class="fas fa-hand-point-left"></i>
                                        اشتر </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <div><a href="store.php" class="btn-watch py-1 px-3 text-white text-decoration-none"><i
                                    class="fa-solid fa-star me-1"></i>مشاهدة
                                كافة المنتجات</a></div>
                    </div>
                </div>
        </section>

        <section id="plog-section" class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h3 class="text-center">مدونة فنمكتوب</h3>
                        <div class="line my-3">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-1 d-flex align-items-center position-relative">
                                <div class="pw-new-prev1 d-none d-md-flex align-items-center justify-content-center ms-auto">
                                    <i class="fa-solid fa-chevron-right fa-xl" style="color:#ffffff"></i>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="swiper newSwiper1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="pw-box">
                                                <a href="article.php" title="">
                                                    <div class="img-container">
                                                        <img src="./imgs/product8.jpg" class="img-fluid" alt="image">
                                                    </div>
                                                </a>
                                                <div class="text">
                                                    <h3>إدارة الأبناء فترة العطلة</h3>
                                                    <p>إنّ إدارة الأبناء فترة العطلة أمرٌ مهمٌّ للغاية.. وفي حال تجاهلناه!
                                                        فكيف سنمضي أربعاً وعشرين ساعة معهم دون خصومات كارثية؟</p>
                                                    <a href="article.php" title=""
                                                        class="swipBtn">
                                                        <i class="far fa-hand-point-left"></i>
                                                        مشاهدة التفاصيل
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="pw-box">
                                                <a href="article.php" title="">
                                                    <div class="img-container">
                                                        <img src="./imgs/product6.jpg" class="img-fluid" alt="image">
                                                    </div>
                                                </a>
                                                <div class="text">
                                                    <h3> النشاطات التعليمية في البيت &#8211; درجات</h3>
                                                    <p>درجات النشاطات التعليمية في البيت</p>
                                                    <a href="article.php" title=""
                                                        class="swipBtn">
                                                        <i class="far fa-hand-point-left"></i>
                                                        مشاهدة التفاصيل
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="pw-box">
                                                <a href="article.php" title="">
                                                    <div class="img-container">
                                                        <img src="./imgs/product3.jpg" class="img-fluid" alt="image">
                                                    </div>
                                                </a>
                                                <div class="text">
                                                    <h3>منهج مكنون</h3>
                                                    <p>منهج مكنون هو منهج عصري مبسط لتعليم اللغة العربية (الأصيلة) بكل
                                                        مهاراتها، الاستماع والمحادثة والقراءة واستماع المقروء..</p>
                                                    <a href="article.php" title=" "
                                                        class="swipBtn">
                                                        <i class="far fa-hand-point-left"></i>
                                                        مشاهدة التفاصيل
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="pw-box">
                                                <a href="article.php" title="">
                                                    <div class="img-container">
                                                        <img src="./imgs/product4.jpg" class="img-fluid" alt="image">
                                                    </div>
                                                </a>
                                                <div class="text">
                                                    <h3>منهج دربة لتعلم القراءة</h3>
                                                    <p>منهج دربة هو الكتاب الأمثل لتعليم القراءة والاستيعاب للمبتدئين،
                                                        صغاراً وكباراً، من أبناء العربية وكذا الناطقين بغيرها. وهو الحلّ
                                                        الفاعل &#8230; </p>
                                                    <a href="article.php" title=""
                                                        class="swipBtn">
                                                        <i class="far fa-hand-point-left"></i>
                                                        مشاهدة التفاصيل
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="pw-box">
                                                <a href="article.php" title="">
                                                    <div class="img-container">
                                                        <img src="./imgs/product5.jpg" class="img-fluid" alt="image">
                                                    </div>
                                                </a>
                                                <div class="text">
                                                    <h3>قصص الكلمات اللطيفة</h3>
                                                    <p>هي قصص قصيرة جداً ، يُحبّها الأطفال الصغار &#8211; اِبتداءً من عمر
                                                        السنة والنصف وصولاً لأربع سنوات- لأنها تحاكي تفاصيل يومهم وهم
                                                        يستمتعون بها جدا -حيث يقرؤها الأبوان لهم.</p>
                                                    <a href="article.php" title=""
                                                        class="swipBtn">
                                                        <i class="far fa-hand-point-left"></i>
                                                        مشاهدة التفاصيل
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="pw-box">
                                                <a href="article.php" title="">
                                                    <div class="img-container">
                                                        <img src="./imgs/product1.jpg" class="img-fluid" alt="image">
                                                    </div>
                                                </a>
                                                <div class="text">
                                                    <h3>منتج درجات</h3>
                                                    <p>تقفز المناهج المدرسية عادة بين النص ذي السبع كلمات إلى النص ذي
                                                        السبعين كلمة قفزةً تفوق قدرة كثيرٍ من المتعلمين &#8230; </p>
                                                    <a href="article.php" title="" class="swipBtn">
                                                        <i class="far fa-hand-point-left"></i>
                                                        مشاهدة التفاصيل
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="pw-box">
                                                <a href="article.php" title="">
                                                    <div class="img-container">
                                                        <img src="./imgs/product7.png" class="img-fluid" alt="image">
                                                    </div>
                                                </a>
                                                <div class="text">
                                                    <h3>Drajat</h3>
                                                    <p></p>
                                                    <a href="article.php" title=""
                                                        class="swipBtn">
                                                        <i class="far fa-hand-point-left"></i>
                                                        مشاهدة التفاصيل
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="pw-box">
                                                <a href="article.php" title="">
                                                    <div class="img-container">
                                                        <img src="./imgs/product2.jpg" class="img-fluid" alt="image">
                                                    </div>
                                                </a>
                                                <div class="text">
                                                    <h3>منتج دندنة</h3>
                                                    <p>منتج دندنة: هو منهج غنائي مسانِد لتعليم قواعد اللغة العربية السّماعية
                                                        الصرفية
                                                        بأسلوب ممتع جذاب ولطيف.. مرفق بكتيبات، ومتدرج في &#8230; </p>
                                                    <a href="article.php" title="" class="swipBtn">
                                                        <i class="far fa-hand-point-left"></i>
                                                        مشاهدة التفاصيل
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 d-flex align-items-center position-relative">
                                <div class="pw-new-next1 d-none d-md-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-chevron-left fa-xl" style="color:#ffffff"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="videos-section" class="mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h3 class="text-center">معرض الفيديو</h3>
                        <div class="line my-3">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-1 d-flex align-items-center position-relative">
                        <div class="pw-new-prev2 d-none d-md-flex align-items-center justify-content-center ms-auto">
                            <i class="fa-solid fa-chevron-right fa-xl" style="color:#ffffff"></i>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="swiper newSwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="https://www.youtube.com/watch?v=dWwrbWG3Eow" data-fancybox="gallery">
                                            <img src="https://img.youtube.com/vi/dWwrbWG3Eow/hqdefault.jpg" alt=""
                                                class="img-responsive">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="https://www.youtube.com/watch?v=tVz1Qzis88s">
                                            <img src="https://img.youtube.com/vi/tVz1Qzis88s/hqdefault.jpg" alt=""
                                                class="img-responsive">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="https://www.youtube.com/watch?v=B8GsyJprUdI">
                                            <img src="https://img.youtube.com/vi/B8GsyJprUdI/hqdefault.jpg" alt=""
                                                class="img-responsive">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="https://www.youtube.com/watch?v=uf7Q5hh1B-4">
                                            <img src="https://img.youtube.com/vi/uf7Q5hh1B-4/hqdefault.jpg" alt=""
                                                class="img-responsive">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="https://www.youtube.com/watch?v=2wlV_E21Sj0">
                                            <img src="https://img.youtube.com/vi/2wlV_E21Sj0/hqdefault.jpg" alt=""
                                                class="img-responsive">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="https://www.youtube.com/watch?v=Rx7UAKrfG_I">
                                            <img src="https://img.youtube.com/vi/Rx7UAKrfG_I/hqdefault.jpg" alt=""
                                                class="img-responsive">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="https://www.youtube.com/watch?v=d81wX-gN-Zw">
                                            <img src="https://img.youtube.com/vi/d81wX-gN-Zw/hqdefault.jpg" alt=""
                                                class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 d-flex align-items-center position-relative">
                        <div class="pw-new-next2 d-none d-md-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-chevron-left fa-xl" style="color:#ffffff"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include "footer.php"; ?>

    <!-- ----- swiper ----- -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".newSwiper1", {
            loop: true,
            slidesPerView: 1.3,
            spaceBetween: 15,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            grabCursor: true,
            centeredSlides: true,
            breakpoints: {
                450: {
                    slidesPerView: 1.7,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2.3,
                    spaceBetween: 15,
                },
                992: {
                    slidesPerView: 3.5,
                    spaceBetween: 15,
                },
                1200: {
                    slidesPerView: 4.2,
                    spaceBetween: 15,
                },
            },
            navigation: {
                nextEl: ".pw-new-next1",
                prevEl: ".pw-new-prev1",
            }
        });
    </script>


    <!-- ----- swiper ----- -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".newSwiper2", {
            loop: true,
            slidesPerView: 1.3,
            spaceBetween: 15,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            grabCursor: true,
            centeredSlides: true,
            breakpoints: {
                450: {
                    slidesPerView: 1.7,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2.5,
                    spaceBetween: 15,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                },
                1200: {
                    slidesPerView: 4.2,
                    spaceBetween: 15,
                },
            },
            navigation: {
                nextEl: ".pw-new-next2",
                prevEl: ".pw-new-prev2",
            }
        });
    </script>


</body>

</html>