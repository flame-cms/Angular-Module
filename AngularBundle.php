<?php
/**
 * Class AngularBundle
 *
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date: 28.04.13
 */
namespace Flame\CMS\AngularBundle;

use Flame\Bundles\IBundle;
use Flame\Bundles\Bundle;

class AngularBundle extends Bundle
{

	/**
	 * @return array
	 */
	public function getConfigFiles()
	{
		return array(
			$this->getCurrentPath() . '/config/config.neon'
		);
	}
}