<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SmallStory */
/* @var $commentModel frontend\models\SmallStoryComments */

$this->title = $model->title;
?>
<div class="small-story-view">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body text-warning">
            <?= nl2br($model->content) ?>
        </div>
        <div class="panel-footer">
            <?php $form = ActiveForm::begin(['action' => ['small-story-comments/create'], 'method' => 'post',
//                'enableAjaxValidation' => true,
            ]); ?>
            <?= $form->field($commentModel, 'content')->textarea(['placeholder' => '评论。。。'])->label(false) ?>
            <?= $form->field($commentModel, 'story_id')->hiddenInput(['value' => $model->id])->label(false) ?>
            <div class="form-group">
                <?= Html::submitButton('发表评论', ['class' => 'btn btn-success']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="panel-footer">
            <?php
            $comments = $model->smallStoryComments;
            if (is_array($comments) && count($comments) > 0) {
                echo "<ul class='list-group'>";
                foreach ($comments as $item) {
                    echo '<li class="list-group-item">' . $item->content . '&nbsp;&nbsp;<span>' . $item->user->username . '&nbsp;&nbsp;' . $item->created_at . '</span></li>';
                }
                echo "</ul>";
            }
            ?>
        </div>
    </div>
    <div>
    </div>
</div>
