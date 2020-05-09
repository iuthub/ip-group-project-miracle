<?php

use common\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Бошқариш панели';
//$searchModel = new UserSearch();
?>

<div class="site-index">

    <div class="box">
        <div class="box-body">
            <div class="row">
                <?php $form = ActiveForm::begin(['action' => ['user/index'], 'method' => 'GET', 'options' => ['class' => 'searchForm']]); ?>
                <div class="col-sm-10">
                    <!--                    --><?php //= $form->field($searchModel, 'username')->textInput(['maxlength' => true, 'placeholder' => 'Қидириш талабини киргизинг'])->label(false) ?>
                </div>
                <div class="col-sm-2">
                    <?= Html::submitButton('<i class="fa fa-search"></i> Қидириш', ['class' => 'btn btn-primary btn-block']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <hr>

    <div class="row">

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?= User::find()->count(); ?><sup style="font-size: 20px"></sup></h3>
                    <p><?= Yii::t('app', 'Фаол фойдаланувчилар') ?></p>
                </div>
                <div class="icon"><i class="fa fa-users"></i></div>
                <a href="<?= Url::to('user') ?>" class="small-box-footer"><?= Yii::t('app', 'Давом этиш') ?> <i
                            class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-gray">
                <div class="inner">
                    <h3><?= User::find()->count(); ?><sup style="font-size: 20px"></sup></h3>
                    <p><?= Yii::t('app', 'Нофаол фойдаланувчилар') ?></p>
                </div>
                <div class="icon"><i class="fa fa-users"></i></div>
                <a href="<?= Url::to('user') ?>" class="small-box-footer"><?= Yii::t('app', 'Давом этиш') ?> <i
                            class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3><?= \abdualiym\cms\entities\Menu::find()->count(); ?><sup style="font-size: 20px"></sup></h3>
                    <p><?= Yii::t('app', 'Menular') ?></p>
                </div>
                <div class="icon"><i class="fa fa-list"></i></div>
                <a href="<?= Url::to('categories') ?>" class="small-box-footer"><?= Yii::t('app', 'Давом этиш') ?> <i
                            class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!---->
        <!--        <div class="col-lg-3 col-xs-6">-->
        <!--            <div class="small-box bg-olive">-->
        <!--                <div class="inner">-->
        <!--                    <h3>--><?php //= Regions::find()->count(); ?><!--<sup style="font-size: 20px"></sup></h3>-->
        <!--                    <p>--><?//= Yii::t('app', 'Ҳудудлар') ?><!--</p>-->
        <!--                </div>-->
        <!--                <div class="icon"><i class="fa fa-map-marker"></i></div>-->
        <!--                <a href="--><?//= Url::to('regions') ?><!--" class="small-box-footer">--><?//= Yii::t('app', 'Давом этиш') ?><!-- <i-->
        <!--                            class="fa fa-arrow-circle-right"></i></a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!---->
        <!--        <div class="col-lg-3 col-xs-6">-->
        <!--            <div class="small-box bg-yellow">-->
        <!--                <div class="inner">-->
        <!--                    <h3>--><?php //= Questions::find()->count(); ?><!--<sup style="font-size: 20px"></sup></h3>-->
        <!--                    <p>--><?//= Yii::t('app', 'Саволлвр') ?><!--</p>-->
        <!--                </div>-->
        <!--                <div class="icon"><i class="fa fa-question"></i></div>-->
        <!--                <a href="--><?//= Url::to('questions') ?><!--" class="small-box-footer">--><?//= Yii::t('app', 'Давом этиш') ?><!-- <i-->
        <!--                            class="fa fa-arrow-circle-right"></i></a>-->
        <!--            </div>-->
        <!--        </div>-->

        <!--        <div class="col-lg-3 col-xs-6">-->
        <!--            <div class="small-box bg-lime">-->
        <!--                <div class="inner">-->
        <!--                    <h3>--><?php //= Answers::find()->count(); ?><!--<sup style="font-size: 20px"></sup></h3>-->
        <!--                    <p>--><?//= Yii::t('app', 'Вариантлар') ?><!--</p>-->
        <!--                </div>-->
        <!--                <div class="icon"><i class="fa fa-comments"></i></div>-->
        <!--                <a href="--><?//= Url::to('answers') ?><!--" class="small-box-footer">--><?//= Yii::t('app', 'Давом этиш') ?><!-- <i-->
        <!--                            class="fa fa-arrow-circle-right"></i></a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!---->
        <!--        <div class="col-lg-3 col-xs-6">-->
        <!--            <div class="small-box bg-blue">-->
        <!--                <div class="inner">-->
        <!--                    <h3>--><?php //= Results::find()->count(); ?><!--<sup style="font-size: 20px"></sup></h3>-->
        <!--                    <p>--><?//= Yii::t('app', 'Натижалар') ?><!--</p>-->
        <!--                </div>-->
        <!--                <div class="icon"><i class="fa fa-check"></i></div>-->
        <!--                <a href="--><?//= Url::to('results') ?><!--" class="small-box-footer">--><?//= Yii::t('app', 'Давом этиш') ?><!-- <i-->
        <!--                            class="fa fa-arrow-circle-right"></i></a>-->
        <!--            </div>-->
        <!--        </div>-->

    </div>

</div>
</div>