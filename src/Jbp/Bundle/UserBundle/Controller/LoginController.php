<?php

namespace Jbp\Bundle\UserBundle\Controller;

use Doctrine\Common\Util\Debug;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;

class LoginController extends Controller
{

    /**
     * @param Request $request
     */
    public function indexAction(Request $request)
    {

        $curUser = $this->getUser();
        if ($curUser) {
            return $this->redirectToRoute("/");
        }
        $session = $request->getSession();
        // get the login error if there is one
        if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                Security::AUTHENTICATION_ERROR
            );
        } elseif (null !== $session && $session->has(Security::AUTHENTICATION_ERROR)) {
            $error = $session->get(Security::AUTHENTICATION_ERROR);
            $session->remove(Security::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }
        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get(Security::LAST_USERNAME);
        return array(
            // last username entered by the user
            'last_username' => $lastUsername,//$session->get(SecurityContextInterface::LAST_USERNAME),
            'error'         => $error,
        );
    }

    public function doLoginAction(Request $request){
    }

    /**
     * @param Request $request
     */
    public function logoutAction(Request $request)
    {
        $userService = $this->get('user_service');
        $reg = $userService->logout();
        if(!$reg)
        {
            echo "注销失败".time();exit;
        }else{
            echo "注销成功".time();
            return $this->redirectToRoute('userBundle-index');
        }
    }
}
