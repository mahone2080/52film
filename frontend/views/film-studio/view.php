<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\FilmStudio */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'list', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->registerJs('
    (function(win,doc){
        var s = doc.createElement("script"), h = doc.getElementsByTagName("head")[0];
        if (!win.alimamatk_show) {
            s.charset = "gbk";
            s.async = true;
            s.src = "https://alimama.alicdn.com/tkapi.js";
            h.insertBefore(s, h.firstChild);
        };
        var o = {
            pid: "mm_46748187_297500171_81198500096",/*推广单元ID，用于区分不同的推广渠道*/
            appkey: "25552029",/*通过TOP平台申请的appkey，设置后引导成交会关联appkey*/
            unid: "52film-view",/*自定义统计字段*/
            type: "click" /* click 组件的入口标志 （使用click组件必设）*/
        };
        win.alimamatk_onload = win.alimamatk_onload || [];
        win.alimamatk_onload.push(o);
    })(window,document);

');

?>
<div class="film-studio-view">

    <a data-type="13" data-tmpl="628x100" data-tmplid="213" data-rd="2" data-style="2" data-border="1" href="#"></a>
    <?php
    //    echo Html::img("data:image/jpeg;base64," . $model->thumb, ['alt' => 'thumb',]) . '<br>';

    $arr_download = json_decode($model->download);
    if (is_array($arr_download) && count($arr_download) > 0) {
        echo "<div class='panel panel-success'>";
        foreach ($arr_download as $dl) {
            if (strpos($dl, 'embed')) {
                echo '<div class="panel-heading">预告片</div><div class="embed-responsive embed-responsive-16by9">' . $dl . '</div>';
            } else {
                //
            }
        }
        echo '<div class="panel-heading">下载地址：</div>';
        foreach ($arr_download as $dl) {
            if (strpos($dl, 'embed') || trim($dl) == '预告片') {
                //
            } else {
                echo $dl . '<br>';
            }
        }

    }
    echo '</div>';
    //    if (Yii::$app->params['devicedetect']['isMobile']) {
    //        echo '<div class="panel panel-warning"><div class="panel-heading">微信用户查看<mark>原网页</mark>或在<mark>电脑端</mark>打开可见<strong>下载地址</strong>^_^</div></div>';
    //    }

    echo '<div class="panel panel-success"><div class="panel-heading">';
    $arr_content = json_decode($model->content);
    if (is_array($arr_content) && count($arr_content) > 0) {
        foreach ($arr_content as $item) {
            echo "◎" . $item . '<br>';
        }
    } else {
        echo nl2br(Html::encode($model->content));
    }

    echo "</div></div><br>";
    $arr_pics = json_decode($model->pics);
    if (is_array($arr_pics) && count($arr_pics) > 0) {
        foreach ($arr_pics as $k => $pic) {
            echo Html::img("data:image/jpeg;base64," . $pic, ['alt' => 'thumb' . $k, 'width' => '']) . "<br>";
        }
    }

    $arr_download = json_decode($model->download);
    if (is_array($arr_download) && count($arr_download) > 0) {
        echo "<div class='panel panel-success'>";
        foreach ($arr_download as $dl) {
            if (strpos($dl, 'embed')) {
                echo '<div class="panel-heading">预告片</div><div class="embed-responsive embed-responsive-16by9">' . $dl . '</div>';
            } else {
                //
            }
        }
        echo '<div class="panel-heading">下载地址：</div>';
        foreach ($arr_download as $dl) {
            if (strpos($dl, 'embed') || trim($dl) == '预告片') {
                //
            } else {
                echo $dl . '<br>';
            }
        }

    }
    ?>
</div>
