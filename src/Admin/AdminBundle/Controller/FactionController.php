<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\Faction;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Faction controller.
 *
 * @Route("faction")
 */
class FactionController extends Controller
{
    /**
     * Lists all faction entities.
     *
     * @Route("/", name="faction_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $factions = $em->getRepository('AdminAdminBundle:Faction')->findAll();

        return $this->render('@AdminAdmin/Faction/index.html.twig', array(
            'factions' => $factions,
        ));
    }

    /**
     * Creates a new faction entity.
     *
     * @Route("/new", name="faction_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $faction = new Faction();
        $form = $this->createForm('Admin\AdminBundle\Form\FactionType', $faction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($faction);
            $em->flush();

            return $this->redirectToRoute('faction_show', array('id' => $faction->getId()));
        }

        return $this->render('@AdminAdmin/Faction/new.html.twig', array(
            'faction' => $faction,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a faction entity.
     *
     * @Route("/{id}", name="faction_show")
     * @Method("GET")
     */
    public function showAction(Faction $faction)
    {
        $deleteForm = $this->createDeleteForm($faction);

        return $this->render('@AdminAdmin/Faction/show.html.twig', array(
            'faction' => $faction,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing faction entity.
     *
     * @Route("/{id}/edit", name="faction_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Faction $faction)
    {
        $deleteForm = $this->createDeleteForm($faction);
        $editForm = $this->createForm('Admin\AdminBundle\Form\FactionType', $faction);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('faction_edit', array('id' => $faction->getId()));
        }

        return $this->render('@AdminAdmin/Faction/edit.html.twig', array(
            'faction' => $faction,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a faction entity.
     *
     * @Route("/{id}", name="faction_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Faction $faction)
    {
        $form = $this->createDeleteForm($faction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($faction);
            $em->flush();
        }

        return $this->redirectToRoute('faction_index');
    }

    /**
     * Creates a form to delete a faction entity.
     *
     * @param Faction $faction The faction entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Faction $faction)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('faction_delete', array('id' => $faction->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
