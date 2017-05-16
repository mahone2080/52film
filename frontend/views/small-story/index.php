<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SmallStorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '小故事';
?>
<div class="small-story-index">
<?php Pjax::begin(); ?>
    <?=ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_index',
        'options' => ['tag' => false,],
        'itemOptions' => ['tag' => false],
        'summary' => '',
//        'pager' => [
//            'class' => LinkPager::className(),
//            'options' => ['id' => 'pagination','class'=>'fl wb100 project_page'],
        
    ])
    ?>

<?php Pjax::end(); ?></div>
