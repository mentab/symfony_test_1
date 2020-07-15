<?php

namespace Client\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="client_homepage")
     */
    public function indexAction()
    {
        return $this->render('@ClientClient/Default/index.html.twig');
    }
}
