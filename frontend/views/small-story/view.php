<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\SmallStory */

$this->title = $model->title;
?>
<div class="small-story-view">
    <div class="text-warning">
    <h4 class="page-header"><?= Html::encode($this->title) ?></h4>
    <div class="text-success"><?= nl2br($model->content) ?></div>
    </div>
</div>
