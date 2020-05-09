<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Courses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-photos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?php
    echo $form->field($model, 'photo')->widget(FileInput::class, [
        'options' => ['accept' => 'image/*'],
        'language' => 'ru',
        'pluginOptions' => [
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            // 'browseIcon' => ' ',
            'browseLabel' => 'Рисунок',
            'layoutTemplates' => [
                'main1' => '<div class="kv-upload-progress hide"></div>{remove}{cancel}{upload}{browse}{preview}',
            ],
            'initialPreview' => [
                Html::img($model->getThumbFileUrl('photo', 's32'), ['class' => 'file-preview-image', 'alt' => '', 'title' => '']),
            ],
        ],
    ]);
    ?>



    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
