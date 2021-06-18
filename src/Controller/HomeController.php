<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Ingredients;
use App\Entity\Recettes;

use App\Form\SearchForm;
use App\Repository\IngredientsRepository;
use App\Repository\RecettesRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(Request $request, RecettesRepository $repo)
    {

        $form = $this->createForm(SearchForm::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();

            $pain_form = $form->get('pain')->getData()->getNomIngredient();
            $sauce_form = $form->get('sauce')->getData()->getNomIngredient();
            $viande_form = $form->get('viande')->getData()->getNomIngredient();
            $fromage_form = $form->get('fromage')->getData()->getNomIngredient();

            $recettes = $repo->findBy(
                array('pain' => $pain_form, 'sauce' => $sauce_form));
            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            return $this->render('home/index_two.html.twig', [
                'form' => $form->createView(),
                'recettes' => $recettes,
              

            ]);

        }

        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
            'pain' => ''
        ]);
        }


    /**
     * @Route("/", name="app_home_two")
     */
    public function index2(): Response
    {
        return $this->render('home/index_two.html.twig', [
            
        ]);
    }
}
