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
    <div class="text-warning">
        <h4 class="page-header"><?= Html::encode($this->title) ?></h4>
        <div class="text-success"><?= nl2br($model->content) ?></div>
        <div>
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
        <div>
            <table class="table">
                <?php
                $comments = $model->smallStoryComments;
                //            var_dump($comments);
                foreach ($comments as $item) {
                    echo '<tr><td>' . $item->content . '</td><td style="width:10%">' . $item->user->username . '</td><td style="width:15%">' . $item->created_at . '</td></tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>
