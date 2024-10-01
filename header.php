<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

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

        header .logo-container {
            width: 160px;
            max-width: 250px;
        }

        .logo {
            width: 100%;
        }

        .bars-icon {
            background-color: var(--sec-color) !important;
            width: 32px;
            height: 32px;
            margin-block: auto;
        }

        .info {
            color: white;
            font-size: 1.2rem;
            margin-top: 1.5px;
        }

        .lang {
            border-radius: 5px;
            background-color: white;
            width: fit-content;
            box-shadow: 0 0 3px 3px rgba(0, 0, 0, 0.1);
            color: var(--pri-color);
            padding: 3px;
        }

        header input {
            border-radius: 5px;
            border: none;
            min-width: 100px;
            max-width: 150px;
        }

        header input:focus {
            outline: none;
        }

        .social-media a {
            text-decoration: none;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s linear;
        }

        .social-media a.youtube:hover {
            background-color: red;
        }

        .social-media a.twitter:hover {
            background-color: black;
        }

        .social-media a.facebook:hover {
            background-color: #1877F2;
        }

        .social-media a.insta:hover {
            background-color: #E4405F;
        }

        .search-inp {
            background-color: var(--sec-color);
            width: 32px;
            height: 32px;
        }

        .search-inp i {
            color: white;
        }

        .sub-head {
            background-color: var(--pri-color);
            padding: 5px 2rem !important;
            border-bottom-right-radius: 50px;
        }

        .navbar {
            background-color: var(--gray-color) !important;
        }

        .navBtn {
            width: 35px;
            height: 35px;
            border-radius: 5px;
            padding: 8px;
            border: 1px solid gray;
        }

        .icon-bar {
            width: 100%;
            height: 4px;
            border-radius: 3px;
            background-color: gray;
        }

        a.nav-link {
            padding-right: 8px;
        }

        .navbar-nav>li:hover {
            background-color: white !important;
        }

        .navbar-nav>li>a {
            font-size: 1.1rem !important;
            font-weight: bold;
            color: var(--pri-color);
            transition: all 0.2s linear;
            letter-spacing: 1px;
        }

        .navbar-nav>li a:hover {
            color: var(--sec-color) !important;
        }

        /* ------------------------ */
        #side-bar {
            background-color: rgba(255, 255, 255, 0.5);
        }

        #side-bar .hr {
            height: 2px;
            background-image: linear-gradient(to right, transparent, #eee, transparent);
            border-radius: 50%;
            margin-bottom: 10px;
            width: 100%;
        }

        #side-bar h4 {
            color: var(--pri-color) !important;
            font-size: 1.5rem !important;
        }

        .offcanvas-start {
            width: 300px !important;
        }

        .offcanvas {
            background-color: rgba(255, 255, 255, 0.7) !important;
            backdrop-filter: blur(20px) !important;
            -webkit-backdrop-filter: blur(20px);
            overflow-y: auto;
        }

        .offcanvas-backdrop {
            background-color: transparent !important;
            /* Make the overlay transparent */
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0 !important;
        }

        ul li a {
            text-decoration: none;
        }

        #side-bar .btnClose {
            border-radius: 50%;
            font-size: 15px !important;
            background-color: var(--light-purple) !important;
            opacity: 1;
            color: white !important;
            width: 30px;
            height: 30px;
            border: none;
        }

        .sites>.cat-item {
            background-color: var(--light-purple);
            margin-bottom: 1px;
            padding: 10px;
        }

        .sites>.cat-item:hover {
            background-color: var(--pri-color);
        }

        .cat-num {
            width: 22px;
            height: 22px;
            border-radius: 3px;
            position: absolute;
            left: 5px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: var(--sec-color);
            color: white;
        }


        .tags {
            text-align: center;
        }

        .tags a {
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 5px;
            border-radius: 3px;
            color: white;
            margin: 2px;
            display: inline-block;
        }

        .tags a:hover {
            background-color: var(--pri-color);
        }

        .side-list>.menu-item {
            border-bottom: 1px solid #eee;
            padding: 7px;
            background-color: var(--light-purple);
            margin-bottom: 1px;
        }

        .side-list>.menu-item:hover {
            background-color: var(--pri-color);
        }

        .side-list a {
            color: white;
        }

        .modal-body input {
            background-color: #eee;
        }

        @media(min-width:992px) {
            .navbar-nav>li>a {
                font-size: 1rem !important;
                letter-spacing: 0;
            }
        }

        @media(min-width:1200px) {
            .navbar-nav {
                margin-top: 10px;
            }

            .offcanvas-start {
                width: 340px !important;
            }

            header .logo-container {
                width: 190px;
            }

            .navbar-nav>li>a {
                letter-spacing: 1;
                font-size: 1.15rem !important;
            }
        }
    </style>
</head>

<body>


    <header class="shadow-sm">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-2">
                    <div class="w-100 d-flex justify-content-center py-1">
                        <div class="logo-container text-center">
                            <a href="index.php"> <img src="./imgs/fenmaktoob.png" alt="logo" class="logo"></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-md-none">
                    <a class="lang d-block mx-auto my-3 border-0 py-1 px-2 text-decoration-none" href="">
                        <img class="me-1" src="./imgs/united-kingdom.png" alt="flag">English
                    </a>
                </div>
                <div class="col-12 col-md-10">
                    <div class="row">
                        <div class="col-12 sub-head">
                            <div class="row">
                                <div class="col-2 col-lg-1">
                                    <div class="text-center d-flex align-items-center justify-content-center h-100">
                                        <button
                                            class="btn bars-icon rounded-circle d-flex align-items-center justify-content-center d-block"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                            aria-controls="offcanvasRight">
                                            <i class="fa-solid fa-bars fa-lg" style="color: white;"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-3 d-none d-lg-block">
                                    <div class="h-100 d-flex align-items-center">
                                        <a href="shopping.php" class="text-white"><i
                                                class="fa-solid fa-cart-shopping fa-md"></i></a>
                                    </div>
                                </div>
                                <div class="col-8 col-md-5 col-lg-4">
                                    <div
                                        class="social-media h-100 d-flex justify-content-center justify-content-lg-end align-items-center gap-3">
                                        <a href="shopping.php" class="text-white" target="_blank"><i
                                                class="fa-solid fa-cart-shopping fa-md d-lg-none"></i></a>
                                        <a href="https://www.instagram.com/fenmaktoob" class="insta text-white" target="_blank"><i class="fa-brands fa-instagram fa-md"></i></a>
                                        <a href="https://www.facebook.com/fenmaktoob" class="facebook text-white"> <i class="fa-brands fa-facebook fa-md"></i></a>
                                        <a href="#" class="twitter text-white" target="_blank"><i class="fa-brands fa-x-twitter fa-md"></i></a>
                                        <a href="https://www.youtube.com/channel/UCqRwk9H1LpfuL9akiByUnJA" class="youtube text-white" target="_blank"><i class="fa-brands fa-youtube fa-md"></i></a>
                                    </div>
                                </div>
                                <div class="col-2 d-md-none">
                                    <div class="text-center">
                                        <button class="search-inp rounded-circle border-0 text-center" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="fas fa-search fa-md"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-2 d-none d-md-block">
                                    <div class="d-flex align-items-center justify-content-center h-100"><input
                                            type="search" class="text-center" placeholder="بحث">
                                    </div>
                                </div>
                                <div class="col-3 col-lg-2 d-none d-md-block">
                                    <div class="d-flex align-items-center h-100">
                                        <a class="lang d-block border-0 text-decoration-none" href="">
                                            <img class="me-1" src="./imgs/united-kingdom.png" alt="flag">English
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-md-block col-12">
                            <nav class="navbar navbar-expand-lg navbar-light py-2 py-lg-0 bg-lg-white h-lg-100">
                                <div class="container-fluid h-lg-100">
                                    <a></a>
                                    <button class="navBtn d-lg-none" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#bs-example-navbar-collapse-1" aria-controls="navbarNav"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <div class="nav-bars d-flex flex-column gap-1">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </div>
                                    </button>
                                    <div class="collapse navbar-collapse h-lg-100 py-md-"
                                        id="bs-example-navbar-collapse-1">
                                        <ul class="navbar-nav h-lg-100 gap-xl-3">
                                            <li class="nav-item">
                                                <a class="nav-link h-lg-100 d-flex align-items-center" href="index.php"
                                                    title="الرئيسية">الرئيسية</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link h-lg-100 d-flex align-items-center" href="aboutus.php"
                                                    title="عن فنمكتوب">عن فنمكتوب</a>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link h-lg-100 d-flex align-items-center" href="store.php"
                                                    title="لاقتناء المنتجات">لاقتناء المنتجات</a>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link h-lg-100 d-flex align-items-center" href="services.php"
                                                    title="أكاديمية فنمكتوب">أكاديمية فنمكتوب</a>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link h-lg-100 d-flex align-items-center" href="wholesale.php"
                                                    title="لطلبات الجملة">لطلبات الجملة</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link  h-lg-100 d-flex align-items-center"
                                                    href="friendly-websites.php" title="مواقع صديقة">مواقع صديقة</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link  h-lg-100 d-flex align-items-center"
                                                    href="contactus.php" title="اتصل بنا">اتصل بنا</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">ابحث في الموقع</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="d-flex"><input type="search" class="d-block mx-auto text-center" placeholder="بحث">
                            <button class="search-inp border-0  d-block" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="side-bar">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-body">
                <div class="w-100">
                    <button class="btnClose d-block ms-auto" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="fa-solid fa-x "></i>

                    </button>
                </div>
                <div class="logo-container text-center mb-3">
                    <img src="./imgs/fenmaktoob.png" style="width: 200px;" alt="logo">
                </div>
                <div class="hr"></div>
                <div>
                    <h4 class="text-center">أقسام الموقع</h4>
                    <ul class="sites">
                        <li class="cat-item text-center position-relative">
                            <a class="d-block text-white" href="index.php">أكاديمية فنمكتوب</a><span
                                class="cat-num ms-auto text-white">9</span>
                        </li>
                        <li class="cat-item text-center position-relative">
                            <a href="articles.php" class="d-block text-white">مقالاتنا</a><span class="cat-num text-white">9</span>
                        </li>
                        <li class="cat-item text-center position-relative">
                            <a href="distributor.php" class="d-block text-white">الموزع</a><span class="cat-num text-white">9</span>
                        </li>
                    </ul>
                </div>

                <div class="mt-4">
                    <h4 class="mb-3 text-center">كلمات مفتاحية</h4>
                    <div class="tags">
                        <a href="#">أغاني</a>
                        <a href="#">الأطفال</a>
                        <a href="#">التعليم بالأغاني</a>
                        <a href="#">الطفولة المبكرة</a>
                        <a href="#">القراءة</a>
                        <a href="#">اللغة العربية</a>
                        <a href="#">النشاطات التعليمية</a>
                        <a href="#">بعمر الطفولة</a>
                        <a href="#">درجات</a>
                        <a href="#">دندنة</a>
                        <a href="#">مهارة استيعاب المقروء</a>
                        <a href="#">نصائح للاباء و الأمهات</a>
                    </div>
                </div>

                <div class="mt-4 d-block d-md-none">
                    <ul class="side-list">
                        <li class="menu-item">
                            <a class="d-block" href="index.php" title="الرئيسية">الرئيسية</a>
                        </li>
                        <li class="menu-item">
                            <a class="d-block" href="aboutus.php" title="عن فنمكتوب">عن
                                فنمكتوب</a>
                        </li>
                        <li class="menu-item">
                            <a class="d-block" href="store.php" title="لاقتناء المنتجات">لاقتناء المنتجات</a>
                        </li>
                        <li class="menu-item">
                            <a class="d-block" href="services.php" title="أكاديمية فنمكتوب">أكاديمية فنمكتوب</a>
                        </li>
                        <li class="menu-item  d-flex flex-column gap-2">
                            <a class="d-block" href="wholesale.php" title="لطلبات الجملة">لطلبات الجملة</a>
                        </li>
                        <li class="menu-item">
                            <a class="d-block" href="friendly-websites.php" title="مواقع صديقة">مواقع صديقة</a>
                        </li>

                        <li class="menu-item">
                            <a class="d-block" href="contactus.php" title="اتصل بنا">اتصل بنا</a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


</body>

</html>