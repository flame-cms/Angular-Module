<?php
/**
 * Class AngularModule
 *
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date: 28.04.13
 */
namespace Flame\CMS\AngularModule\DI;

use Flame\Modules\Extension\NamedExtension;
use Flame\Modules\Providers\ILatteMacrosProvider;
use Flame\Modules\Providers\IPresenterMappingProvider;

class AngularExtension extends NamedExtension implements ILatteMacrosProvider, IPresenterMappingProvider
{

	/**
	 * Get array of latte macros classes
	 *
	 * @return array
	 */
	public function getLatteMacros()
	{
		return array(
			'Flame\CMS\AngularModule\Templating\AngularMacros'
		);
	}

	/**
	 * Returns array of ClassNameMask => PresenterNameMask
	 *
	 * @see https://github.com/nette/nette/blob/master/Nette/Application/PresenterFactory.php#L138
	 * @return array
	 */
	public function getPresenterMapping()
	{
		return array(
			'Angular' => 'Flame\CMS\AngularModule\*Module\Presenters\*Presenter'
		);
	}}