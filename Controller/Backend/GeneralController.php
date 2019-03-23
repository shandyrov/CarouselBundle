<?php
namespace App\Sputnik\CarouselBundle\Controller\Backend;

use App\Service\ThemeManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GeneralController extends AbstractController
{

    private $themeManager;

    public function __construct(ThemeManager $themeManager)
    {
        $this->themeManager = $themeManager;
    }


    public function index()
    {
        return $this->render('@Carousel/templates/'.$this->themeManager->getCurrentBackend().'/index.html.twig');
    }

}