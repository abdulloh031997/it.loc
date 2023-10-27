<style>
    @media (max-width: 960px) {
        #mheader {
            width: 100%;
        }
    }
</style>

<header id="header-section">
    <div class="container-fluid text-white">
        <div class="row">
            <div class="com-md-12">
                <div class="container">
                    <div class="row d-flex justify-content-between align-items-center py-1">
                        <div class="col-md-6">
                            <div class="info_site">
                                <span><a href="#">itestaloqa@gmail.com</a></span>
                                <span><a href="#">+998 (99) 252-10-20</a></span>
                            </div>
                        </div>
                        <div class="col-md-6 text-end">
                            <a class="dropdown-toggle nav-link text-white" href="#" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <span class="user-icon text-white">
                                    <img class="flag-icon" src="/images/<?= Yii::$app->language ?>.svg"
                                         alt="<?= Yii::$app->language ?>" width="30px">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
        <div class="container">
            <div class="navbar-brand-wrapper d-flex justify-content-between" id="mheader">
                <div>
                    <a href="/"><img src="/images/logo.svg" alt=""></a>
                </div>
                <div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars navbar-toggler-icon" style="color: #06f3f3;"></i>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                    <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                        <div class="navbar-collapse-logo">
                            <a href="/"><img src="/images/logo.svg" alt=""></a>
                        </div>
                        <button class="navbar-toggler close-button" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa-solid fa-xmark navbar-toggler-icon pl-5"></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= Yii::$app->request->url == '/' ? 'active' : '' ?>" href="/">Bosh sahifa
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= Yii::$app->request->url == '/site/about' ? 'active' : '' ?>"
                           href="/site/about">Tizim haqida</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= Yii::$app->request->url == '/site/contact' ? 'active' : '' ?>"
                           href="/site/contact">Bog'lanish</a>
                    </li>
                    <li class="nav-item pl-5">
                        <a class="btn btn_info  border btn-sm" target="_blank" href="https://test.itest.uz"><i
                                    class="fas fa-user-alt"></i> Tizimga kirish</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="btn btn_light border btn-sm " target="_blank"
                           href="https://test.itest.uz/#/sign-up"><i class="fas fa-user-plus"></i> Ro'yxatdan o'tish</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>