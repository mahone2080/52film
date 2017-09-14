<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FilmStudioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Film Studios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-studio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Film Studio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                'attribute' => 'title',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::a($model->title, $model->url, ['target' => '_blank']);
                }
            ],
//            [
//                'attribute' => 'thumb',
//                'format' => 'raw',
//                'value' => function ($model) {
//                    return Html::a(Html::img('data:image/jpeg;base64,' . $model->thumb, ['alt' => $model->title, 'class' => 'img-rounded']), ['film-studio/view', 'id' => $model->id]);
//                }
//            ],
//            'content:ntext',
//            'thumb',
//             'imgs:ntext',
            // 'pics',
            // 'download:ntext',
            'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
