<?php

namespace Ka\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ka\PortfolioBundle\Entity\Project;
use Ka\PortfolioBundle\Entity\Technology;

class PortfolioController extends Controller
{
  public function indexAction()
  {
    return $this->render('KaPortfolioBundle:Portfolio:index.html.twig');
  }

  public function workAction()
  {
    $repository = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('KaPortfolioBundle:Project');

    $projects = $repository->findAll();

    return $this->render('KaPortfolioBundle:Portfolio:work.html.twig', array(
      'projects' => $projects
    ));
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

  public function addProjectAction()
  {
    $project = new Project();
    $project->setName('Jeu MACSF');
    $project->setDescription('Projet en D7 bla bla');
    $project->setShortDescription('Projet en D7');
    $project->setDuration('Un mois');
    $project->setLink('http://demarrermaviepro.fr');
    $project->setPicture('macsf_picture');

    $em = $this->getDoctrine()->getManager();
    $em->persist($project);

    $em->flush();

    $this->get('session')->getFlashBag()->add('info', 'Project added !');

    return $this->render('KaPortfolioBundle:Portfolio:addProject.html.twig');
  }

  public function addTechnologyAction()
  {
    $project = new Technology();
    $project->setName('Drupal 7');
    $project->setCategory('Informatique');
    $project->setPicture('info_picture');

    $em = $this->getDoctrine()->getManager();
    $em->persist($project);

    $project = new Technology();
    $project->setName('PHP');
    $project->setCategory('Informatique');
    $project->setPicture('info_picture');
    $em->persist($project);

    $project = new Technology();
    $project->setName('Drupal 7');
    $project->setCategory('Informatique');
    $project->setPicture('info_picture');
    $em->persist($project);

    $project = new Technology();
    $project->setName('CSS');
    $project->setCategory('Informatique');
    $project->setPicture('info_picture');
    $em->persist($project);

    $project = new Technology();
    $project->setName('MySQL');
    $project->setCategory('Informatique');
    $project->setPicture('info_picture');
    $em->persist($project);

    $em->flush();

    $this->get('session')->getFlashBag()->add('info', 'Techno added !');

    return $this->render('KaPortfolioBundle:Portfolio:addTechnology.html.twig');
  }


}
