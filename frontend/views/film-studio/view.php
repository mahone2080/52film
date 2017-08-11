<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\FilmStudio */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'list', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-studio-view">

    <?php
    //    echo Html::img("data:image/jpeg;base64," . $model->thumb, ['alt' => 'thumb',]) . '<br>';

    $arr_download = (json_decode($model->download));
    if (is_array($arr_download) && count($arr_download) > 0) {
        echo '<h4>下载地址：</h4>';
        foreach ($arr_download as $dl) {
            echo $dl . '<br>';
        }
        echo "<hr>";
    }

    $arr_content = json_decode($model->content);
    if (is_array($arr_content) && count($arr_content) > 0) {
        foreach ($arr_content as $item) {
            echo "◎" . $item . '<br>';
        }
    } else {
        echo nl2br(Html::encode($model->content));
    }
    $arr_pics = json_decode($model->pics);
    if (is_array($arr_pics) && count($arr_pics) > 0) {
        foreach ($arr_pics as $k => $pic) {
            echo Html::img("data:image/jpeg;base64," . $pic, ['alt' => 'thumb' . $k, 'width' => '']) . "<br>";
        }
    }
    $arr_download = (json_decode($model->download));
    if (is_array($arr_download) && count($arr_download) > 0) {
        echo '<h4>下载地址：</h4>';
        foreach ($arr_download as $dl) {
            echo $dl . '<br>';
        }
    }
    ?>

</div>
