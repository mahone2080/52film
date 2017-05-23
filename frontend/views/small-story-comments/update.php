<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\SmallStoryComments */

$this->title = 'Update Small Story Comments: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Small Story Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="small-story-comments-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
