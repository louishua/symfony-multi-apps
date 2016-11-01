<?php

namespace Jbp\Bundle\UserBundle\Controller;

<<<<<<< HEAD
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
=======
use Doctrine\Common\Util\Debug;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;
>>>>>>> f60832038a874a1ed70371b062a904c2f42f68d5

class LoginController extends Controller
{

    /**
     * @param Request $request
     */
    public function indexAction(Request $request)
    {
<<<<<<< HEAD
        $curUser = $this->getUser();
        if ($curUser) {
            var_dump($curUser);exit;
            return $this->redirectToRoute("jbp_user_index");
        }
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('login/index.html.twig',[
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }


    public function loginCheckAction()
    {
    }


    public function loginOutAction()
    {
=======

        $curUser = $this->getUser();
        if ($curUser) {
            return $this->redirectToRoute("jbp_user_index");
        }

        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

//        return $this->render(
//            'JbpWebBundle:Security:login.html.twig',
//            array(
//                // last username entered by the user
//                'last_username' => $lastUsername,
//                'error'         => $error,
//            )
//        );
    }

    public function loginCheckAction()
    {

    }

    public function loginOutAction()
    {

>>>>>>> f60832038a874a1ed70371b062a904c2f42f68d5
    }

}
