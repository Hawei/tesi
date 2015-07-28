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

    public function addCourseLessonAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:addCourseLesson.html.twig');
    }
    public function courseLessonAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:courseLesson.html.twig');
    }

    public function examsAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:exams.html.twig');
    }

    public function addExamsAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:addExams.html.twig');
    }

    public function locationsAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:locations.html.twig');
    }

    public function  addLocationsAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:addLocation.html.twig');
    }

    public function coOperatorsAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:co-operators.html.twig');
    }

    public function addcoOperatorsAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:addcoOperators.html.twig');
    }

    public function offersAction(){
        return $this->render('ApplocationSonataBackgroundBundle:Management:offer.html.twig');
    }
}

