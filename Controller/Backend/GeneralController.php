<?php
namespace Sputnik\CarouselBundle\Controller\Backend;

use Sputnik\TemplateBundle\Service\TemplateManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GeneralController extends AbstractController
{

    private $themeManager;

    public function __construct(TemplateManager $templateManager)
    {
        $this->themeManager = $templateManager;
    }


    public function index()
    {
        return $this->render('@Carousel/templates/'.$this->templateManager->getCurrentBackend().'/index.html.twig');
    }

}
