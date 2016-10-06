<?php

namespace ComparateurBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ComparateurBundle\Entity\Comparateur;
use ComparateurBundle\Form\ComparateurType;

/**
 * Comparateur controller.
 *
 */
class ComparateurController extends Controller
{
    /**
     * Lists all Comparateur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $comparateurs = $em->getRepository('ComparateurBundle:Comparateur')->findAll();

        return $this->render('ComparateurBundle:comparateur:index.html.twig', array(
            'comparateurs' => $comparateurs,
        ));
    }

    /**
     * Creates a new Comparateur entity.
     *
     */
    public function newAction(Request $request)
    {
        $comparateur = new Comparateur();
        $form = $this->createForm('ComparateurBundle\Form\ComparateurType', $comparateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comparateur);
            $em->flush();

            return $this->redirectToRoute('comparateur_show', array('id' => $comparateur->getId()));
        }

        return $this->render('ComparateurBundle:comparateur:new.html.twig', array(
            'comparateur' => $comparateur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Comparateur entity.
     *
     */
    public function showAction(Comparateur $comparateur)
    {
        $deleteForm = $this->createDeleteForm($comparateur);

        return $this->render('ComparateurBundle:comparateur:show.html.twig', array(
            'comparateur' => $comparateur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Comparateur entity.
     *
     */
    public function editAction(Request $request, Comparateur $comparateur)
    {
        $deleteForm = $this->createDeleteForm($comparateur);
        $editForm = $this->createForm('ComparateurBundle\Form\ComparateurType', $comparateur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comparateur);
            $em->flush();

            return $this->redirectToRoute('comparateur_edit', array('id' => $comparateur->getId()));
        }

        return $this->render('ComparateurBundle:comparateur:edit.html.twig', array(
            'comparateur' => $comparateur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Comparateur entity.
     *
     */
    public function deleteAction(Request $request, Comparateur $comparateur)
    {
        $form = $this->createDeleteForm($comparateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($comparateur);
            $em->flush();
        }

        return $this->redirectToRoute('comparateur_index');
    }

    /**
     * Creates a form to delete a Comparateur entity.
     *
     * @param Comparateur $comparateur The Comparateur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Comparateur $comparateur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comparateur_delete', array('id' => $comparateur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
