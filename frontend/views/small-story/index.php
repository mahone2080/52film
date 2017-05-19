<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\Pjax;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SmallStorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '小故事';
?>
<div class="small-story-index">
    <?php Pjax::begin(); ?>
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

    <?php Pjax::end(); ?></div>
