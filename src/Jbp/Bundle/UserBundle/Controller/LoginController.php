<?php

namespace Jbp\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{

    /**
     * @param Request $request
     */
    public function indexAction(Request $request)
    {
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
    }

}
