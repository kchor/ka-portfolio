<?php

namespace Ka\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        return $this->render('KaPortfolioBundle:Homepage:index.html.twig');
    }
}
