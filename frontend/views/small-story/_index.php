<?php
/**
 * Created by PhpStorm.
 * User: ai
 * Date: 2017/5/15
 * Time: 17:50
 */

use yii\helpers\Html;

?>
    <span class="badge"><?= Html::encode($model->view) ?>次浏览</span>
<?= Html::a($model->title, ['small-story/view', 'id' => $model->id], ['class' => 'text-warning']) ?>