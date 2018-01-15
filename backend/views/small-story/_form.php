<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\markdown\MarkdownEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\SmallStory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="small-story-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= MarkdownEditor::widget([
        'model' => $model,
        'attribute' => 'content',
    ]);
    ?>
    <?= $form->field($model, 'category')->dropDownList((Yii::$app->params['story'])) ?>
    <?= $form->field($model, 'created_at')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
