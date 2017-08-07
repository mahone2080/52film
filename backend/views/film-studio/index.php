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
//            'url:url',
            'title',
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
