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
    <?php $this->registerCssFile('@web/css/film-list.css') ?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title . '-影视庄园') ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '影视庄园',
        'brandUrl' => ['/film-studio/index'],
        'options' => [
            'class' => 'navbar  navbar-default navbar-fixed-top',
            #'style' => 'background-color:#520'
        ],
        'renderInnerContainer' => false,
    ]);

    echo '<div>'
        . '<p class="navbar-text">电影放映室@_@</p>'
        . '</div>';
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            ['label' => '最新', 'url' => [], 'options' => ['class' => 'bg-success hidden-md']],
            ['label' => '记录片', 'url' => [], 'options' => ['class' => 'bg-warning hidden-md']],
        ],
    ]);

    ?>
    <div>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="标题｜类别｜演员｜简介">
            </div>
            <button type="submit" class="btn btn-default">搜索</button>
        </form>
    </div>

    <?php


    $categories = Yii::$app->params['story_categories'];
    #$menuItems = $categories;

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
<!--<a title="Web Analytics" href="http://clicky.com/101047879">-->
<!--    <img alt="Web Analytics" src="//static.getclicky.com/media/links/badge.gif" border="0"/>-->
<!--</a>-->
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try {
        clicky.init(101047879);
    } catch (e) {
    }</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101047879ns.gif"/></p></noscript>
</body>
</html>
<?php $this->endPage() ?>
