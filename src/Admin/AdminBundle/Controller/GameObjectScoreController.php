<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\GameObjectScore;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Gameobjectscore controller.
 *
 * @Route("gameobjectscore")
 */
class GameObjectScoreController extends Controller
{
    /**
     * Lists all gameObjectScore entities.
     *
     * @Route("/", name="gameobjectscore_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gameObjectScores = $em->getRepository('AdminAdminBundle:GameObjectScore')->findAll();

        return $this->render('@AdminAdmin/Gameobjectscore/index.html.twig', array(
            'gameObjectScores' => $gameObjectScores,
        ));
    }

    /**
     * Finds and displays a gameObjectScore entity.
     *
     * @Route("/{id}", name="gameobjectscore_show")
     * @Method("GET")
     */
    public function showAction(GameObjectScore $gameObjectScore)
    {
        return $this->render('@AdminAdmin/Gameobjectscore/show.html.twig', array(
            'gameObjectScore' => $gameObjectScore,
        ));
    }
}
