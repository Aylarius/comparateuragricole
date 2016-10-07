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

    public function setFraisDePortsRouenAction(){
        /****************** taleaux ************************/
        $rouen = array (
            "5" => "3.06",
            "10" => "3.39",
            "15" => "3.85",
            "20" => "4.18",
            "25" => "4.53",
            "30" => "4.87",
            "35" => "5.21",
            "40" => "5.54",
            "45" => "5.87",
            "50" => "6.23",
            "60" => "6.85",
            "70" => "7.49",
            "80" => "8.12",
            "90" => "9.45",
            "100" => "10.13",
            "110" => "10.41",
            "120" => "10.79",
            "130" => "11.22",
            "140" => "11.63",
            "150" => "12.05",
            "160" => "11.54",
            "170" => "11.9",
            "180" => "12.29",
            "190" => "12.67",
            "200" => "13.05",
            "210" => "13.43",
            "220" => "13.79",
            "230" => "14.18",
            "240" => "14.55",
            "250" => "14.95",
            "260" => "15.3",
            "270" => "15.69",
            "280" => "16.07",
            "290" => "16.45",
            "300" => "16.83",
            "310" => "17.2",
            "320" => "17.57",
            "330" => "17.95",
            "340" => "18.34",
            "350" => "18.71",
            "360" => "19.22",
            "370" => "19.72",
            "380" => "20.25",
            "390" => "20.75",
            "400" => "21.25",
            "410" => "21.76",
            "420" => "22.28",
            "430" => "22.78",
            "440" => "23.29",
            "450" => "23.79",
            "460" => "24.31",
            "470" => "24.82",
            "480" => "25.32",
            "490" => "25.84",
            "500" => "26.35",
            "510" => "26.84",
            "520" => "27.36",
            "530" => "27.87",
            "540" => "28.37",
            "550" => "28.9",
            "560" => "29.39",
            "570" => "29.9",
            "580" => "30.42",
            "590" => "30.92",
            "600" => "31.42",
            "610" => "31.93",
            "620" => "32.45",
            "630" => "32.95",
            "640" => "33.47",
            "650" => "33.99",
            "660" => "34.47",
            "670" => "34.98",
            "680" => "35.5",
            "690" => "36",
            "700" => "36.51");

        $paris = array (
            "5" => "3.45",
            "10" => "3.82",
            "15" => "4.33",
            "20" => "4.72",
            "25" => "5.12",
            "30" => "5.49",
            "35" => "5.89",
            "40" => "6.25",
            "45" => "6.63",
            "50" => "7.02",
            "60" => "7.73",
            "70" => "8.45",
            "80" => "9.16",
            "90" => "9.88",
            "100" => "10.59",
            "110" => "10.88",
            "120" => "11.29",
            "130" => "11.73",
            "140" => "12.16",
            "150" => "12.58",
            "160" => "13",
            "170" => "13.42",
            "180" => "13.85",
            "190" => "14.28",
            "200" => "14.71",
            "210" => "15.15",
            "220" => "15.54",
            "230" => "15.99",
            "240" => "16.41",
            "250" => "16.85",
            "260" => "17.26",
            "270" => "17.69",
            "280" => "18.12",
            "290" => "18.55",
            "300" => "18.98",
            "310" => "19.39",
            "320" => "19.81",
            "330" => "20.24",
            "340" => "20.67",
            "350" => "21.1",
            "360" => "21.67",
            "370" => "22.24",
            "380" => "22.84",
            "390" => "23.39",
            "400" => "23.96",
            "410" => "24.53",
            "420" => "25.11",
            "430" => "25.69",
            "440" => "26.25",
            "450" => "26.83",
            "460" => "27.41",
            "470" => "27.98",
            "480" => "28.56",
            "490" => "29.13",
            "500" => "29.7",
            "510" => "30.26",
            "520" => "30.84",
            "530" => "31.43",
            "540" => "31.98",
            "550" => "32.57",
            "560" => "33.14",
            "570" => "33.72",
            "580" => "34.3",
            "590" => "34.86",
            "600" => "35.42",
            "610" => "36",
            "620" => "36.59",
            "630" => "37.14",
            "640" => "37.73",
            "650" => "38.31",
            "660" => "38.87",
            "670" => "39.45",
            "680" => "40.03",
            "690" => "40.59",
            "700" => "41.16");
        /******************** fin tableaux ***************/
        //$ville = $_POST['ville'];// le boutton sera <input type="text" name="ville"/> pour que $_POST appel son contenu.
        $ville = 'rambouillet';
         $destinations = "Rouen";
        $fraisDePort = 0;

        //calcul distance ville  rouen
        $q = "http://maps.googleapis.com/maps/api/distancematrix/json?origins=".$ville."&destinations=".$destinations."&mode=driving&sensor=false";
        $json = file_get_contents($q);
        $details = json_decode($json, TRUE);
        $distanceRouen = $details['rows'][0]['elements'][0]['distance']['value'];


        //calcul distance ville paris
        $destinations = "Paris";
        $q = "http://maps.googleapis.com/maps/api/distancematrix/json?origins=".$ville."&destinations=".$destinations."&mode=driving&sensor=false";
        $json = file_get_contents($q);
        $details = json_decode($json, TRUE);
        $distanceParis = $details['rows'][0]['elements'][0]['distance']['value'];

        if ($distanceRouen < $distanceParis){
            //rouen
            $distanceRouen = round($distanceRouen/1000);

            foreach($rouen as $key => $value){
                if ($distanceRouen < $key){
                    $fraisDePort = $value;
                    break;
                }
            }
        }
        else{
            //paris
            $distanceParis = round($distanceParis/1000);

            foreach ($paris as $key => $value){
                if ($distanceParis < $key){
                    $fraisDePort = $value;
                    break;
                }
            }
        }
        
var_dump($fraisDePort);

        exit;
















































        /*if $rouen
        foreach($rouen as $key=>$value)
            if ($distance < $key)
                return $this -> render (chemintwig, array ( '$key'=>'value'));
            else $paris;
*/

    }



}

