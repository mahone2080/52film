<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FilmStudio */

$this->title = 'Create Film Studio';
$this->params['breadcrumbs'][] = ['label' => 'Film Studios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-studio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
