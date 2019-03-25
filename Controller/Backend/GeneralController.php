<?php
namespace Sputnik\CarouselBundle\Controller\Backend;

use Sputnik\TemplateBundle\Service\TemplateManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GeneralController extends AbstractController
{

    private $themeManager;

    public function __construct(TemplateManager $themeManager)
    {
        $this->themeManager = $themeManager;
    }


    public function index()
    {
        return $this->render('@Carousel/templates/'.$this->themeManager->getCurrentBackend().'/index.html.twig');
    }

}
