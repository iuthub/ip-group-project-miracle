<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Contacts */

$this->title = 'Create Contacts';
//$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
Yii::$app->params['sub-title'] = Yii::t('app', 'Contacts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-create">

<!--    <h1>--><?php //Html::encode($this->title) ?><!--</h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
