<?php
/**
 * Created by PhpStorm.
 * User: ai
 * Date: 2017/5/15
 * Time: 17:50
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\StringHelper;

?>

<div class="thumbnail">
    <?php
    $thumb = str_replace(["\r\n", "\n", "\r"], '', trim(strip_tags(base64_decode($model->thumb))));

    if ($thumb == "The server didn't respond in time.please try again later" || preg_match("/^(404|﻿404错误|403|9999|not|error).*/i", $thumb) || preg_match("/function.*/", $thumb)) {
        echo Html::a(Html::img('/images/thumb.jpg', ['alt' => $model->title, 'class' => 'img-rounded']), ['film-studio/view', 'id' => $model->id]);
    } else {
//        var_dump($thumb);
        echo Html::a(Html::img('data:image/jpeg;base64,' . $model->thumb, ['alt' => $model->title, 'class' => 'img-rounded']), ['film-studio/view', 'id' => $model->id]);
    }
    ?>
    <div class="text-center">
        <h5 style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"><?= Html::a($model->title, ['film-studio/view', 'id' => $model->id]) ?></h5>
    </div>
</div>
