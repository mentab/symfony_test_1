<?php

namespace AppBundle\Controller;

use AppBundle\Entity\GameObjectValue;
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

        $gameObjectValues = $em->getRepository('AppBundle:GameObjectValue')->findAll();

        return $this->render('gameobjectvalue/index.html.twig', array(
            'gameObjectValues' => $gameObjectValues,
        ));
    }

    /**
     * Creates a new gameObjectValue entity.
     *
     * @Route("/new", name="gameobjectvalue_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $gameObjectValue = new Gameobjectvalue();
        $form = $this->createForm('AppBundle\Form\GameObjectValueType', $gameObjectValue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($gameObjectValue);
            $em->flush();

            return $this->redirectToRoute('gameobjectvalue_show', array('id' => $gameObjectValue->getId()));
        }

        return $this->render('gameobjectvalue/new.html.twig', array(
            'gameObjectValue' => $gameObjectValue,
            'form' => $form->createView(),
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
        $deleteForm = $this->createDeleteForm($gameObjectValue);

        return $this->render('gameobjectvalue/show.html.twig', array(
            'gameObjectValue' => $gameObjectValue,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing gameObjectValue entity.
     *
     * @Route("/{id}/edit", name="gameobjectvalue_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, GameObjectValue $gameObjectValue)
    {
        $deleteForm = $this->createDeleteForm($gameObjectValue);
        $editForm = $this->createForm('AppBundle\Form\GameObjectValueType', $gameObjectValue);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gameobjectvalue_edit', array('id' => $gameObjectValue->getId()));
        }

        return $this->render('gameobjectvalue/edit.html.twig', array(
            'gameObjectValue' => $gameObjectValue,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a gameObjectValue entity.
     *
     * @Route("/{id}", name="gameobjectvalue_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, GameObjectValue $gameObjectValue)
    {
        $form = $this->createDeleteForm($gameObjectValue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($gameObjectValue);
            $em->flush();
        }

        return $this->redirectToRoute('gameobjectvalue_index');
    }

    /**
     * Creates a form to delete a gameObjectValue entity.
     *
     * @param GameObjectValue $gameObjectValue The gameObjectValue entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(GameObjectValue $gameObjectValue)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gameobjectvalue_delete', array('id' => $gameObjectValue->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
