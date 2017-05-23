<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\SmallStoryComments */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Small Story Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="small-story-comments-view">

    <h1><?= Html::encode($this->title) ?></h1>

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'content',
            'story_id',
            'pid',
            'review',
            'created_at',
        ],
    ]) ?>

</div>
