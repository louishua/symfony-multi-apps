<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $translated = $this->get('translator')->trans('Symfony is great');

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'sf'=>'Symfony is great',
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir')).DIRECTORY_SEPARATOR,
        ));
    }
}
