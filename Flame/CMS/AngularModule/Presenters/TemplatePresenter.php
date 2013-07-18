<?php
/**
 * Class TemplatePresenter
 *
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date: 28.04.13
 */
namespace Flame\CMS\AngularModule\Presenters;

use Nette\Application\UI\Presenter;

class TemplatePresenter extends Presenter
{
	/**
	 * @param $path
	 */
	public function actionDefault($path)
	{
		if ($path !== null) {
			$this->setView($path);
		}
	}

}