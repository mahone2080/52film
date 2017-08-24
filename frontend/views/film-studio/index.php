<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\LinkPager;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FilmStudioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '最新电影';
$this->params['breadcrumbs'][] = $this->title;

?>
<div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
    <div>

        <?php
        Pjax::begin();
        echo ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_index',
            'options' => ['tag' => 'div', 'class' => 'row'],
            'itemOptions' => ['tag' => 'div', 'class' => 'col-xs-4 col-sm-3 col-md-2'],
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
            ],
        ]);
        Pjax::end();
        ?>

    </div>

    <!--    <div class="row">-->
    <?php
    //        foreach ($dataProvider->models as $item) {
    //            echo "<div class='col-xs-4 col-sm-3 col-md-2'>";
    //            echo '<div class="thumbnail">';
    //            echo Html::a(Html::img('data:image/jpeg;base64,' . $item->thumb, ['alt' => $item->title, 'class' => 'img-rounded']), ['film-studio/view', 'id' => $item->id]);
    //            echo "<div class='text-center'><h5>" . Html::a($item->title, ['film-studio/view', 'id' => $item->id]) . "</h5></div></div></div>";
    ////            echo "<div class='clearfix'></div>";
    //        }
    ?>

    <!--    </div>-->
</div>
