<?php

namespace App\Controller;

use App\Entity\Blueprint;
use App\Repository\BlueprintRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;

final class BlueprintController extends AbstractController
{
    /**
     * Index action.
     *
     * @param BlueprintRepository $blueprintRepository Blueprint repository
     * @param Request $request HTTP Request
     * @param PaginatorInterface $paginator Paginator
     *
     * @return Response HTTP response
     */
    #[Route('/blueprint', name: 'blueprint_index', methods:['GET'])]
    public function index(Request $request, BlueprintRepository $blueprintRepository, PaginatorInterface $paginator, #[MapQueryParameter] int $page = 1): Response
    {
            $pagination = $paginator->paginate(
            $blueprintRepository->queryAll(),
            $page,
            BlueprintRepository::PAGINATOR_ITEMS_PER_PAGE,
            [
                'sortFieldAllowList' => ['blueprint.name', 'blueprint.version', 'blueprint.filesize', 'blueprint.releaseDate'],
                'defaultSortFieldName' => 'blueprint.releaseDate',
                'defaultSortDirection' => 'desc',
            ]
        
        );
        return $this->render('blueprint/index.html.twig', [
            'pagination' => $pagination
        ]);

    }
/**
     * View action.
     *
     * @param Blueprint $blueprint blueprint entity
     *
     * @return Response HTTP response
     */
    #[Route('/{id}', name:'blueprint_view', requirements: ['id' => '[1-9]\d*'], methods: ['GET'])]
    public function view(Blueprint $blueprint): Response
    {

        return $this->render('blueprint/view.html.twig', [
            'blueprint'=> $blueprint
        ]);
    }
}
