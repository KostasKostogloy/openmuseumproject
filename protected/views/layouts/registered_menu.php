<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=Yii::t('menu','Κέντρο Ερωτήσεων')?> <b class="caret"></b></a>
	<ul class="dropdown-menu">
		<?php SAMenu::createLink('*', 'Πρόσφατες ερωτήσεις', 'question/latest');?>
	</ul>
</li>
<?php SAMenu::createLink('*', 'Αποσύνδεση', 'user/logout','logout');?>

