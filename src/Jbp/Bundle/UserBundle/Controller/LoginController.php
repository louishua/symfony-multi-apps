<?php

namespace Jbp\Bundle\UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{

    /**
     * 登陆页
     * @param Request $request
     */
    public function indexAction(Request $request)
    {
        $curUser = $this->getUser();
        if ($curUser) {
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

    /**
     * 设置登陆后逻辑
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function afterLoginAction(Request $request)
    {

        $appAddress = $this->getParameter('app');
        $error = $this->get('security.authentication_utils')->getLastAuthenticationError();
        return $this->render('login/after_login.html.twig',[
            'app_address' => $appAddress,
            'error'       => $error,
        ]);
    }

    /**
     * 设置注销后逻辑
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function afterLogoutAction(Request $request)
    {
        $appAddress = $this->getParameter('app');
        $error = $this->get('security.authentication_utils')->getLastAuthenticationError();
        return $this->render('login/after_logout.html.twig',[
            'app_address' => $appAddress,
            'error'       => $error,
        ]);
    }

}
