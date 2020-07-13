<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\GameObjectValue;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Gameobjectvalue controller.
 *
 * @Route("gameobjectvalue")
 */
class GameObjectValueController extends Controller
{
    /**
     * Lists all gameObjectValue entities.
     *
     * @Route("/", name="gameobjectvalue_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gameObjectValues = $em->getRepository('AdminAdminBundle:GameObjectValue')->findAll();

        return $this->render('@AdminAdmin/Gameobjectvalue/index.html.twig', array(
            'gameObjectValues' => $gameObjectValues,
        ));
    }

    /**
     * Finds and displays a gameObjectValue entity.
     *
     * @Route("/{id}", name="gameobjectvalue_show")
     * @Method("GET")
     */
    public function showAction(GameObjectValue $gameObjectValue)
    {
        return $this->render('@AdminAdmin/Gameobjectvalue/show.html.twig', array(
            'gameObjectValue' => $gameObjectValue,
        ));
    }
}
