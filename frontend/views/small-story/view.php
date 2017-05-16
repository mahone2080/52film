<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\SmallStory */

$this->title = $model->title;
?>
<div class="small-story-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= nl2br($model->content) ?>

</div>
