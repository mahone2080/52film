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
        echo "<div class='panel panel-success'>";
        foreach ($arr_download as $dl) {
            if (strpos($dl, 'embed')) {
                echo '<div class="panel-heading">预告片</div><div class="embed-responsive embed-responsive-16by9">' . $dl . '</div>';
            } else {
                //
            }
        }
        echo '<div class="panel-heading">下载地址：</div>';
        foreach ($arr_download as $dl) {
            if (strpos($dl, 'embed') || trim($dl) == '预告片') {
                //
            } else {
                echo $dl . '<br>';
            }
        }

    }
    echo '</div><div class="panel panel-success"><div class="panel-heading">';
    $arr_content = json_decode($model->content);
    if (is_array($arr_content) && count($arr_content) > 0) {
        foreach ($arr_content as $item) {
            echo "◎" . $item . '<br>';
        }
    } else {
        echo nl2br(Html::encode($model->content));
    }

    echo "</div></div>";
    $arr_pics = json_decode($model->pics);
    if (is_array($arr_pics) && count($arr_pics) > 0) {
        foreach ($arr_pics as $k => $pic) {
            echo Html::img("data:image/jpeg;base64," . $pic, ['alt' => 'thumb' . $k, 'width' => '']) . "<br>";
        }
    }

    $arr_download = (json_decode($model->download));
    if (is_array($arr_download) && count($arr_download) > 0) {
        echo "<div class='panel panel-success'>";
        foreach ($arr_download as $dl) {
            if (strpos($dl, 'embed')) {
                echo '<div class="panel-heading">预告片</div><div class="embed-responsive embed-responsive-16by9">' . $dl . '</div>';
            } else {
                //
            }
        }
        echo '<div class="panel-heading">下载地址：</div>';
        foreach ($arr_download as $dl) {
            if (strpos($dl, 'embed') || trim($dl) == '预告片') {
                //
            } else {
                echo $dl . '<br>';
            }
        }

    }
    ?>

</div>
