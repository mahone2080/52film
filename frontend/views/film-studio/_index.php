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
    <?= Html::a(Html::img('data:image/jpeg;base64,' . $model->thumb, ['alt' => $model->title, 'class' => 'img-rounded']), ['film-studio/view', 'id' => $model->id]); ?>
    <div class="caption text-center">
        <h5 class="text-overflow"><?= Html::a($model->title, ['film-studio/view', 'id' => $model->id]) ?></h5>
    </div>
</div>
