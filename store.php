<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لاقتناء المنتجات</title>

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

        #store-section h3 {
            color: var(--pri-color) !important;
            font-size: 2rem !important;
            font-weight: bold;
        }

        #store-section .line {
            height: 3px;
            width: 100%;
            background-color: var(--sec-color);
        }

        #store-section a {
            text-decoration: none;
            color: var(--sec-color);
        }

        #store-section .img-cont {
            border-radius: 10px;
            overflow: hidden;
        }

        #store-section .img-cont img {
            aspect-ratio: 1/1;
        }

        #store-section .pr {
            border-radius: 10px;
            box-shadow: 0 0 3px 3px rgba(0, 0, 0, 0.1);
        }

        #store-section .discount:after {
            content: 'تخفيض';
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            top: -15px;
            left: -15px;
            border: 2px solid white;
            font-size: 0.6rem;
            background-color: var(--sec-color);
            color: white;
            padding: 5px;
            box-shadow: 0 0 3px 3px rgba(0, 0, 0, 0.1);
        }

        #store-section h5 {
            color: var(--pri-color);
            font-size: 1.1rem;
        }

        #store-section .op {
            color: var(--pri-color);
        }

        #store-section .np {
            color: rgb(217, 217, 217);
        }

        #store-section .btnAdd {
            background-color: var(--pri-color);
            padding: 2px 5px;
            font-size: 0.8rem;
            width: fit-content;
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
                                <li class="breadcrumb-item active fw-bold" aria-current="page"> لاقتناء المنتجات </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section id="store-section" class="mt-3 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11">
                        <h3 class="text-center mt-2"> لاقتناء المنتجات </h3>
                        <div class="line mt-3 mb-4">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11">
                        <div class="d-flex flex-column flex-sm-row justify-content-between  mb-4">
                            <p>عرض جميع النتائج 14</p>
                            <select name="orderby" class="orderby" style="width: 200px;" aria-label="نظام المتجر">
                                <option value="menu_order" selected='selected'>الترتيب الافتراضي</option>
                                <option value="popularity">ترتيب حسب الشهرة</option>
                                <option value="rating">ترتيب حسب معدل التقييم</option>
                                <option value="date">ترتيب حسب الأحدث</option>
                                <option value="price">ترتيب حسب: الأدنى سعراً للأعلى</option>
                                <option value="price-desc">ترتيب حسب: الأعلى سعراً للأدنى</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11">
                        <div class="row gx-xl-5">
                            <div class="col-6 col-md-3">
                                <div class="pr mb-4">
                                    <a href="product.php">
                                        <div class="img-cont"><img src="./imgs/product1.jpg" class="img-fluid" alt=""></div>
                                    </a>
                                    <div class="dis p-3 text-center">
                                        <h5 class="fw-bold">سلسلة دندنة</h5>
                                        <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                        <a href="shopping.php" class="btnAdd text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى
                                            السلة</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="pr mb-4">
                                    <a href="product.php">
                                        <div class="img-cont"><img src="./imgs/product4.jpg" class="img-fluid" alt=""></div>
                                    </a>
                                    <div class="dis p-3 text-center">
                                        <h5 class="fw-bold">سلسلة دندنة</h5>
                                        <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                        <a href="shopping.php" class="btnAdd text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى
                                            السلة</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="pr discount position-relative">
                                    <a href="product.php">
                                        <div class="img-cont"><img src="./imgs/product3.jpg" class="img-fluid" alt=""></div>
                                    </a>
                                    <div class="dis p-3 text-center">
                                        <h5 class="fw-bold">سلسلة دندنة</h5>
                                        <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                        <a href="shopping.php" class="btnAdd text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى
                                            السلة</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="pr discount position-relative">
                                    <a href="product.php">
                                        <div class="img-cont"><img src="./imgs/product2.jpg" class="img-fluid" alt=""></div>
                                    </a>
                                    <div class="dis p-3 text-center">
                                        <h5 class="fw-bold">سلسلة دندنة</h5>
                                        <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                        <a href="shopping.php" class="btnAdd text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى
                                            السلة</a>
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