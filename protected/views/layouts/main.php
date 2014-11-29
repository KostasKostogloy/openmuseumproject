<!DOCTYPE html>
<html lang="el">
    <head>
        <meta charset="utf-8">
        <title>Open Culture Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= Yii::app()->baseUrl ?>/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="<?= Yii::app()->baseUrl ?>/css/main.css" media="screen">
        <link rel="stylesheet" href="<?= Yii::app()->baseUrl ?>/css/media-queries.css" media="screen">
    </head>
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
    <body>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand visible-xs" href="<?= Yii::app()->createUrl('site/index'); ?>">
                    Open Culture Project
                    </a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-main">
                    <ul id="main_navigation" class="nav navbar-nav text-center">
                        <li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Αναζήτηση <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Μουσείων</a></li>
                                <li><a href="#">Μνημείων</a></li>
                                <li><a href="#">Γκάλερι Τέχνης</a></li>
                            </ul>
                        </li>
                        </li>
                        <li>
                            <a href="<?= Yii::app()->createUrl('site/nearme'); ?>">Τι βρίσκεται κοντά σας</a>
                        </li>
                        <li class="navbar-header hidden-xs">
                            <a class="navbar-brand" href="<?= Yii::app()->createUrl('site/index'); ?>" style="font-size: 13px;">
                                OCP Logo
                            </a>
                        </li>
                        <li>
                            <a href="#">Ανοιχτά Δεδομένα</a>
                        </li>
                        <li>
                            <a href="<?= Yii::app()->createUrl('site/contact'); ?>">Επικοινωνία</a>
                        </li>
                        <!--
                        <li>
                            <a href="<?= Yii::app()->createUrl('site/area'); ?>">Area</a>
                        </li>
                        <li>
                            <a href="<?= Yii::app()->createUrl('site/position'); ?>">Position</a>
                        </li>
                        <li>
                            <a href="<?= Yii::app()->createUrl('site/markers'); ?>">Markers</a>
                        </li>
                        -->
                </div>
            </div>
        </div>
        <div class="container">
            <?= $content; ?>
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-unstyled">
                            <li class="pull-left"><a href="<?= Yii::app()->createUrl('user/login'); ?>" >Διαχείριση</a></li>
                            <li class="pull-right"><a href="#top">Back to top</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="<?= Yii::app()->baseUrl ?>/js/bootstrap.min.js"></script>
    </body>
</html>
