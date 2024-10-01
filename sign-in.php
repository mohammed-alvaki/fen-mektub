<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Page</title>

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

        a {
            text-decoration: none !important;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: #bbb !important;
        }

        #cont-section {
            padding: 10px 10px 50px 10px !important;
        }

        h3.cat-title {
            background-color: var(--pri-color);
            font-size: 1.5rem !important;
            border-radius: 10px;
        }

        .myRow {
            background-color: #eee;
            border-radius: 10px;
        }

        #cont-section .content p {
            font-size: 0.9rem;
        }

        .img-container img {
            width: 300px;
            max-width: 500px;
            border-radius: 10px;
        }

        #cont-section .content span {
            color: var(--light-purple);
        }

        #cont-section .content strong {
            color: var(--pri-color);
        }

        #cont-section :where(input,
            select):not(input[type="radio"]) {
            border-radius: 5px;
            padding: 7px;
            border: 0;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1);
            border-right: 5px solid var(--sec-color);
        }

        #cont-section :where(input,
            select):focus {
            outline: 0;
        }

        #cont-section .btnSubmit {
            background-color: var(--sec-color);
            border-radius: 5px;
            font-size: 1.2rem;
            transition: all 0.2s linear;
        }

        #cont-section .btnSubmit:hover {
            background-color: white;
            color: var(--pri-color) !important;
        }

        #cont-section .accounts a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #cont-section .accounts a:first-child {
            background-color: #25D366;
        }

        #cont-section .accounts a:nth-child(2) {
            background-color: black;
        }

        #cont-section .accounts a:nth-child(3) {
            background-color: #4267B2;
        }

        #cont-section .accounts a i {
            color: white;
            font-size: 25px;
        }

        #cont-section div.rating {
            font-size: 0.9rem;
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
                                        class="text-decoration-none text-dark" href="services.php">أكاديمية
                                        فنمكتوب</a></li>
                                <li class="breadcrumb-item active fw-bold" aria-current="page"> لغة عربية – البرنامج
                                    الشّامل – للطلاب القدامى</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-11">
                    <h3 class="cat-title text-white mb-3 p-2"> لغة عربية – البرنامج الشّامل – للطلاب القدامى</h3>
                </div>
                <div class="col-12 col-xl-11">
                    <div class="img-container">
                        <img class="mb-4 w-100" src="./imgs/afnan-fenmaktoob-600x424.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>

        <section id="cont-section" class="mt-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11">
                        <div class="row justify-content-center myRow gx-sm-0">
                            <div class="col-12">
                                <div class="content  mt-3 mb-4 p-3">
                                    <p>يهدف البرنامج إلى تطوير اللغة العربية للمتعلم وتمليكها إياه، عن طريق مهارات
                                        الاستماع
                                        والمحادثة والقراءة واستيعاب المقروء.
                                    </p>
                                    <p>يهدف البرنامج إلى تطوير اللغة العربية للمتعلم وتمليكها إياه، عن طريق مهارات
                                        الاستماع
                                        والمحادثة والقراءة واستيعاب المقروء.
                                    </p>
                                    <p><span>– مواعيد الدروس : </span>أيام السبت والأحد بين الساعة (5:00 – 9:00) حسب
                                        توقيت
                                        استنبول</p>
                                    <p><span>– الشريحة العمرية :</span> من 6 إلى 16 سنة</p>
                                    <p><span>– المنهج المستخدم:</span>منهج مكنون (المنهج من إنتاج فنمكتوب).</p>
                                    <p><span>– متطلبات مسبقة</span> لا يوجد</p>
                                    <strong>– تكلفة البرنامج 240$ = بالدولار الكندي 324 CAD</strong>
                                    <p>يوجد حسومات خاصة للأخوة</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-10 pb-5 px-3 px-lg-0">
                                <form action="">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-md-11 col-lg-6">
                                            <div class="mb-4">
                                                <p class="text-center mb-1" for="">الاسم الكامل</p>
                                                <input class="w-100" type="text" placeholder="اسم الطالب" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-11 col-lg-6">
                                            <div class="mb-4">
                                                <p class="text-center mb-1" for=""> تاريخ الميلاد</p>
                                                <input class="w-100" type="date" placeholder="اسم الطالب" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-11 col-lg-6">
                                            <div class="mb-4"> <label for="">الجنس:</label>
                                                ذكر <input name="gender" value="male" type="radio">
                                                أنثى<input name="gender" value="female" type="radio"></div>
                                        </div>
                                        <div class="col-12 col-md-11 col-lg-6">
                                            <div class="mb-4">
                                                <input class="w-100" type="text" placeholder="الصف" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-11 col-lg-4">
                                            <select class="mb-4 w-100" name="country">
                                                <option disabled selected>بلد الإقامة </option>
                                                <option value="أفغانستان">أفغانستان</option>
                                                <option value="ألبانيا">ألبانيا</option>
                                                <option value="الجزائر">الجزائر</option>
                                                <option value="أندورا">أندورا</option>
                                                <option value="أنغولا">أنغولا</option>
                                                <option value="أنتيغوا وباربودا">أنتيغوا وباربودا</option>
                                                <option value="الأرجنتين">الأرجنتين</option>
                                                <option value="أرمينيا">أرمينيا</option>
                                                <option value="أستراليا">أستراليا</option>
                                                <option value="النمسا">النمسا</option>
                                                <option value="أذربيجان">أذربيجان</option>
                                                <option value="البهاما">البهاما</option>
                                                <option value="البحرين">البحرين</option>
                                                <option value="بنغلاديش">بنغلاديش</option>
                                                <option value="باربادوس">باربادوس</option>
                                                <option value="بيلاروسيا">بيلاروسيا</option>
                                                <option value="بلجيكا">بلجيكا</option>
                                                <option value="بليز">بليز</option>
                                                <option value="بنين">بنين</option>
                                                <option value="بوتان">بوتان</option>
                                                <option value="بوليفيا">بوليفيا</option>
                                                <option value="البوسنة والهرسك ">البوسنة والهرسك </option>
                                                <option value="بوتسوانا">بوتسوانا</option>
                                                <option value="البرازيل">البرازيل</option>
                                                <option value="بروناي">بروناي</option>
                                                <option value="بلغاريا">بلغاريا</option>
                                                <option value="بوركينا فاسو ">بوركينا فاسو </option>
                                                <option value="بوروندي">بوروندي</option>
                                                <option value="كمبوديا">كمبوديا</option>
                                                <option value="الكاميرون">الكاميرون</option>
                                                <option value="كندا">كندا</option>
                                                <option value="الرأس الأخضر">الرأس الأخضر</option>
                                                <option value="جمهورية أفريقيا الوسطى ">جمهورية أفريقيا الوسطى </option>
                                                <option value="تشاد">تشاد</option>
                                                <option value="تشيلي">تشيلي</option>
                                                <option value="الصين">الصين</option>
                                                <option value="كولومبيا">كولومبيا</option>
                                                <option value="جزر القمر">جزر القمر</option>
                                                <option value="كوستاريكا">كوستاريكا</option>
                                                <option value="ساحل العاج">ساحل العاج</option>
                                                <option value="كرواتيا">كرواتيا</option>
                                                <option value="كوبا">كوبا</option>
                                                <option value="قبرص">قبرص</option>
                                                <option value="التشيك">التشيك</option>
                                                <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية
                                                </option>
                                                <option value="الدنمارك">الدنمارك</option>
                                                <option value="جيبوتي">جيبوتي</option>
                                                <option value="دومينيكا">دومينيكا</option>
                                                <option value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
                                                <option value="تيمور الشرقية ">تيمور الشرقية </option>
                                                <option value="الإكوادور">الإكوادور</option>
                                                <option value="مصر">مصر</option>
                                                <option value="السلفادور">السلفادور</option>
                                                <option value="غينيا الاستوائية">غينيا الاستوائية</option>
                                                <option value="إريتريا">إريتريا</option>
                                                <option value="إستونيا">إستونيا</option>
                                                <option value="إثيوبيا">إثيوبيا</option>
                                                <option value="فيجي">فيجي</option>
                                                <option value="فنلندا">فنلندا</option>
                                                <option value="فرنسا">فرنسا</option>
                                                <option value="الغابون">الغابون</option>
                                                <option value="غامبيا">غامبيا</option>
                                                <option value="جورجيا">جورجيا</option>
                                                <option value="ألمانيا">ألمانيا</option>
                                                <option value="غانا">غانا</option>
                                                <option value="اليونان">اليونان</option>
                                                <option value="جرينادا">جرينادا</option>
                                                <option value="غواتيمالا">غواتيمالا</option>
                                                <option value="غينيا">غينيا</option>
                                                <option value="غينيا بيساو">غينيا بيساو</option>
                                                <option value="غويانا">غويانا</option>
                                                <option value="هايتي">هايتي</option>
                                                <option value="هندوراس">هندوراس</option>
                                                <option value="المجر">المجر</option>
                                                <option value="آيسلندا">آيسلندا</option>
                                                <option value="الهند">الهند</option>
                                                <option value="إندونيسيا">إندونيسيا</option>
                                                <option value="إيران">إيران</option>
                                                <option value="العراق">العراق</option>
                                                <option value="جمهورية أيرلندا ">جمهورية أيرلندا </option>
                                                <option value="فلسطين">فلسطين</option>
                                                <option value="إيطاليا">إيطاليا</option>
                                                <option value="جامايكا">جامايكا</option>
                                                <option value="اليابان">اليابان</option>
                                                <option value="الأردن">الأردن</option>
                                                <option value="كازاخستان">كازاخستان</option>
                                                <option value="كينيا">كينيا</option>
                                                <option value="كيريباتي">كيريباتي</option>
                                                <option value="الكويت">الكويت</option>
                                                <option value="قرغيزستان">قرغيزستان</option>
                                                <option value="لاوس">لاوس</option>
                                                <option value="لاوس">لاوس</option>
                                                <option value="لاتفيا">لاتفيا</option>
                                                <option value="لبنان">لبنان</option>
                                                <option value="ليسوتو">ليسوتو</option>
                                                <option value="ليبيريا">ليبيريا</option>
                                                <option value="ليبيا">ليبيا</option>
                                                <option value="ليختنشتاين">ليختنشتاين</option>
                                                <option value="ليتوانيا">ليتوانيا</option>
                                                <option value="لوكسمبورغ">لوكسمبورغ</option>
                                                <option value="مدغشقر">مدغشقر</option>
                                                <option value="مالاوي">مالاوي</option>
                                                <option value="ماليزيا">ماليزيا</option>
                                                <option value="جزر المالديف">جزر المالديف</option>
                                                <option value="مالي">مالي</option>
                                                <option value="مالطا">مالطا</option>
                                                <option value="جزر مارشال">جزر مارشال</option>
                                                <option value="موريتانيا">موريتانيا</option>
                                                <option value="موريشيوس">موريشيوس</option>
                                                <option value="المكسيك">المكسيك</option>
                                                <option value="مايكرونيزيا">مايكرونيزيا</option>
                                                <option value="مولدوفا">مولدوفا</option>
                                                <option value="موناكو">موناكو</option>
                                                <option value="منغوليا">منغوليا</option>
                                                <option value="الجبل الأسود">الجبل الأسود</option>
                                                <option value="المغرب">المغرب</option>
                                                <option value="موزمبيق">موزمبيق</option>
                                                <option value="بورما">بورما</option>
                                                <option value="ناميبيا">ناميبيا</option>
                                                <option value="ناورو">ناورو</option>
                                                <option value="نيبال">نيبال</option>
                                                <option value="هولندا">هولندا</option>
                                                <option value="نيوزيلندا">نيوزيلندا</option>
                                                <option value="نيكاراجوا">نيكاراجوا</option>
                                                <option value="النيجر">النيجر</option>
                                                <option value="نيجيريا">نيجيريا</option>
                                                <option value="كوريا الشمالية ">كوريا الشمالية </option>
                                                <option value="النرويج">النرويج</option>
                                                <option value="سلطنة عمان">سلطنة عمان</option>
                                                <option value="باكستان">باكستان</option>
                                                <option value="بالاو">بالاو</option>
                                                <option value="بنما">بنما</option>
                                                <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
                                                <option value="باراغواي">باراغواي</option>
                                                <option value="بيرو">بيرو</option>
                                                <option value="الفلبين">الفلبين</option>
                                                <option value="بولندا">بولندا</option>
                                                <option value="البرتغال">البرتغال</option>
                                                <option value="قطر">قطر</option>
                                                <option value="جمهورية الكونغو">جمهورية الكونغو</option>
                                                <option value="جمهورية مقدونيا">جمهورية مقدونيا</option>
                                                <option value="رومانيا">رومانيا</option>
                                                <option value="روسيا">روسيا</option>
                                                <option value="رواندا">رواندا</option>
                                                <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>
                                                <option value="سانت لوسيا">سانت لوسيا</option>
                                                <option value="سانت فنسينت والجرينادينز">سانت فنسينت والجرينادينز</option>
                                                <option value="ساموا">ساموا</option>
                                                <option value="سان مارينو">سان مارينو</option>
                                                <option value="ساو تومي وبرينسيب">ساو تومي وبرينسيب</option>
                                                <option value="السعودية">السعودية</option>
                                                <option value="السنغال">السنغال</option>
                                                <option value="صربيا">صربيا</option>
                                                <option value="سيشيل">سيشيل</option>
                                                <option value="سيراليون">سيراليون</option>
                                                <option value="سنغافورة">سنغافورة</option>
                                                <option value="سلوفاكيا">سلوفاكيا</option>
                                                <option value="سلوفينيا">سلوفينيا</option>
                                                <option value="جزر سليمان">جزر سليمان</option>
                                                <option value="الصومال">الصومال</option>
                                                <option value="جنوب أفريقيا">جنوب أفريقيا</option>
                                                <option value="كوريا الجنوبية">كوريا الجنوبية</option>
                                                <option value="جنوب السودان">جنوب السودان</option>
                                                <option value="إسبانيا">إسبانيا</option>
                                                <option value="سريلانكا">سريلانكا</option>
                                                <option value="السودان">السودان</option>
                                                <option value="سورينام">سورينام</option>
                                                <option value="سوازيلاند">سوازيلاند</option>
                                                <option value="السويد">السويد</option>
                                                <option value="سويسرا">سويسرا</option>
                                                <option value="سوريا">سوريا</option>
                                                <option value="طاجيكستان">طاجيكستان</option>
                                                <option value="تنزانيا">تنزانيا</option>
                                                <option value="تايلاند">تايلاند</option>
                                                <option value="توغو">توغو</option>
                                                <option value="تونجا">تونجا</option>
                                                <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
                                                <option value="تونس">تونس</option>
                                                <option value="تركيا">تركيا</option>
                                                <option value="تركمانستان">تركمانستان</option>
                                                <option value="توفالو">توفالو</option>
                                                <option value="أوغندا">أوغندا</option>
                                                <option value="أوكرانيا">أوكرانيا</option>
                                                <option value="الإمارات العربية المتحدة">الإمارات العربية المتحدة</option>
                                                <option value="المملكة المتحدة">المملكة المتحدة</option>
                                                <option value="الولايات المتحدة">الولايات المتحدة</option>
                                                <option value="أوروغواي">أوروغواي</option>
                                                <option value="أوزبكستان">أوزبكستان</option>
                                                <option value="فانواتو">فانواتو</option>
                                                <option value="فنزويلا">فنزويلا</option>
                                                <option value="فيتنام">فيتنام</option>
                                                <option value="اليمن">اليمن</option>
                                                <option value="زامبيا">زامبيا</option>
                                                <option value="زيمبابوي">زيمبابوي</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-11 col-lg-4">
                                            <div class="mb-4">
                                                <input class="w-100" type="text" placeholder="اسم الأب" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-11 col-lg-4">
                                            <div class="mb-4">
                                                <input class="w-100" type="text" placeholder="اسم الأم" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-11 col-lg-6">
                                            <div class="mb-4">
                                                <input class="w-100 text-start" type="tel" placeholder="رقم الهاتف" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-11 col-lg-6">
                                            <div class="mb-4">
                                                <input class="w-100 text-start" type="tel" placeholder="رقم هاتف احتياطي" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-11 col-lg-6">
                                            <div class="rating mb-4 mb-lg-0">
                                                <p>وصف الطالب من حيث اللغة :</p>
                                                <input type="radio" name="rating" value="option1"> يفهم ويتحدث القليل<br>
                                                <input type="radio" name="rating" value="option2"> يفهم ولا يتحدث<br>
                                                <input type="radio" name="rating" value="option3"> لا يفهم ولا يتحدث<br>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-11 col-lg-6 text-center">
                                            <button type="submit" class="btnSubmit px-4 py-1 border-0 text-white fw-bold">سجل</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-4 justify-content-center myRow gx-sm-0">
                            <div class="col-12">
                                <div class="accounts p-3">
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
                </div>
            </div>
        </section>

    </main>

    <?php include "footer.php"; ?>

</body>

</html>