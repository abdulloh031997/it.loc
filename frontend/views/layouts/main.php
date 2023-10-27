<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="iTEST.uz,Online diagnostik test sinovlari uzbmb.uz, DTM testlar, itest.uz, test.itest.uz ">
    <meta name="keywords" content="iTEST.uz,Online diagnostik test sinovlari uzbmb.uz, DTM testlar itest.uz, test.itest.uz ">
    <meta name="author" content="iTEST">
    <link rel="shortcut icon" href="/images/fav.svg">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
<?php $this->beginBody() ?>
    <?= \frontend\widgets\Header::widget() ?>
        <?= $content ?>
    <?= \frontend\widgets\Footer::widget() ?>
<script>
    window.replainSettings = { id: 'eb45c394-1352-4d17-a391-40daba9864b9' };
    (function(u){var s=document.createElement('script');s.async=true;s.src=u;
        var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
    })('https://widget.replain.cc/dist/client.js');
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
