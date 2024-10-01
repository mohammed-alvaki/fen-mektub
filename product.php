<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المنتج</title>

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
            height: 2000px;
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

        h3.pro-title {
            background-color: var(--pri-color);
            font-size: 1.5rem !important;
            border-radius: 10px;
        }

        #product-section .container .myRow {
            background-color: #eee;
            border-radius: 10px;
        }

        #product-section .img-container {
            max-width: 100%;
            overflow: hidden;
        }

        #product-section .img-container img {
            width: 100%;
            cursor: zoom-in;
        }

        #product-section .zoom-icon {
            position: absolute;
            top: 30px;
            left: 30px;
            width: 40px;
            height: 40px;
        }

        #product-section input.count {
            width: 60px;
            direction: rtl;
        }

        #product-section .btnAdd {
            background-image: linear-gradient(to right, var(--sec-color), var(--pri-color));
            color: white !important;
            font-weight: bold;
            border: 0;
            padding: 2px 8px;
        }

        #product-section .demo .pri {
            color: rgb(208, 196, 129);
            font-size: 1.2rem;
        }

        #product-section .demo a {
            text-decoration: none;
            color: var(--pri-color);
        }

        .tab-pane {
            border-radius: 5px;
        }

        .tab-pane h5 {
            font-size: 1rem;
        }

        .tab-pane :where(p, strong, span) {
            font-size: 0.85rem;
        }

        /* ------------------------------ */

        #product-section .img-cont {
            border-radius: 10px;
            overflow: hidden;
        }

        #product-section .img-cont img {
            aspect-ratio: 1/1;
        }

        a {
            text-decoration: none !important;
        }

        #product-section .pr {
            border-radius: 10px;
            box-shadow: 0 0 3px 3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        #product-section .dis {
            background-color: white;
        }

        #product-section h5 {
            color: var(--pri-color);
            font-size: 1.1rem;
        }

        #product-section .op {
            color: var(--pri-color);
        }

        #product-section .np {
            color: rgb(194, 194, 194);
        }

        #product-section .add {
            background-color: var(--pri-color);
            font-size: 0.8rem;
            width: fit-content;
            padding: 2px 5px;
        }

        #product-section .accounts a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #product-section .accounts a:first-child {
            background-color: #25D366;
        }

        #product-section .accounts a:nth-child(2) {
            background-color: black;
        }

        #product-section .accounts a:nth-child(3) {
            background-color: #4267B2;
        }

        #product-section .accounts a i {
            color: white;
            font-size: 25px;
        }

        #product-section .test-img {
            width: 150px;
        }

        #product-section .test-img img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <main>
        <section id="breadcrumb-section" class="my-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="d-none d-md-block col-12">
                        <nav class="mybreadcrumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house "></i></a>
                                </li>
                                <li class="breadcrumb-item  fw-bold" aria-current="page"><a
                                        class="text-decoration-none text-dark" href="store.php">
                                        المنتجات</a></li>
                                <li class="breadcrumb-item  fw-bold" aria-current="page"><a
                                        class="text-decoration-none text-dark" href="services.php">
                                        منتجات تعليمية</a></li>
                                <li class="breadcrumb-item active fw-bold" aria-current="page"> منهج دربة</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h3 class="pro-title text-white my-3 p-2"> منهج دربة</h3>
                    </div>
                </div>
            </div>
        </section>

        <section id="product-section">
            <div class="container pb-5">
                <div class="row myRow justify-content-center gx-0 p-3 pb-5">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="img-container position-relative mb-3">
                                    <img src="" alt="image">
                                    <i class="fa-solid fa-magnifying-glass fa-flip-horizontal fa-xl zoom-icon" style="color: #ffffff;"></i>
                                </div>
                                <div class="d-flex flex-wrap gap-1">
                                    <div class="test-img">
                                        <img src="./imgs/product1.jpg" alt="image">
                                    </div>
                                    <div class="test-img">
                                        <img src="./imgs/product2.jpg" alt="image">
                                    </div>
                                    <div class="test-img">
                                        <img src="./imgs/product3.jpg" alt="image">
                                    </div>
                                    <div class="test-img">
                                        <img src="./imgs/product4.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="demo">
                                    <p class="pri">35,00$</p>
                                    <p>في حال تود الاستفسار عن المنتج راسلنا عبر الواتس آب 00905537338097</p>
                                    <input class="count text-center" min="1" type="number">
                                    <a href="shopping.php" class="btnAdd">إضافة إلى السلة</a>
                                    <p class="p-1 mt-3 bg-white">التصنيف: <span>منتجات تعليمية</span></p>
                                    <p class="p-1 bg-white">الوسوم: <span></span><a href="">أغاني, </a><a href=""></a>قواعد, </a><a href=""></a><a href="">لغة عربية, </a><a href="">قواعد صرفية ...</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">الوصف</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">معلومات إضافية</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show bg-white p-2 active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <h5 class="mt-4">الوصف</h5>
                                <p>– عبارة عن 3 كتب بثلاثة مستويات . <br>– كتب دندنة تعلم القواعد دون التعرض للطريقة التقليدية .. فالمتعلم سيغني ويخزن وبالتالي ينتج اللغة الصحيحة .. <br>– الشريحة المستهدفة : متعلمي اللغة العربية سواء ناطقين بها أم غير ناطقين ..</p>
                            </div>
                            <div class="tab-pane bg-white fade p-2" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <h5 class="mt-4">معلومات إضافية</h5>
                                <hr class="opacity-25">
                                <strong class="me-5">الأبعاد</strong>
                                <span> 21 × 21 × 1 سنتيميتر</span>
                                <hr class="opacity-25">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <h3 class="mt-4">منتجات ذات صلة</h3>
                    </div>

                    <div class="col-12">
                        <div class="row gx-xl-5">
                            <div class="col-6 col-md-3">
                                <div class="pr mb-4">
                                    <a href="product.php">
                                        <div class="img-cont"><img src="./imgs/product1.jpg" class="img-fluid" alt=""></div>
                                    </a>
                                    <div class="dis p-3 text-center">
                                        <h5 class="fw-bold">سلسلة دندنة</h5>
                                        <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                        <a href="shopping.php" class="add text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى السلة</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">
                                <div class="pr mb-4">
                                    <a href="product.php">
                                        <div class="img-cont"><img src="./imgs/product1.jpg" class="img-fluid" alt=""></div>
                                    </a>
                                    <div class="dis p-3 text-center">
                                        <h5 class="fw-bold">سلسلة دندنة</h5>
                                        <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                        <a href="shopping.php" class="add text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى السلة</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">
                                <div class="pr mb-4">
                                    <a href="product.php">
                                        <div class="img-cont"><img src="./imgs/product1.jpg" class="img-fluid" alt=""></div>
                                    </a>
                                    <div class="dis p-3 text-center">
                                        <h5 class="fw-bold">سلسلة دندنة</h5>
                                        <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                        <a href="shopping.php" class="add text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى السلة</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="pr mb-4">
                                    <a href="product.php">
                                        <div class="img-cont"><img src="./imgs/product1.jpg" class="img-fluid" alt=""></div>
                                    </a>
                                    <div class="dis p-3 text-center">
                                        <h5 class="fw-bold">سلسلة دندنة</h5>
                                        <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                        <a href="shopping.php" class="add text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى السلة</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row myRow mt-4 gx-0 justify-content-center">
                    <div class="accounts p-3">
                        <p class="fw-bold">شارك الآن</p>
                        <div class="d-flex gap-2">
                            <a href="https://wa.me/+905537338097"> <i class="fab fa-whatsapp fa-2xl"></i></a>
                            <a href="#"> <i class="fab fa-x-twitter fa-2xl"></i></a>
                            <a href="https://www.facebook.com/fenmaktoob"> <i class="fab fa-facebook fa-2xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include "footer.php"; ?>


    <script>
        const image = document.querySelector('#product-section .img-container img');
        const imgContainer = document.querySelector('#product-section .img-container');

        imgContainer.addEventListener('mousemove', (e) => {
            const rect = imgContainer.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            image.style.transformOrigin = `${x}px ${y}px`;
            image.style.transform = 'scale(1.3)';
        });

        imgContainer.addEventListener('mouseleave', () => {
            image.style.transform = 'scale(1)';
        });

        // ----------------------------------
        const imgList = document.querySelectorAll(".test-img img");
        const container = document.querySelector("#product-section .img-container img");

        container.src = "./imgs/product1.jpg";

        for (let i = 0; i < imgList.length; i++) {
            if (i === 0) {
                imgList[i].style.opacity = 1;
            } else {
                imgList[i].style.opacity = 0.5;
            }
        }

        for (let i = 0; i < imgList.length; i++) {
            imgList[i].addEventListener("click", function() {
                container.src = imgList[i].src;
                for (let j = 0; j < imgList.length; j++) {
                    if (i !== j) {
                        imgList[j].style.opacity = 0.5;
                    } else {
                        imgList[i].style.opacity = 1;
                    }
                }
            });
        }
    </script>

</body>

</html>