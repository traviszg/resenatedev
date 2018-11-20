<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\LoginList;
use App\Entity\UserInfoList;
use App\Repository\UserRepository;

class SecurityController extends AbstractController {
    /**
    * @Route("/", name="login")
    */
    //NOTE: Build in CAS authentication
    public function login(Request $request, AuthenticationUtils $authenticationUtils) {
        //NOTE: Connection now works. Needed php-mysqli drivers
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
    public function login_check(Request $request, AuthenticationUtils $authenticationUtils) {
        $allow = false;
        $username = $authenticationUtils->getLastUsername();
        $user_login = $this->getDoctrine()->getRepository(LoginList::class)->find($username);
        $user_id = $user_login->getUserId();
        $user_info = $this->getDoctrine()->getRepository(UserInfoList::class)->find($user_id);
        var_dump($username);
        $check = loadUserByUsername($username);
        if($check) {
            $allow = true;
        }

        return new Response("This worked" . $allow);
    }
}
?>
