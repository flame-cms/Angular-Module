<?php
/**
 * Class AngularMacros
 *
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date: 28.04.13
 */
namespace Flame\CMS\AngularBundle\Templating;

use Nette\Latte\Compiler;
use Nette\Latte\Macros\MacroSet;

class AngularMacros extends MacroSet
{

	/**
	 * @param Compiler $compiler
	 * @return void|static
	 */
	public static function install(Compiler $compiler)
	{
		$me = new static($compiler);
		$me->addMacro('ng', "echo '{{' . %node.word . '}}'");
	}

}