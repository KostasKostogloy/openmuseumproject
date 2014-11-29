<?php
/* @var $this UserController */
?>
<div class="row">
    <h2 class="text-center text-primary">Κέντρο Διαχείρισης</h2>
   <div class="col-md-3">
        <div class="well well-sm">
            <ul class="nav nav-pills nav-stacked" id="yw1">
                <li class="active">
                    <a href="#"><span class="glyphicon glyphicon-dashboard"></span> Διαχείριση</a>
                </li>
                <li>
                    <a href="<?= Yii::app()->createUrl('institutions/index') ?>"><span class="glyphicon glyphicon-book"></span> Ινστιτούτων</a>
                </li>
                <li>
                    <a href="<?= Yii::app()->createUrl('user/admin') ?>"><span class="glyphicon glyphicon-lock"></span> Πρόσβασης</a>
                </li>
                <li>
                    <a href="dbpedia.php"><span class="glyphicon glyphicon-file"></span> Στατιστικά</a>
                </li>
                <li>
                    <a href="<?=$this->createUrl('user/logout')?>"><span class="glyphicon glyphicon-off"></span> Αποσύνδεση</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <br />
        <p class="text-info">Επιλέξτε μια ενέργεια από τα αριστερά. Μπορείτε να διαβάσεται τις πλήρεις οδηγίες χρήσεως <a href="#">εδώ</a>.</p>
    </div>
</div>