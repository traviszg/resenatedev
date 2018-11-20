<?php
namespace App\Repository;

use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository implements UserLoaderInterface
{
    public function loadUserByUsername($username)
    {
        $allow = false;
        $user_info = $this->getDoctrine()->getRepository(UserInfoList::class)->find($username);
        if($user_info != NULL) {
            $allow = true;
        } else {
            $allow = false;
        }
        return $allow;
    }
}
?>
