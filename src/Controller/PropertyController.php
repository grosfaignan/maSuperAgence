<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{

    public function __construct(PropertyRepository $repository)
    {
        $this->repository=$repository;
        $foo = array("asdads", "czxcxzc");
        dump($foo);
    }
    /**
     * @Route("/biens", name="property.index")  
     * @return Response
     */
    public function index(): Response
    {
        
        // $repository = $this->getDoctrine()->getRepository(Property::class);
        // $foo = array("asdads", "czxcxzc");
        // dump($this->repository);
        return $this->render(
            'property/index.html.twig',
            ['current_menu' => 'properties']
        );
    }
}
