<?php

namespace Claromentis\SnowFlakes\UI;

class SnowFlakes extends \TemplaterComponentTmpl
{
	public function Show($attributes)
	{
		/*template*/
		$template = "snowflakes/UI/SnowFlakes.html";
		return $this->CallTemplater($template, $args);
	}
}