<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\EntityManager;
/**
* @ORM\Table(name="'user_info_list'")
* @ORM\Entity(repositoryClass="App\Repository\UserRepository")
*/
class User {
    /**
    * @ORM\user_id
    * @ORM\Column(type="integer")
    */
    private $user_id;
    private $username;
    //private $password;
    private $email;
    private $status_id;

    public function getUsername() {
        return $this->username;
    }

    public function getId($username) {
        return $this->user_id = $user_id;
    }

    public function getPassword() {
        return $this->password;
    }

    /*
    public function getRoles() {
        return array('ROLE_USER');
    }
    */
    public function serialize() {
        return serialize(array(
            $this->user_id,
            $this->username,
            //$this->password
        ));
    }
}


?>
