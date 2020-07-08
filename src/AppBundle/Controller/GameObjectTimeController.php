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
     * Creates a new gameObjectTime entity.
     *
     * @Route("/new", name="gameobjecttime_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $gameObjectTime = new Gameobjecttime();
        $form = $this->createForm('AppBundle\Form\GameObjectTimeType', $gameObjectTime);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($gameObjectTime);
            $em->flush();

            return $this->redirectToRoute('gameobjecttime_show', array('id' => $gameObjectTime->getId()));
        }

        return $this->render('gameobjecttime/new.html.twig', array(
            'gameObjectTime' => $gameObjectTime,
            'form' => $form->createView(),
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
        $deleteForm = $this->createDeleteForm($gameObjectTime);

        return $this->render('gameobjecttime/show.html.twig', array(
            'gameObjectTime' => $gameObjectTime,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing gameObjectTime entity.
     *
     * @Route("/{id}/edit", name="gameobjecttime_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, GameObjectTime $gameObjectTime)
    {
        $deleteForm = $this->createDeleteForm($gameObjectTime);
        $editForm = $this->createForm('AppBundle\Form\GameObjectTimeType', $gameObjectTime);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gameobjecttime_edit', array('id' => $gameObjectTime->getId()));
        }

        return $this->render('gameobjecttime/edit.html.twig', array(
            'gameObjectTime' => $gameObjectTime,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a gameObjectTime entity.
     *
     * @Route("/{id}", name="gameobjecttime_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, GameObjectTime $gameObjectTime)
    {
        $form = $this->createDeleteForm($gameObjectTime);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($gameObjectTime);
            $em->flush();
        }

        return $this->redirectToRoute('gameobjecttime_index');
    }

    /**
     * Creates a form to delete a gameObjectTime entity.
     *
     * @param GameObjectTime $gameObjectTime The gameObjectTime entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(GameObjectTime $gameObjectTime)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gameobjecttime_delete', array('id' => $gameObjectTime->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
