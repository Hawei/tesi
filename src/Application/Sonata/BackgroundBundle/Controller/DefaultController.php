<?php

namespace Application\Sonata\BackgroundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplocationSonataBackgroundBundle:Default:index.html.twig', array('name' => $name));
    }
}
