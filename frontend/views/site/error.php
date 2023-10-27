<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */

/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error container" style="height: 80vh">
    <div class="mt-5">
        <div class="alert alert-danger">
            <?= nl2br(Html::encode($message)) ?>
        </div>

    </div>

</div>
