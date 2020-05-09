<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sliders */

$this->title = Yii::t('app', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sliders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sliders-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
