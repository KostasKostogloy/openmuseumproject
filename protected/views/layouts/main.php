<!DOCTYPE html>
<html lang="el">
    <head>
        <meta charset="utf-8">
        <title>Open Culture Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?= Yii::app()->baseUrl ?>/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="<?= Yii::app()->baseUrl ?>/css/main.css" media="screen">
        <link rel="stylesheet" href="<?= Yii::app()->baseUrl ?>/css/media-queries.css" media="screen">
        <?php Yii::app()->clientScript->scriptMap=array( 'jquery.js'=>'https://code.jquery.com/jquery-1.10.2.min.js',);?>
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand visible-xs" style="padding: 3px 0 0 30px;" href="<?= Yii::app()->createUrl('site/index'); ?>">
                        <img src="<?=Yii::app()->baseUrl;?>/images/logo_medium.png" alt="Logo" title="Open Culture Project" />
                    </a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-main">
                    <ul id="main_navigation" class="nav navbar-nav text-center">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i> Αναζήτηση <b class="caret"></b></a>
                            <ul id="search-dropdown" class="dropdown-menu">
                                <li><a href="<?=  Yii::app()->createUrl('site/museums');?>">Μουσείων</a></li>
                                <li><a href="<?=  Yii::app()->createUrl('site/art');?>">Αιθουσών Τέχνης</a></li>
                                <li><a href="<?=  Yii::app()->createUrl('site/theaters');?>">Θεάτρων</a></li>
                                <li><a href="<?=  Yii::app()->createUrl('site/idrimata');?>">Πολιτιστικών Ιδρυμάτων</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= Yii::app()->createUrl('site/nearme'); ?>"><i class="glyphicon glyphicon-map-marker"></i> Τι βρίσκεται κοντά σας</a>
                        </li>
                        <li class="navbar-header hidden-xs text-center">
                            <a href="<?= Yii::app()->createUrl('site/index'); ?>" style="font-size: 13px;padding:5px;">
                                <img src="<?=Yii::app()->baseUrl;?>/images/logo_medium.png" alt="Logo" title="Open Culture Project" />
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::app()->createUrl('site/opendata'); ?>"><i class="glyphicon glyphicon-open"></i> Ανοιχτά Δεδομένα</a>
                        </li>
                        <li>
                            <a href="<?= Yii::app()->createUrl('site/contact'); ?>"><i class="glyphicon glyphicon-envelope"></i> Επικοινωνία</a>
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
                    </ul>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:20px;">
            <?= $content; ?>
            <footer>
                    <div class="col-lg-12">
                        <hr />
                        <ul class="list-unstyled">
                            <li class="pull-left"><a class="btn btn-sm btn-default" href="<?= Yii::app()->createUrl('user/login'); ?>" >Διαχείριση</a></li>
                            <li class="pull-right"><a class="btn btn-sm btn-info" href="#top">^</a></li>
                        </ul>
                    </div>
                <div class="clearfix"></div>
            </footer>
        </div>
        <script src="<?= Yii::app()->baseUrl ?>/js/bootstrap.min.js"></script>
    </body>
</html>
