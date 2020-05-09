<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SliderPhotosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Slider Photos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-photos-index">


    <p>
        <?= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'title_uz',
                'value' => function (\backend\models\SliderPhotos $model) {
                    return Html::a($model->slider_id, ['slider-photos/view', 'id' => $model->id]);
                },
                'format' => 'raw',
            ],


            [
                'attribute' => 'photo',
                'value' => function (\backend\models\SliderPhotos $model) {
                    return Html::a(Html::img($model->getThumbFileUrl('photo', 's32', Yii::getAlias('@storageRoot/store/sliders/[[attribute_id]]/[[filename]].[[extension]]'))));
                },
                'format' => 'raw',
            ],

            'sort',
            'created_by',
            //'updated_by',
            'created_at:datetime',
            'updated_at:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
