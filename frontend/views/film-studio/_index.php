<?php
/**
 * Created by PhpStorm.
 * User: ai
 * Date: 2017/5/15
 * Time: 17:50
 */

use yii\helpers\Html;

?>
<tr class="warning">
    <td>
        <?=Html::img('data:image/jpeg;base64,' . $model->thumb, ['width' => '50px']);?>
        <?= Html::a($model->title, ['film-studio/view', 'id' => $model->id], ['class' => 'text-warning']) ?>
    </td>
    <td class="text-right text-warning">
        <?= Html::encode($model->created_at) ?>
    </td>
</tr>