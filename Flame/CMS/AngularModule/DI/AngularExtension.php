<?php
/**
 * Class AngularModule
 *
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date: 28.04.13
 */
namespace Flame\CMS\AngularModule\DI;

use Flame\Modules\Extension\NamedExtension;
use Flame\Modules\Providers\IConfigProvider;

class AngularExtension extends NamedExtension implements IConfigProvider
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