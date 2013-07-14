<?php
/**
 * Class RouterFactory
 *
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date: 28.04.13
 */
namespace Flame\CMS\AngularBundle\Router;

use Flame\Bundles\Router\IRouter;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;

class AngularRouter implements IRouter
{

	/**
	 * @return array
	 */
	public function getRouteList()
	{
		$router = new RouteList();
		$router[] = new Route('template/[<path .+>]', 'Template:default');
		return $router;
	}
}