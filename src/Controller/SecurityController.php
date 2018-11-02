<?php
namespace App\Controller;

include('global.class.php');
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use App\Repository\UserRepository;

class SecurityController extends AbstractController {
    /**
    * @Route("/", name="login")
    */
    //NOTE: Build in CAS authentication
    public function login(Request $request, AuthenticationUtils $authenticationUtils) {
        //NOTE: Connection now works. Needed php-mysqli drivers
        $em        =   $this->getDoctrine()->getManager();
        //var_dump($em);
        $error = $authenticationUtils->getLastAuthenticationError();
        $username = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', array(
            'username'      => $username,
            'error'         => $error
        ));
    }

    /**
    * @Route("/login_check", name="login_check")
    */
    public function login_check(Request $request) {
        $test = $request->get('_username');
        var_dump($test);
        return new Response($test);
    }
}
?>
