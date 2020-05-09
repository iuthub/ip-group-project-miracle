<?php

use yii\bootstrap\ActiveForm;
use backend\models\Contacts;
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<section class="main">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.794496119297!2d69.21281921492545!3d41.33508250719989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8d77afbf273f%3A0x56def0d207980f7c!2s%22Miracle+Academy%22+Education+Centre!5e0!3m2!1suz!2s!4v1556941775713!5m2!1suz!2s"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div><!-- End of map -->
    <div class="form">
        <div class="container">
            <div class="text-center">
                <h1>Свяжитесь с нами</h1>
                <p>Кто-то с трудом понимает вашу креативную идею? Есть лучшая визуализация. Поделитесь с нами <br> своим
                    мнением, мы с нетерпением ждем от вас.</p>
            </div>

            <div class="container">
                <?php if (Yii::$app->session->hasFlash('success')): ?>
                    <div style="margin:5px 0 0 0;"
                         class="alert alert-success"><?= Yii::t('app', 'Благодарим Вас за обращение к нам. Мы ответим вам как можно скорее.') ?></div>
                <?php elseif (Yii::$app->session->hasFlash('error')): ?>
                    <div style="margin:5px 0 0 0;"
                         class="alert alert-danger"><?= Yii::t('app', 'При отправке электронной почты произошла ошибка.') ?></div>
                <?php else: ?>
                    <!--<p class="text-muted" style="text-align: left;"><?php //= Yii::$app->params['send-info'] ?></p>-->
                <?php endif; ?>
            </div>

            <?php $form = ActiveForm::begin(['options' => [
                'class' => 'contact__form'
            ]]); ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group fname">
                            <?= $form->field($model, 'full_name')->textInput() ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group email">
                            <?= $form->field($model, 'phone')->textInput() ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <?= $form->field($model, 'message')->textArea(array('rows' => 8, 'cols' => 5)) ?>
                            <div class="Submit_btn">

                             <!--version 2-->
                                                            <?= $form->field($model, 'reCaptcha')->widget(
                                                                \himiklab\yii2\recaptcha\ReCaptcha2::className(),
                                                                [
                                                                    'siteKey' => '6Le99dYUAAAAAO6VHFsPT7zZhSPTUde19IogtFw0', // unnecessary is reCaptcha component was set up
                                                                ]
                                                            ) ?>

<!--                                --><?php
                                   //= $form->field($model, 'reCaptcha')->widget(
//                                    \himiklab\yii2\recaptcha\ReCaptcha3::className(),
//                                    [
//                                        'siteKey' => '6LeN9tYUAAAAAMUOaLaj-qFaCfH2Ee3WtKF6xNf6', // unnecessary is reCaptcha component was set up
//                                        'action' => 'homepage',
//                                    ]
//                                ) ?>

                                <?= Html::submitButton(Yii::t('app', 'Отправить сообщение'), ['class' => 'submit__info']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>





