<?php

use backend\models\Sliders;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SlidersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Sliders');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sliders-index">

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
                'value' => function (Sliders $model) {
                    return Html::a($model->title_ru, ['sliders/view', 'id' => $model->id]);
                },
                'format' => 'raw',
            ],
            [
                'attribute' => 'title_ru',
                'value' => function (Sliders $model) {
                    return Html::a($model->title_uz, ['sliders/view', 'id' => $model->id]);
                },
                'format' => 'raw',
            ],
            [
                'attribute' => 'title_en',
                'value' => function (Sliders $model) {
                    return Html::a($model->title_en, ['sliders/view', 'id' => $model->id]);
                },
                'format' => 'raw',
            ],
            'description_ru:ntext',
            //'description_uz:ntext',
            //'description_en:ntext',
            'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
