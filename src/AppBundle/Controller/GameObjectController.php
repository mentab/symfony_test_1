<?php

namespace AppBundle\Controller;

use AppBundle\Entity\GameObject;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Gameobject controller.
 *
 * @Route("gameobject")
 */
class GameObjectController extends Controller
{
    /**
     * Lists all gameObject entities.
     *
     * @Route("/", name="gameobject_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gameObjects = $em->getRepository('AppBundle:GameObject')->findAll();

        return $this->render('gameobject/index.html.twig', array(
            'gameObjects' => $gameObjects,
        ));
    }

    /**
     * Creates a new gameObject entity.
     *
     * @Route("/new", name="gameobject_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $gameObject = new Gameobject();
        $form = $this->createForm('AppBundle\Form\GameObjectType', $gameObject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($gameObject);
            $em->flush();

            return $this->redirectToRoute('gameobject_show', array('id' => $gameObject->getId()));
        }

        return $this->render('gameobject/new.html.twig', array(
            'gameObject' => $gameObject,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a gameObject entity.
     *
     * @Route("/{id}", name="gameobject_show")
     * @Method("GET")
     */
    public function showAction(GameObject $gameObject)
    {
        $deleteForm = $this->createDeleteForm($gameObject);

        return $this->render('gameobject/show.html.twig', array(
            'gameObject' => $gameObject,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing gameObject entity.
     *
     * @Route("/{id}/edit", name="gameobject_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, GameObject $gameObject)
    {
        $deleteForm = $this->createDeleteForm($gameObject);
        $editForm = $this->createForm('AppBundle\Form\GameObjectType', $gameObject);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gameobject_edit', array('id' => $gameObject->getId()));
        }

        return $this->render('gameobject/edit.html.twig', array(
            'gameObject' => $gameObject,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a gameObject entity.
     *
     * @Route("/{id}", name="gameobject_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, GameObject $gameObject)
    {
        $form = $this->createDeleteForm($gameObject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($gameObject);
            $em->flush();
        }

        return $this->redirectToRoute('gameobject_index');
    }

    /**
     * Creates a form to delete a gameObject entity.
     *
     * @param GameObject $gameObject The gameObject entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(GameObject $gameObject)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gameobject_delete', array('id' => $gameObject->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}