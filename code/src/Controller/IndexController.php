<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route("/")
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('index/index.html.twig', [
            'title' => 'Hello PHP Vegas!',
            'body' => 'Host: ' . gethostname(),
            'version' => 'V2',
        ]);
    }
}