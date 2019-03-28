<?php
namespace Sputnik\CarouselBundle\Controller\Backend;

use Sputnik\TemplateBundle\Service\TemplateManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GeneralController extends AbstractController
{

    private $templateManager;

    public function __construct(TemplateManager $templateManager)
    {
        $this->templateManager = $templateManager;
    }


    public function index()
    {
        return $this->render('@Carousel/templates/'.$this->templateManager->getCurrentBackend().'/index.html.twig');
    }

}
