<?php
namespace Sputnik\CarouselBundle\Routing;

use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Routing\RouteCollection;

class ExtraLoader extends Loader
{
    private $loaded = false;


    public function load($resource, $type = null)
    {
        if (true === $this->loaded) {
            throw new \RuntimeException('Do not add "extra" loader twice');
        }
        
        $routes = new RouteCollection();
        $route =$this->import('@CarouselBundle/Resources/config/routes.yaml', 'yaml');
        $routes->addCollection($route);
        $this->loaded = true;

        return $routes;
    }

    public function supports($resource, $type = null)
    {
        return $type === 'backend_extra';
    }
}
