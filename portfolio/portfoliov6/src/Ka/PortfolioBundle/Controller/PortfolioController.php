<?php

namespace Ka\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortfolioController extends Controller
{
    public function indexAction()
    {
        return $this->render('KaPortfolioBundle:Portfolio:index.html.twig');
    }

    public function workAction()
    {
        return $this->render('KaPortfolioBundle:Portfolio:work.html.twig');
    }

    public function cvAction()
    {
        return $this->render('KaPortfolioBundle:Portfolio:cv.html.twig');
    }

    public function contactAction()
    {
        return $this->render('KaPortfolioBundle:Portfolio:contact.html.twig');
    }

    public function linkAction()
    {
        return $this->render('KaPortfolioBundle:Portfolio:link.html.twig');
    }
}
