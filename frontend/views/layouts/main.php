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
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="wrapper" >  
    <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">
          <li><a>Cadastro<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
           <ul class="sidebar-nav" id="sidebar">
                <li><a>link1<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                <li><a>link2<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
           </ul>
          <li><a>Consulta<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a>Relatorio<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
        </ul>
      </div>
    <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
            <div class="container-fluid">
                <div class="row">
                   
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                        <?= Alert::widget() ?>
                        <?= $content ?>
                    </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
