<?php
namespace Application\Sonata\BackgroundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplocationSonataBackgroundBundle:Login:index.html.twig');
    }

    public function loginAction(){
        // 简单验证一下密码
        $user_str = $_POST["username_str"] ? $_POST["username_str"] : "";
        $pwd_str = $_POST["password_str"] ? $_POST["password_str"] : "";
        if($pwd_str && $user_str){
            if($user_str == "xk@xiaoka.com" && $pwd_str == "xiaoka123"){
                return $this->redirectToRoute("applocation_sonata_background_indexpage");
            }
        }
        return $this->redirectToRoute("applocation_sonata_background_homepage");
    }
}
