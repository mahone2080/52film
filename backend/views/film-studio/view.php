<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\FilmStudio */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Film Studios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/css/film-list.css');
?>
<div class="film-studio-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'url:url',
            'title',
            'created_at',
        ],
    ]) ?>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <hr>
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
    /*
        $arr_content = json_decode($model->content);
        if (is_array($arr_content) && count($arr_content) > 0) {
            foreach ($arr_content as $item) {
                echo "◎" . $item . '<br>';
            }
        }
    */

    echo nl2br(Html::encode($model->content));

    echo "<br>";
    $arr_pics = json_decode($model->pics);
    if (is_array($arr_pics) && count($arr_pics) > 0) {
        foreach ($arr_pics as $k => $pic) {
            echo Html::img("data:image/jpeg;base64," . $pic, ['alt' => 'thumb' . $k, 'class' => 'img-rounded']) . "<br>";
        }
    }
    ?>
</div>
