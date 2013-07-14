<?php
/**
 * Class AngularBundle
 *
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date: 28.04.13
 */
namespace Flame\CMS\AngularBundle;

use Flame\Bundles\IBundle;

class AngularBundle implements IBundle
{

	/**
	 * @return array
	 */
	public function getConfigFiles()
	{
		return array(
			$this->getCurrentPahth() . '/config/config.neon'
		);
	}
}