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
    <meta http-equiv="refresh" content="0;url=https://www.52film.top/">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title . '这里是人间天堂') ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">

    </div>
</footer>

<?php $this->endBody() ?>
<a title="Web Analytics" href="http://clicky.com/101047879">
    <img alt="Web Analytics" src="//static.getclicky.com/media/links/badge.gif" border="0"/></a>
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try {
        clicky.init(101047879);
    } catch (e) {
    }</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101047879ns.gif"/></p></noscript>
</body>
</html>
<?php $this->endPage() ?>
