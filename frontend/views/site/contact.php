<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = ' Biz bilan istalgan vaqtda bog\'laning';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact container my-5" style="min-height: 75vh;">
    <h4><?= Html::encode($this->title) ?></h4>

    <div class="row my-5 pt-5 d-flex align-items-center">
        <div class="col-md-6">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'email') ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'subject') ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'body')->textarea(['rows' => 3]) ?>
                    <div class="form-group">
                        <?= Html::submitButton('Jo\'natish', ['class' => 'btn btn-outline-success', 'name' => 'contact-button']) ?>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-md-6">
            <p style="line-height: 28px; "><span style="font-family: sans-serif; color: #30c0c0;font-size: large"> <i
                            class="fa fa-phone"></i> +998 (99) 252-10-20 </span></p>
            <p style="line-height: 28px; "><span style="font-family: sans-serif; color: #30c0c0;font-size: large"> <i
                            class="fa fa-mail-bulk"></i> itestaloqa@gmail.com </span></p>
            <p style="line-height: 28px; "><span style="font-family: sans-serif; color: #30c0c0;font-size: large"> <i
                            class="fa fa-map-marked"></i>  O'zbekiston, Toshkent sh, Yunusobod 8, Rixsliy k, 49/47 </span>
            </p>
            <div class="mt-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11976.570115308901!2d69.27779!3d41.370988!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8dce1241b56b%3A0xd91eaa19b0bb32b!2sOrient%20Software%20Team!5e0!3m2!1sen!2sus!4v1688253709840!5m2!1sen!2sus"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

</div>
