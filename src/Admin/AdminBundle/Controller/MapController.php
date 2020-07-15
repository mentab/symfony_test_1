<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\Map;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Map controller.
 *
 * @Route("map")
 */
class MapController extends Controller
{
    /**
     * Lists all map entities.
     *
     * @Route("/", name="map_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $maps = $em->getRepository('AdminAdminBundle:Map')->findAll();

        return $this->render('map/index.html.twig', array(
            'maps' => $maps,
        ));
    }

    /**
     * Creates a new map entity.
     *
     * @Route("/new", name="map_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $map = new Map();
        $form = $this->createForm('Admin\AdminBundle\Form\MapType', $map);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($map);
            $em->flush();

            return $this->redirectToRoute('map_show', array('id' => $map->getId()));
        }

        return $this->render('map/new.html.twig', array(
            'map' => $map,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a map entity.
     *
     * @Route("/{id}", name="map_show")
     * @Method("GET")
     */
    public function showAction(Map $map)
    {
        $deleteForm = $this->createDeleteForm($map);

        return $this->render('map/show.html.twig', array(
            'map' => $map,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing map entity.
     *
     * @Route("/{id}/edit", name="map_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Map $map)
    {
        $deleteForm = $this->createDeleteForm($map);
        $editForm = $this->createForm('Admin\AdminBundle\Form\MapType', $map);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('map_edit', array('id' => $map->getId()));
        }

        return $this->render('map/edit.html.twig', array(
            'map' => $map,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a map entity.
     *
     * @Route("/{id}", name="map_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Map $map)
    {
        $form = $this->createDeleteForm($map);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($map);
            $em->flush();
        }

        return $this->redirectToRoute('map_index');
    }

    /**
     * Creates a form to delete a map entity.
     *
     * @param Map $map The map entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Map $map)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('map_delete', array('id' => $map->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
