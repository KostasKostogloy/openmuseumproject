<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=Yii::t('menu','Διαχείρηση')?> <b class="caret"></b></a>
	<ul class="dropdown-menu">
		<?php SAMenu::createLink('*', 'Χρηστών', 'question/latest');?>
	</ul>
</li>
<?php SAMenu::createLink('*', 'Αποσύνδεση', 'user/logout','logout');?>
