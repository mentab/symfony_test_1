<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\Zone;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Zone controller.
 *
 * @Route("zone")
 */
class ZoneController extends Controller
{
    /**
     * Lists all zone entities.
     *
     * @Route("/", name="zone_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $zones = $em->getRepository('AdminAdminBundle:Zone')->findAll();

        return $this->render('@AdminAdmin/Zone/index.html.twig', array(
            'zones' => $zones,
        ));
    }

    /**
     * Creates a new zone entity.
     *
     * @Route("/new", name="zone_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $zone = new Zone();
        $form = $this->createForm('Admin\AdminBundle\Form\ZoneType', $zone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($zone);
            $em->flush();

            return $this->redirectToRoute('zone_show', array('id' => $zone->getId()));
        }

        return $this->render('@AdminAdmin/Zone/new.html.twig', array(
            'zone' => $zone,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a zone entity.
     *
     * @Route("/{id}", name="zone_show")
     * @Method("GET")
     */
    public function showAction(Zone $zone)
    {
        $deleteForm = $this->createDeleteForm($zone);

        return $this->render('@AdminAdmin/Zone/show.html.twig', array(
            'zone' => $zone,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing zone entity.
     *
     * @Route("/{id}/edit", name="zone_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Zone $zone)
    {
        $deleteForm = $this->createDeleteForm($zone);
        $editForm = $this->createForm('Admin\AdminBundle\Form\ZoneType', $zone);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('zone_edit', array('id' => $zone->getId()));
        }

        return $this->render('@AdminAdmin/Zone/edit.html.twig', array(
            'zone' => $zone,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a zone entity.
     *
     * @Route("/{id}", name="zone_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Zone $zone)
    {
        $form = $this->createDeleteForm($zone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($zone);
            $em->flush();
        }

        return $this->redirectToRoute('zone_index');
    }

    /**
     * Creates a form to delete a zone entity.
     *
     * @param Zone $zone The zone entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Zone $zone)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('zone_delete', array('id' => $zone->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
