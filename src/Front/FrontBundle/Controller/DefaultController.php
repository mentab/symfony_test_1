<?php

namespace Front\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="front_homepage")
     */
    public function indexAction()
    {
        return $this->render('@FrontFront/Default/index.html.twig');
    }
}
