<?php

/* @var $this Story\web\View */
use yii\helpers\Html;

$this->title = '首页';


?>
<div class="site-index">

    <div class="jumbotron">
        <p class="lead">亲，你来啦！等你很久了哦^_^</p>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>都市生活</h2>
                <p><?php
                    if (is_array($ctiy) && $city) {
                        foreach ($city as $item) {
                            echo Html::a($item['title'], ['small-story/view', 'id' => $item['id']]) . '<br>';
                        }
                    }
                    ?></p>
            </div>
            <div class="col-lg-4">
                <h2>人生智慧</h2>
                <p><?php
                    if (is_array($smart) && $smart) {
                        foreach ($smart as $item) {
                            echo Html::a($item['title'], ['small-story/view', 'id' => $item['id']]) . '<br>';
                        }
                    }
                    ?></p>
            </div>
            <div class="col-lg-4">
                <h2>后宫生活秘籍</h2>
                <p><?php
                    if (is_array($hougong) && $hougong) {
                        foreach ($hougong as $item) {
                            echo Html::a($item['title'], ['small-story/view', 'id' => $item['id']]) . '<br>';
                        }
                    }
                    ?></p>
            </div>
        </div>
    </div>
</div>
