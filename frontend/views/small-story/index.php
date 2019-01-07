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
<div class="page-header" style="margin:0 auto">
    <h5 class="text-success text-justify">人生不是故事，人生是事故，摸爬滚打，才不辜负功名尘土。</h5>
</div>
<div class="small-story-index">
    <?php Pjax::begin(); ?>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_index',
        'options' => ['tag' => 'ul', 'class' => 'list-group'],
        'itemOptions' => ['tag' => 'li', 'class' => 'list-group-item'],
        'summary' => '',
        'pager' => [
            'class' => LinkPager::className(),
            'options' => ['class' => 'pager',],
            'prevPageCssClass' => 'previous',
            'nextPageCssClass' => 'next',
            'activePageCssClass' => 'disabled',
            'maxButtonCount' => 1,
            'prevPageLabel' => '<span aria-hidden="true">&larr;</span> 上一页',
            'nextPageLabel' => '下一页 <span aria-hidden="true">&rarr;</span>'
        ]
    ]) ?>

    <?php Pjax::end(); ?></div>
