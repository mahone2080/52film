<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FilmStudioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Film Studios';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="film-studio-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
    <div class="small-story-index">
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_index',
            'options' => ['tag' => 'table', 'class' => 'table table-hover'],
            'itemOptions' => ['tag' => false, 'class' => 'table'],
            'summary' => '',
            'pager' => [
                'class' => LinkPager::className(),
                'options' => ['class' => 'pager pagination-lg',],
            ]
        ]) ?>
    </div>
</div>
