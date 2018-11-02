<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\EntityManager;
/**
* @ORM\Entity
* @ORM\Table(name="'user_info_list'")
*/
class User implements UserInterface, \Serializable {
    /**
    * @ORM\User_id
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

    public function getRoles() {
        return array('ROLE_USER');
    }

    public function getSalt() {

    }

    public function eraseCredentials() {

    }

    public function serialize() {
        return serialize(array(
            $this->user_id,
            $this->username,
            $this->email,
            $this->status_id
        ));
    }

    public function unserialize($string) {
        list(
            $this->user_id,
            $this->username,
            $this->email,
            $this->status_id
        ) = unserialize($string, ['allowed_classes' => false]);
    }
}


?>
