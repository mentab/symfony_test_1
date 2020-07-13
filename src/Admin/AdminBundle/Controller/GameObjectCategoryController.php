<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\GameObjectCategory;
use Admin\AdminBundle\Service\FileUploader;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Gameobjectcategory controller.
 *
 * @Route("gameobjectcategory")
 */
class GameObjectCategoryController extends Controller
{
    /**
     * Lists all gameObjectCategory entities.
     *
     * @Route("/", name="gameobjectcategory_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gameObjectCategories = $em->getRepository('Admin\AdminBundle:GameObjectCategory')->findAll();

        return $this->render('Gameobjectcategory/index.html.twig', array(
            'gameObjectCategories' => $gameObjectCategories,
        ));
    }

    /**
     * Creates a new gameObjectCategory entity.
     *
     * @Route("/new", name="gameobjectcategory_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, FileUploader $fileUploader)
    {
        $gameObjectCategory = new Gameobjectcategory();
        $form = $this->createForm('Admin\AdminBundle\Form\GameObjectCategoryType', $gameObjectCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $imageFileName = $fileUploader->upload($imageFile);
                $gameObjectCategory->setImageFilename($imageFileName);
            }
            $imageFile = $form->get('icon')->getData();
            if ($imageFile) {
                $imageFileName = $fileUploader->upload($imageFile);
                $gameObjectCategory->setIconFilename($imageFileName);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($gameObjectCategory);
            $em->flush();

            return $this->redirectToRoute('gameobjectcategory_show', array('id' => $gameObjectCategory->getId()));
        }

        return $this->render('Gameobjectcategory/new.html.twig', array(
            'gameObjectCategory' => $gameObjectCategory,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a gameObjectCategory entity.
     *
     * @Route("/{id}", name="gameobjectcategory_show")
     * @Method("GET")
     */
    public function showAction(gameObjectCategory $gameObjectCategory)
    {
        $deleteForm = $this->createDeleteForm($gameObjectCategory);

        return $this->render('Gameobjectcategory/show.html.twig', array(
            'gameObjectCategory' => $gameObjectCategory,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing gameObjectCategory entity.
     *
     * @Route("/{id}/edit", name="gameobjectcategory_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, gameObjectCategory $gameObjectCategory)
    {
        $deleteForm = $this->createDeleteForm($gameObjectCategory);
        $editForm = $this->createForm('Admin\AdminBundle\Form\GameObjectCategoryType', $gameObjectCategory);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gameobjectcategory_edit', array('id' => $gameObjectCategory->getId()));
        }

        return $this->render('Gameobjectcategory/edit.html.twig', array(
            'gameObjectCategory' => $gameObjectCategory,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a gameObjectCategory entity.
     *
     * @Route("/{id}", name="gameobjectcategory_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, gameObjectCategory $gameObjectCategory)
    {
        $form = $this->createDeleteForm($gameObjectCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($gameObjectCategory);
            $em->flush();
        }

        return $this->redirectToRoute('gameobjectcategory_index');
    }

    /**
     * Creates a form to delete a gameObjectCategory entity.
     *
     * @param gameObjectCategory $gameObjectCategory The gameObjectCategory entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(gameObjectCategory $gameObjectCategory)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gameobjectcategory_delete', array('id' => $gameObjectCategory->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
