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
        $this->denyAccessUnlessGranted(array('ROLE_USER', 'ROLE_ADMIN'), null, 'Unable to access this page!');

        return new Response('Testing Dashboard page for normal users');
    }

    /**
    * @Route("/admin", name="admin")
    */
    public function admin() {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        return new Response('Testing page Admin page for Admin users');
    }

    /**
    * @Route("/admin/issues", name="issues")
    */
    public function issues() {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        return new Response('Testing page Admin page for Issues');
    }


}

?>
