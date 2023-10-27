<?php

/** @var yii\web\View $this */

$this->title = 'iTEST.uz';
?>
<style>
    @media (max-width: 920px) {
        .btn_info{
            font-size: 18px !important;
        }
        #text_video{
            display: none !important;
        }
    }
</style>

<div class="banner"
     style="background-image: url('images/bg.png'); background-size:100% 100%;background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 py-5 mt-4">
                <h1 class="font-weight-semibold" style="color: #ffffff; font-size: 64px; font-weight: 900">O'z
                    bilimingni</h1>
                <h6 class="font-weight-normal pb-3"
                    style="color: #ffffff !important;font-weight: bold !important;">
                    <div>
                        <a href="http://test.itest.uz" style="color: #ffffff !important;font-weight: bold !important;">
                            <div style="background: #30BDC0; border-radius:50px;padding: 14px;font-size: 28px ">
                                sinab ko'rishning qulay imkoniyati
                            </div>
                        </a>
                    </div>
                    <p class="pt-2">
                        Tanlagan fanlaringiz bo'yicha barcha testlarni yechib chiqing va bonus variantlarga ega bo'ling
                    </p>
                </h6>
                <div class="text-left">
                    <a href="https://play.google.com/store/apps/details?id=uz.itests.dtests" target="_blank">
                        <img src="images/googleplay.png" alt=""></a>
<!--                    <a href=""> <img src="images/appstor.png" alt=""></a>-->
                </div>
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <div>
                        <a href="#" class="play-button d-flex justify-content-between">
                            <div class="pulse-holder" data-toggle="modal" data-target="#exampleModalCenter">
                                <img src="images/play-button.svg" alt="Play">
                            </div>
                            <div class="font-weight-bold mx-4" id="text_video">
                                Videoni ko'rish
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="http://test.itest.uz" class="btn btn_info font-weight-bold" style="font-size: 24px">Testni
                            boshlash <i
                                    class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pt-3 text-end">
                <img src="images/ipad-2.png" width="100%" alt="">
            </div>
        </div>
    </div>
</div>
</div>
<div class="content-wrapper">
    <div class="container">
        <section class="features-overview" id="features-section">
            <div class="content-header">
                <h4>Bizning xizmatlarimiz</h4>
                <h6 class="section-subtitle text-muted">iTest.uz sizga Test sinovlariga tayyorgarlik ko'rishda yaqindan
                    ko’makchi bo’ldi</h6>
            </div>
            <div class="d-md-flex justify-content-between">
                <div class="col-md-4 mb-3">
                    <div class="card shadow">
                        <div class="card-title p-3">
                            <h6 class="title_service">Majburiy fanlar <span class="text-dark"><small>(Ona tili, Matematika, O'zbekiston tarixi)</small></span>
                            </h6>
                            <div style="height: 45px">
                                <small>
                                    Har bir variantda 3 ta majburiy fan bo'lib, har bir fandan 10 tadan, jami 30 savol
                                    mavjud.
                                </small>
                            </div>
                        </div>
                        <div>
                            <a href="http://test.itest.uz">
                                <div class="enter-bg">
                                    <div><span>10 000 so'm</span></div>
                                    <div><span>Sotib olish</span> <span><i class="fa fa-arrow-right"></i></span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card shadow">
                        <div class="card-title p-3">
                            <h6 class="title_service">Fanlar majmuasining to’liq varianti.</h6>
                            <div style="height: 45px">
                                <small>Har bir variantlarda 3 ta majburiy va 2 ta mutaxassislik fani bo'lib, jami 90 ta
                                    savoldan iborat.</small>
                            </div>
                        </div>
                        <div>
                            <a href="http://test.itest.uz">
                                <div class="enter-bg">
                                    <div><span>20 000 so'm</span></div>
                                    <div><span>Sotib olish</span> <span><i class="fa fa-arrow-right"></i></span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card shadow">
                        <div class="card-title p-3">
                            <h6 class="title_service">Mutaxassislik fanlari bo'yicha</h6>
                            <div style="height: 45px"><small>Har bir variantda 1 ta mutaxassislik fan bo’ladi savollar
                                    soni 30 ta</small>
                            </div>
                        </div>
                        <div>
                            <a href="http://test.itest.uz">
                                <div class="enter-bg">
                                    <div><span>10 000 so'm</span></div>
                                    <div><span>Sotib olish</span> <span><i class="fa fa-arrow-right"></i></span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="customer-feedback pt-5" id="feedback-section">
            <div class="row">
                <div class="col-12 text-center pb-5">
                    <h4>Eng ko'p beriladigan savollar ?</h4>
                </div>
            </div>
            <div class="row align-items-center d-flex">
                <div class="col-md-5">
                    <img src="images/qa.png" width="100%" alt="">
                </div>
                <div class="col-md-7">
                    <div id="accordion">
                        <div class="card my-1">
                            <div class="card-header collapse_header" id="headingOne">
                                <h5 class="mb-0">
                                    <div class="btn btn-link text-md-left w-100 collapse_header_text"
                                         data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                         aria-controls="collapseOne">
                                        iTest dan qanday foydalaniladi?
                                    </div>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordion">
                                <div class="card-body"> 1. iTest dan foydalanishni boshlash uchun saytda ro‘yxatdan
                                    o‘tish (o’z akkauntingizni yaratish) kerak. Saytda ro'yxatdan o'tish tez va qulay.
                                    <br> 2. Roʻyxatdan oʻtganingizdan soʻng saytimizning barcha imkoniyatlari bilan
                                    tanishishingiz, bepul test variantlarini ishlab ko’rishingiz mumkin. <br> 3. Agar
                                    sizga sayt yoqsa, o’zingizga kerakli fanlar majmuasini tanlab test topshiriqlari
                                    variantlarini harid qilishingiz mumkin. Variantlarni sotib olganingizdan so'ng, siz
                                    24/7 rejimida hohlagan vaqtingizda test variantlarni ishlashingiz va
                                    natijalaringizni ko’rishingiz mumkin.
                                </div>
                            </div>
                        </div>

                        <div class="card my-1">
                            <div class="card-header collapse_header" id="headingTwo">
                                <h5 class="mb-0">
                                    <a class="btn btn-link text-md-left w-100 collapse_header_text collapsed"
                                       data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                       aria-controls="collapseTwo">
                                        Hisobimda mablag’ bo’lmasa ham platformadan foydalana olamanmi?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    Ha, lekin to'liq emas. Siz platformadagi bepul test variantlarini bilan ishlashingiz
                                    na’munaviy testlarni yechib ko’rishingiz va oldinlari sotib olgan variantlaringizni
                                    ko’rib chiqishingiz mumkin. Agar siz bizning saytimizni foydali deb bilsangiz,
                                    kelajakda siz unga obuna bo'lishingiz va har bir fandan test variantlarni barcha
                                    bosqichlarini ishlab chiqish huquqiga ega bo'lishingiz mumkin.
                                </div>
                            </div>
                        </div>
                        <div class="card my-1">
                            <div class="card-header collapse_header" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="btn btn-link text-md-left w-100 collapse_header_text collapsed"
                                       data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                       aria-controls="collapseThree">
                                        iTest.uz variantlarida nechtadan savol bo’ladi?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                 data-parent="#accordion">
                                <div class="card-body"> Test savollari soni siz qaysi ta’lim turiga o’qishga kirishga
                                    tayyorgarlik ko’rayotganligingizga bog’liq. <br> Masalan siz oliy ta’lim
                                    muassasalariga o’qishga tayyorlanayotgan bo’lsangiz. <br> Sizga tanlagan fanlar
                                    majmuangizga va unga tegishli Majburiy fanlardan 10 tadan, Mutahassislik fanlaridan
                                    30 tadan test topshiriqlari bo’ladi.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="customer-feedback pt-4" id="feedback-section">
            <div class="row" id="partner">
                <div class="col-12 text-center ">
                    <h4>Bizning hamkorlar</h4>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="images/uzbmb.svg" width="100%" height="50" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="images/payme-logo.svg" width="100%" height="50" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="images/click.png" width="100%" height="50" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="images/uzum-footer.png" width="100%" height="50" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="images/idu.png" width="100%" height="50" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="images/logo.png" width="100%" height="50" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="customer-feedback" id="feedback-section">
            <div class="row">
                <div class="col-12 text-center">
                    <h4>Biz haqimizda foydalanuvchilar fikri</h4>
                </div>
                <div class="owl-carousel owl-theme" id="feedback">
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="images/person.png" width="89" height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Kasbim o'qituvchi. Har yili ko'plab shogirdlarim o'qishga
                                    topshiradi.
                                    Qayerda va qanday mutaxassislik bo'yicha o'qish insonni kelajakdagi birinchi eng
                                    muhim qadami deb hisoblayman.
                                    Shuning uchun o'quvchilarimga diagnostik testlar orqali bilimlarini sinab ko'rish va
                                    testlar bilan ishlash ko'nikmalarini oshirishlarini tavsiya etib kelaman.
                                    <br>
                                    iTest.uz buning uchun juda yaxshi imkoniyat.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Doniyor Jo'rayev</h6>
                                <h6 class="customer-designation text-muted m-0" style="color: #06f3f3 !important">Google
                                    Play Store</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="images/person.png" width="89" height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Fanzandim bir yildan beri ikkita fandan o'quv kurslariga
                                    qatnaydi.
                                    Kurslarda qanday o'qiyotganligini endi itest.uz da test ishlatib ko'rib doimiy
                                    tekshirib boryapman.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Nodira opa (Noila Esonalievani onasi)</h6>
                                <h6 class="customer-designation text-muted m-0" style="color: #06f3f3 !important">App
                                    Store</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="images/person.png" width="89" height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Sinfdoshlarim bilan telefonimizda itest.uz orqali
                                    bittadan variant ishlab bilimimizni sinab ko'rish uchun musobaqalashdik. Barchamiz
                                    bu yil abituriyentmiz. Kim ko'p ball
                                    to'plasa, o'qituvchimiz kitob sovg'a qilishlarini aytgandilar, Kitobni albatta man
                                    yutdim :), Barcha sinifdoshlarimga kelgusida talaba bo'lishlarini tilab qolaman.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Muhammad Mo'minjonov</h6>
                                <h6 class="customer-designation text-muted m-0" style="color: #06f3f3 !important">App
                                    Store</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="contact-us mb-5" id="contact-section">
            <div class="ios">
                <div class="row d-flex justify-content-center align-items-center m-auto" id="bannermobile">
                    <div class="col-12 col-md-8 text-center">
                        <div><small>Dasturni hoziroq yuklab oling</small></div>
                        <h4><small>iOS va Android uchun mukammal
                                va qulay mobil dastur</small></h4>
                        <div>
                            <a href="https://play.google.com/store/apps/details?id=uz.itests.dtests" target="_blank">
                                <img src="images/googleplay.png" alt=""></a>
                            <a href=""> <img src="images/appstor.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center" data-aos="fade-up">
                        <div class="text-center w-100">
                            <img src="images/mbanner.png" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-details" id="contact-details-section">
            <div class="row text-center text-md-left">
                <div class="col-12 col-md-6 col-lg-3 grid-margin">
                    <img src="images/logo.svg" alt="" class="pb-2">
                    <div class="pt-2">
                        <p class="text-muted m-0"> itestaloqa@gmail.com </p>
                        <p class="text-muted m-0"> +998 (99) 252-10-20 </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 grid-margin">
                    <h5 class="pb-2">Bizning ijtimoiy tarmoqlar</h5>
                    <div class="d-flex justify-content-center justify-content-md-start">
                        <a href="https://t.me/itestuz_official" class="mx-2"><i class="fa-brands fa-lg fa-telegram"></i></a>
                        <a href="https://t.me/itestuz_official" class="mx-2"><i
                                    class="fa-brands fa-lg fa-instagram"></i></span></a>
                        <a href="https://t.me/itestuz_official" class="mx-2"><i
                                    class="fa-brands fa-lg fa-facebook"></i></span></a>
                        <a href="https://t.me/itestuz_official" class="mx-2"><i
                                    class="fa-brands fa-lg fa-twitter"></i></span></a>
                        <a href="https://t.me/itestuz_official" class="mx-2"><i
                                    class="fa-brands fa-lg fa-tiktok"></i></span></a>
                        <a href="https://t.me/itestuz_official" class="mx-2"><i
                                    class="fa-brands fa-lg fa-youtube"></i></span></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 grid-margin">
                    <h5 class="pb-2">Bizning bo'limlar</h5>
                    <a href="/"><p class="m-0 pb-2">Bosh sahifa</p></a>
                    <a href="/site/about"><p class="m-0 pt-1 pb-2">Tizim haqida</p></a>
                    <a href="/site/terms-of-use"><p class="m-0 pt-1 pb-2">Foydalanish shartlari</p></a>
                    <a href="/site/privacy-policy"><p class="m-0 pt-1">Maxfiylik siyosati</p></a>
                    <a href="/site/contact"><p class="m-0 pt-2">Bog'lanish</p></a>
                </div>
                <div class="col-12 col-md-6 col-lg-3 grid-margin">
                    <h5 class="pb-2">Bizning manzil</h5>
                    <p class="text-muted"> O'zbekiston, Toshkent sh, Yunusobod 8, Rixsliy k, 49/47 </p>

                </div>
            </div>
        </section>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  bd-example-modal-lg" role="document">
        <div class="modal-content w-100">
            <div class="modal-header" style="background: #30C0C0">
                <h5 class="modal-title text-white" id="exampleModalLongTitle">Ro‘yxatdan o‘tish uchun qo‘llanma</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-0 p-0">
                <video width="100%" height="100%" controls>
                    <source src="images/reg.mp4" type="video/mp4">
                    <source src="reg.ogg" type="video/ogg">
                </video>
            </div>
        </div>
    </div>
</div>