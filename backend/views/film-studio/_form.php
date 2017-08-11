<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FilmStudio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true,'class'=>'col-sm-2 form-control'])->label('uri', ['class' => 'col-sm-2 control-label']) ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'thumb')->textInput() ?>

    <?= $form->field($model, 'imgs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pics')->textInput() ?>

    <?= $form->field($model, 'download')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
