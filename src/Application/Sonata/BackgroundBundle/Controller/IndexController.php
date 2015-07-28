<?php
namespace Application\Sonata\BackgroundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Index:index.html.twig');
    }

    public function addCustomerAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Index:addCustomer.html.twig');
    }

    public function addOfferAction(){
        return $this->render("ApplocationSonataBackgroundBundle:Index:addoffer.html.twig");
    }

}