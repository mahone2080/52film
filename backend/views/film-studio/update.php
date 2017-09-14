<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FilmStudio */

$this->title = 'Update Film Studio: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Film Studios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="film-studio-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
