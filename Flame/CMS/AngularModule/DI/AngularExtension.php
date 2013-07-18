<?php
/**
 * Class AngularModule
 *
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date: 28.04.13
 */
namespace Flame\CMS\AngularModule\DI;

use Flame\Modules\Extension\ModuleExtension;
use Flame\Modules\Providers\IConfigProvider;

class AngularExtension extends ModuleExtension implements IConfigProvider
{

	/**
	 * @return array
	 */
	public function getConfigFiles()
	{
		return array(
			$this->getConfigPath('config')
		);
	}
}