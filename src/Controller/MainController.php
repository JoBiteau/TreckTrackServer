<?php

namespace App\Controller;

use DateTime;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="_index")
     * @param Request $request
     * @return JsonResponse
     * @throws Exception
     */
    public function index(Request $request)
    {
        if (!is_null($request->get('date')) && new DateTime($request->get('date')) !== false) {
            $date = new DateTime($request->get('date'));
        } else {
            $date = new DateTime();
        }

        $result = ["hello" => $date];

        return $this->json($result);
    }

}
