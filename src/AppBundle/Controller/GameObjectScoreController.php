<?php

namespace AppBundle\Controller;

use AppBundle\Entity\GameObjectScore;
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

        $gameObjectScores = $em->getRepository('AppBundle:GameObjectScore')->findAll();

        return $this->render('gameobjectscore/index.html.twig', array(
            'gameObjectScores' => $gameObjectScores,
        ));
    }

    /**
     * Creates a new gameObjectScore entity.
     *
     * @Route("/new", name="gameobjectscore_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $gameObjectScore = new Gameobjectscore();
        $form = $this->createForm('AppBundle\Form\GameObjectScoreType', $gameObjectScore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($gameObjectScore);
            $em->flush();

            return $this->redirectToRoute('gameobjectscore_show', array('id' => $gameObjectScore->getId()));
        }

        return $this->render('gameobjectscore/new.html.twig', array(
            'gameObjectScore' => $gameObjectScore,
            'form' => $form->createView(),
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
        $deleteForm = $this->createDeleteForm($gameObjectScore);

        return $this->render('gameobjectscore/show.html.twig', array(
            'gameObjectScore' => $gameObjectScore,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing gameObjectScore entity.
     *
     * @Route("/{id}/edit", name="gameobjectscore_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, GameObjectScore $gameObjectScore)
    {
        $deleteForm = $this->createDeleteForm($gameObjectScore);
        $editForm = $this->createForm('AppBundle\Form\GameObjectScoreType', $gameObjectScore);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gameobjectscore_edit', array('id' => $gameObjectScore->getId()));
        }

        return $this->render('gameobjectscore/edit.html.twig', array(
            'gameObjectScore' => $gameObjectScore,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a gameObjectScore entity.
     *
     * @Route("/{id}", name="gameobjectscore_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, GameObjectScore $gameObjectScore)
    {
        $form = $this->createDeleteForm($gameObjectScore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($gameObjectScore);
            $em->flush();
        }

        return $this->redirectToRoute('gameobjectscore_index');
    }

    /**
     * Creates a form to delete a gameObjectScore entity.
     *
     * @param GameObjectScore $gameObjectScore The gameObjectScore entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(GameObjectScore $gameObjectScore)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gameobjectscore_delete', array('id' => $gameObjectScore->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
