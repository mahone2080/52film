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
    <title><?= Html::encode($this->title . '-人生不是故事，人生是事故，摸爬滚打，才不辜负功名尘土。') ?></title>
    <?php $this->head() ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3144712571787670",
    enable_page_level_ads: true
  });
</script>
    <?php
    $this->registerCssFile('@web/css/offcanvas.css');
    $this->registerCssFile('@web/css/_shadows.css');
    ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '小故事',
        'brandUrl' => ['/small-story/index'],
        'options' => [
            'class' => 'navbar  navbar-default navbar-fixed-top',
        ],
    ]);
    ?>
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
    $get = Yii::$app->request->get();
    $keyword = isset($get['SmallStorySearch']['content'])?$get['SmallStorySearch']['content']:'';
?>
    <div class="nav-scroller bg-white shadow-xs hidden-md hidden-lg hidden-sm col-xs-12">
        <nav class="nav nav-underline">
            <?php
            echo Html::a('轻松寨', ['small-story/index', 'category' => 'qingsongzhai'], ['class' => 'nav-link']);
//            echo Html::a('看电影', 'https://www.52film.top', ['class' => 'nav-link', 'target' => '_blank']);
            echo Html::a('历史', ['small-story/index', 'category' => 'china_history,world_history,hougong'], ['class' => 'nav-link']);
            echo Html::a('爱情', ['small-story/index', 'category' => 'city,classic,chulian,love_school,wangluoaiqing'], ['class' => 'nav-link']);
            echo Html::a('哲理', ['small-story/index', 'category' => 'chanli,yuyan,zhihui'], ['class' => 'nav-link']);
            echo Html::a('民间', ['small-story/index', 'category' => 'china_folk,foreign_folk'], ['class' => 'nav-link']);
            echo Html::a('名人', ['small-story/index', 'category' => 'china_famous,foreign_famous'], ['class' => 'nav-link']);
            echo Html::a('创业', ['small-story/index', 'category' => 'china_folk,foreign_folk'], ['class' => 'nav-link']);
            echo Html::a('职场', ['small-story/index', 'category' => 'renwu'], ['class' => 'nav-link']);
            ?>
        </nav>
    </div>
    <div class="row">
        <div class="hidden-sm hidden-md hidden-lg col-xs-12  center-block">
            <form class="navbar-form navbar-left form-inline" role="" action="/">
                <div class="form-group col-xs-9">
                    <input type="text" class="form-control" name="SmallStorySearch[content]" placeholder="关键词" value="<?=$keyword?>">
                </div>
                <div class="col-xs-2">
                    <button type="submit" class="btn btn-default">搜索</button>
                </div>
            </form>
        </div>
    </div>
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
        投稿与建议：soulmate2080@gmail.com
    </div>
</footer>

<?php $this->endBody() ?>
<script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101162154);</script>
<script async src="//static.getclicky.com/js"></script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101162154ns.gif" /></p></noscript>
</body>
</html>
<?php $this->endPage() ?>
