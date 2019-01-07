<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\markdown\MarkdownEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\SmallStory */
/* @var $form yii\widgets\ActiveForm */

$this->registerJs('')
?>

<div class="small-story-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php 
    //echo MarkdownEditor::widget([
    //    'model' => $model,
    //    'attribute' => 'content',
    //]);
    //echo $form->field($model, 'content')->widget(\kriss\wangEditor\WangEditorWidget::className());
    echo $form->field($model, 'content')->widget(\dosamigos\ckeditor\CKEditor::className(), [
		'options' => ['rows' => 6],
		'preset' => 'basic'
	]); 
    ?>
    <?= $form->field($model, 'category')->dropDownList((Yii::$app->params['story'])) ?>
    <?= $form->field($model, 'created_at')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
