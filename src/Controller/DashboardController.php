<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends AbstractController {

    /**
    * @Route("/dashboard", name="dashboard")
    */
    public function dashboard() {

        return new Response('Testing Dashboard page for normal users');
    }

    /**
    * @Route("/admin", name="admin")
    */
    public function admin() {

        return new Response('Testing page Admin page for Admin users');
    }


}

?>
