<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\SmallStoryComments */

$this->title = 'Create Small Story Comments';
$this->params['breadcrumbs'][] = ['label' => 'Small Story Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="small-story-comments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
