<?php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'fos_user')]
#[ORM\Entity(repositoryClass: UserRepository::class)]
class User extends BaseUser
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer')]
    protected $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }
}
