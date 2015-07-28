<?php
namespace Application\Sonata\BackgroundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ManagementController extends Controller
{
    /**
     * ToDo
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:index.html.twig');
    }

    public function toaddAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:add.html.twig');
    }

    public function toParticipantsAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:participants.html.twig');
    }

    public function contactpersonsAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:contactpersons.html.twig');
    }

    public function addContactpersonsAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:addcontactpersons.html.twig');
    }

    public function participantAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:participant.html.twig');
    }

    public function addparticipantAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:addparticipant.html.twig');
    }

    public function  courseAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:course.html.twig');
    }

    public function addCourseAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:addCourse.html.twig');
    }

    public function processingAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:processing.html.twig');
    }
}

