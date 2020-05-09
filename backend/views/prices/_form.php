<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Prices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-photos-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?php //= $form->field($model, 'course_id')->dropDownList(
//        \yii\helpers\ArrayHelper::map(
//            \backend\models\Courses::find()->all(),
//            'id',
//            'name'
//        )
//    ) ?>

    <?= $form->field($model, 'course_name')->textInput() ?>


    <?= $form->field($model, 'price')->textInput() ?>
    <?= $form->field($model, 'pupils')->textInput() ?>
    <?= $form->field($model, 'books')->textInput() ?>
    <?= $form->field($model, 'service')->textInput() ?>
    <?= $form->field($model, 'notebooks')->textInput() ?>
    <?= $form->field($model, 'online_translation')->textInput() ?>





    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
