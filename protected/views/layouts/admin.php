<!DOCTYPE html>
<html lang="el">
    <head>
        <meta charset="utf-8">
        <title>Διαχείριση Open Culture Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= Yii::app()->baseUrl ?>/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="<?= Yii::app()->baseUrl ?>/css/main.css" media="screen">
        <link rel="stylesheet" href="<?= Yii::app()->baseUrl ?>/css/media-queries.css" media="screen">
    </head>
    <body style="padding-top:20px;">
        <div class="container">
            <?= $content; ?>
            
            <div class="col-lg-12">
                <hr />
               <img class="img-thumbnail pull-right" src="<?=Yii::app()->baseUrl?>/images/logo_medium.png" />
                <span>Copyright 2014&copy;<br /> Created by Kostas Kostoglou & Mario Shtika</span>
           </div>
        </div>
        <script src="<?= Yii::app()->baseUrl ?>/js/bootstrap.min.js"></script>
    </body>
</html>
