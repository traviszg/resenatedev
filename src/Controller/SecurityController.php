<?php
namespace App\Controller;

include('global.class.php');
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController {
    /**
    * @Route("/", name="login")
    */
    //NOTE: Build in CAS authentication
    public function login(AuthenticationUtils $authenticationUtils) {
        //get the login error
        $error = $authenticationUtils->getLastAuthenticationError();
        $username = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', array(
            'username'      => $username,
            'error'         => $error
        ));
    }
}
?>
