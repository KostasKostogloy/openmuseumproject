<?php


class SAHelper 
{
	static function buttonTemplate($args)
	{
		$template = '<div class="btn-group" style="width:125px;">';
		foreach ($args as $button)
		{
			$template .= '{'.$button.'}';
		}
		$template .= '</div>';
		return $template;
	}
	
	static function buttons($args)
	{
		$buttons = array();
		if (in_array('delete', $args))
		{
			$buttons ['delete'] = array('imageUrl'=>false,'options'=>array('class'=>'btn btn-default glyphicon glyphicon-remove'),'label'=> ' '	);
		}
		if (in_array('update', $args))
		{
			$buttons ['update'] = array('imageUrl'=>false,'options'=>array('class'=>'glyphicon glyphicon-pencil btn btn-default'),'label'=> ' ');
		}
		if (in_array('view', $args))
		{
			$buttons ['view'] = array('imageUrl'=>false,'options'=>array('class'=>'glyphicon glyphicon-eye-open btn btn-default'),'label'=> ' '	);
		}
		return $buttons;
	}
	
}