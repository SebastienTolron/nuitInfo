<?php

namespace Dvg\ServerBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dvg\ServerBundle\AmazonClass\AmazonProductAPI;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DvgServerBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function getAmazonProductAction($keywords)
    {
        $amazonApi = $this->container->get('dvg_server.amazon_api');
    
        try
        {
            $result = $amazonApi->searchProducts("$keywords",
                                           "",
                                           "TITLE");
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
        
        $products = array();
        foreach($result->Items->Item as $product)
        {
            $prodAttr = array(
                "title" => ((string) $product->ItemAttributes->Title),
                "price" => ((string) $product->OfferSummary->LowestNewPrice->FormattedPrice),
                "link" => ((string) $product->DetailPageURL),
                "image" => ((string) $product->MediumImage->URL)
            );
            var_dump($prodAttr);
            array_push($products, $prodAttr);
        }
      //  var_dump($result);
      
        $response = new JsonResponse($products);
        return $response;
       // return $this->render('DvgServerBundle:Default:index.html.twig', array('name' => $result->Items->Item->ItemAttributes->Title));
        
    }
    
    public function familleAction($pConcept)
    {
                    $em = $this -> getDoctrine() -> getManager();
                    $repository_concept = $em -> getRepository('DvgServerBundle:Concept');
                    $repository_famille = $em -> getRepository('DvgServerBundle:Famille');
                    $repository_famille_concept = $em -> getRepository('DvgServerBundle:FamilleConcept');
                    $repository_mot = $em -> getRepository('DvgServerBundle:Mot');

                    $res = $repository_concept -> findBy(array('nom_concept' => $pConcept));
                    //var_dump($res);
                    $res2 = $repository_famille_concept -> findBy(array('id_concept' => $res[0] -> getId_concept()));
                    $concepts = array();
                    foreach($res2 as $valeur)
                    {
                        $tab = $repository_famille_concept -> findBy(
                                            array(
                                                    'id_famille' => $valeur -> getId_famille()
                                            )
                                    );
                        foreach($tab as $val)
                        {
                            $tmp = $val -> getId_concept();
                            $entity = $repository_concept -> find($tmp);
                            $jsonObject = array(
                                'name' => $entity->getNom_concept(),
                                'url' => "http://david-contre-goliath.c-mnt.com/icone/".$entity->getNom_concept().".png"
                            );
                            array_push($concepts, $jsonObject);
                        }
                    }
                   // $concepts = array();
                    $tableau_json =  new JsonResponse($concepts);
                    return $tableau_json;
    }
    
}
