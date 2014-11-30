<div class="well well-sm">
    <ul class="nav nav-pills nav-stacked" id="yw1">
        <li <?php if ($this->action->id == 'index') echo 'class="active"';?>>
            <a href="#"><span class="glyphicon glyphicon-dashboard"></span> Διαχείριση</a>
        </li>
        <li <?php if ($this->id == 'institution') echo 'class="active"';?>>
            <a href="<?= Yii::app()->createUrl('institution/index') ?>"><span class="glyphicon glyphicon-book"></span> Ινστιτούτων</a>
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