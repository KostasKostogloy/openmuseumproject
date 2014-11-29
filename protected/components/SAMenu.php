<?php

class SAMenu 
{
	/**
	 * 
	 * @param string $role	'*' results to always visible
	 * @param string $name	'Home'
	 * @param string $route 'controller/action'
	 */
	static function createLink($role,$name,$route,$class="")
	{
		if ($role == '*' || Yii::app()->user->checkAccess($role))
		{
			$name = Yii::t('menu',$name);
			$link = Yii::app()->createUrl($route);
			if ($class == 'login')
			{
				echo '<li  ><a href="'.$link.'"><span class="glyphicon glyphicon-log-in"></span> '.$name.'</a></li>';
			}
			else if ($class == 'logout')
			{
				echo '<li  ><a title="'.$name.'" href="'.$link.'"><span class="glyphicon glyphicon-log-out"></span><span class="hidden-sm pull-right">&nbsp; '.$name.'</span></a></li>';
			}
			else if ($class == 'register')
			{
				echo '<li  ><a href="'.$link.'"><span class="glyphicon glyphicon-plus"></span> '.$name.'</a></li>';
			}
			else if ($class == 'help')
			{
				echo '<li ><a  title="Βοήθεια" href="'.$link.'"><span class="glyphicon glyphicon-question-sign"></span> '.$name.'</a></li>';
			}
			else
			{
				echo '<li  ><a  title="'.$name.'" role="button" href="'.$link.'">'.$name.'</a></li>';
			}
		}
	}
}
