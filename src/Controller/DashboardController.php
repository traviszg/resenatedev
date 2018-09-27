<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends AbstractController {

    /**
    * @Route("/", name="dashboard")
    */
    public function dashboard() {

        return new Response('Testing page');
    }

}

?>
