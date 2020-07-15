<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\Parcel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Parcel controller.
 *
 * @Route("parcel")
 */
class ParcelController extends Controller
{
    /**
     * Lists all parcel entities.
     *
     * @Route("/", name="parcel_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $parcels = $em->getRepository('AdminAdminBundle:Parcel')->findAll();

        return $this->render('parcel/index.html.twig', array(
            'parcels' => $parcels,
        ));
    }

    /**
     * Creates a new parcel entity.
     *
     * @Route("/new", name="parcel_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $parcel = new Parcel();
        $form = $this->createForm('Admin\AdminBundle\Form\ParcelType', $parcel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($parcel);
            $em->flush();

            return $this->redirectToRoute('parcel_show', array('id' => $parcel->getId()));
        }

        return $this->render('parcel/new.html.twig', array(
            'parcel' => $parcel,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a parcel entity.
     *
     * @Route("/{id}", name="parcel_show")
     * @Method("GET")
     */
    public function showAction(Parcel $parcel)
    {
        $deleteForm = $this->createDeleteForm($parcel);

        return $this->render('parcel/show.html.twig', array(
            'parcel' => $parcel,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing parcel entity.
     *
     * @Route("/{id}/edit", name="parcel_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Parcel $parcel)
    {
        $deleteForm = $this->createDeleteForm($parcel);
        $editForm = $this->createForm('Admin\AdminBundle\Form\ParcelType', $parcel);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('parcel_edit', array('id' => $parcel->getId()));
        }

        return $this->render('parcel/edit.html.twig', array(
            'parcel' => $parcel,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a parcel entity.
     *
     * @Route("/{id}", name="parcel_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Parcel $parcel)
    {
        $form = $this->createDeleteForm($parcel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($parcel);
            $em->flush();
        }

        return $this->redirectToRoute('parcel_index');
    }

    /**
     * Creates a form to delete a parcel entity.
     *
     * @param Parcel $parcel The parcel entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Parcel $parcel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('parcel_delete', array('id' => $parcel->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
