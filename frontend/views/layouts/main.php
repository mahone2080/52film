<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='TTUNION_verify' content='b936cbc9a9f81aaaf899a9126049a63d'>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title.'-人生不是故事，人生是事故，摸爬滚打，才不辜负功名尘土。') ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '小故事',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-inverse navbar-fixed-bottom',
            'style' =>'background-color:#520'
        ],
    ]);
    ?>
    <div>
        <p class="navbar-text">这里面天天都有故事@_@</p>
    </div>
<!--    <div>-->
<!--        <form class="navbar-form navbar-left" role="search">-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control" placeholder="Search">-->
<!--            </div>-->
<!--            <button type="submit" class="btn btn-default">提交</button>-->
<!--        </form>-->
<!--    </div>-->
    <?php
    $categories = Yii::$app->params['story_categories'];
    $menuItems = $categories;
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
