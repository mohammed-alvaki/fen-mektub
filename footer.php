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

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Link Swiper's CSS -->
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

        footer {
            background-image: url("./imgs/bgg.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-top: 3px solid var(--sec-color);
        }

        footer .hr {
            height: 2px;
            background-image: linear-gradient(to right, transparent, black, transparent);
            border-radius: 50%;
            margin-bottom: 10px;
            width: 100%;
        }

        footer .btn-subscribe {
            background-color: var(--sec-color);
            font-size: 0.9rem;
            transition: all 0.2s linear;
        }

        footer .btn-subscribe:hover {
            background-color: white;
            color: var(--pri-color) !important;
        }

        footer .rights {
            background-color: var(--pri-color);
            color: white;
        }

        footer .rights a {
            text-decoration: none;
            color: var(--sec-color);
        }

        footer h5 {
            font-weight: bold;
        }

        footer .footer-menu-container a {
            text-decoration: none;
            background-color: var(--pri-color);
            padding: 5px 8px;
            border-radius: 2px;
            margin: 5px;
            color: white;
            transition: all 0.2s linear;
        }

        footer .footer-menu-container a:hover {
            background-color: var(--sec-color);
        }

        .back {
            position: fixed;
            left: 20px;
            bottom: 20px;
            display: none;
            z-index: 20000;
        }

        .back span {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #eee;
            border: 5px solid var(--sec-color);
        }

        .back i {
            transition: all 0.2s linear;
        }

        .back span:hover i {
            color: var(--sec-color);
        }

        .whatsapp {
            background-color: #58b501;
            padding: 7px 10px;
            display: inline-block;
            position: fixed;
            bottom: 10px;
            right: 20px;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
    </style>
</head>

<body>

    <footer class="pt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row justify-contnent-center">
                        <div class="col-11 col-md-6 col-lg-3">
                            <div class="mb-4 mb-md-0">
                                <h5 class="text-center">الاشتراك بالقائمة البريدية</h5>
                                <div class="hr mb-3"></div>
                                <form action="">
                                    <div class="input-group mb-3">
                                        <div class="input-group-text" id="btnGroupAddon">@</div>
                                        <input type="text" class="form-control text-center" placeholder="البريد الاكتروني"
                                            aria-label="البريد الاكتروني" aria-describedby="btnGroupAddon">
                                    </div>
                                    <button type="submit" class="btn-subscribe mx-auto d-block text-white border-0 py-1 px-3 fw-bold"><i
                                            class="fa-solid fa-plus"></i>
                                        اشتراك</button>
                                </form>
                            </div>
                        </div>
                        <div class="d-none d-md-block col-md-4 col-lg-3 ms-auto"><img src="./imgs/fenmaktoob.png" alt="logo"
                                style="width: 220px;">
                        </div>
                        <div class="col-12 d-none d-md-block">
                            <div class="footer-menu-container d-flex justify-content-center flex-wrap text-center my-3">
                                <a href="index.php">الرئيسية</a>
                                <a href="aboutus.php">عن فنمكتوب</a>
                                <a href="privacy.php">سياسة الخصوصية</a>
                                <a href="contactus.php">اتصل بنا</a>
                                <a href="wholesale.php">لطلبات الجملة </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rights text-center py-3 fw-bold">
            &copy; جميع الحقوق محفوظة
            <a href="index.php" title="فنمكتوب">فنمكتوب</a>
            |
            برمجة وتصميم :
            <a href="https://planet-www.com" target="_blank" title="بلانت للبرمجة والتصميم">Planet WWW</a>
        </div>

    </footer>

    <div class="whatsapp rounded-pill">
        <a href="https://wa.me/+905537338097" target="_blank"
            class="d-flex align-items-center gap-1 text-decoration-none text-white fw-bold">
            <img src="./imgs/whatsapp-icon.png" alt="Whatsapp" />
            مباشر
        </a>
    </div>

    <div class="back">
        <span class="d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-angle-up fa-xl"></i></span>
    </div>

    <script>
        const btnBack = document.querySelector(".back");

        window.addEventListener("scroll", function() {
            if (window.scrollY > 10) {
                btnBack.style.display = "block";
            } else {
                btnBack.style.display = "none";
            }
        });
        btnBack.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>


</body>

</html>