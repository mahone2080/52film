<?php

/* @var $this Story\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = '世界因你而不同';


?>
<div class="site-index">

    <div class="">
        <p class="lead text-warning text-left">人生不是故事，人生是事故，摸爬滚打，才不辜负功名尘土。</p>
    </div>
    <div class="body-content">
        <div class="row">
            <a href="<?=Url::to(['small-story/index', 'category' => 'city'])?>" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-th-list"></span>都市生活
            </a>
            <div class="table-responsive">
                <table class="table">
                <?php
                if (is_array($city) && $city) {
                    foreach ($city as $item) {
                        echo '<tr class="warning"><td><span style="color: red"><span class="glyphicon glyphicon-heart"></span></span>'.Html::a($item['title'], ['small-story/view', 'id' => $item['id'],], ['class' => 'text-warning']).'</td></tr>';
                    }
                }
                ?>
                </table>
            </div>
            <a href="<?=Url::to(['small-story/index', 'category' => 'zhihui'])?>" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-th-list"></span>人生智慧
            </a>
            <div class="table-responsive">

                <table class="table">
                <?php
                if (is_array($smart) && $smart) {
                    foreach ($smart as $item) {
                        echo '<tr class="warning"><td>'.Html::a($item['title'], ['small-story/view', 'id' => $item['id']], ['class' => 'text-warning']).'</td></tr>';
                    }
                }
                ?>
                    </table>
            </div>
            <a href="<?=Url::to(['small-story/index', 'category' => 'hougong'])?>" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-th-list"></span>后宫秘史
            </a>
            <div class="table-responsive">
                <table class="table">
                <?php
                if (is_array($hougong) && $hougong) {
                    foreach ($hougong as $item) {
                        echo '<tr class="warning"><td><span style="color: blue">'.Html::a($item['title'], ['small-story/view', 'id' => $item['id']], ['class' => 'text-warning']).'</td></tr>';
                    }
                }
                ?>
                    </table>
            </div>
        </div>
    </div>
</div>
