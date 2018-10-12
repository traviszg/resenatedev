<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
* @ORM\Table(name="'user_info_list'")
* @ORM\Entity(repositoryClass="App\Repository\UserRepository")
*/
class User implements UserInterface, \Serializable {
    private $id;
    private $username;
    //private $password;
    private $email;
    private $status;

    public function getUsername() {
        return $this->username;
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
            $this->id,
            $this->username,
            //$this->password
        ));
    }
}


?>
