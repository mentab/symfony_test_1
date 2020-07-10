<?php

namespace AppBundle\Controller;

use AppBundle\Entity\GameObjectTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Gameobjecttime controller.
 *
 * @Route("gameobjecttime")
 */
class GameObjectTimeController extends Controller
{
    /**
     * Lists all gameObjectTime entities.
     *
     * @Route("/", name="gameobjecttime_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gameObjectTimes = $em->getRepository('AppBundle:GameObjectTime')->findAll();

        return $this->render('gameobjecttime/index.html.twig', array(
            'gameObjectTimes' => $gameObjectTimes,
        ));
    }

    /**
     * Finds and displays a gameObjectTime entity.
     *
     * @Route("/{id}", name="gameobjecttime_show")
     * @Method("GET")
     */
    public function showAction(GameObjectTime $gameObjectTime)
    {
        return $this->render('gameobjecttime/show.html.twig', array(
            'gameObjectTime' => $gameObjectTime,
        ));
    }
}
