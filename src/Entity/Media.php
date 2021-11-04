<?php

namespace App\Entity;

use App\Repository\MediaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MediaRepository::class)
 */
class Media
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $nom_media;


    /**
     * @ORM\OneToMany(targetEntity=UserLikeMedia::class, mappedBy="media")
     */
    private $userLikeMedia;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="medias")
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->userLikeMedia = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMedia(): ?string
    {
        return $this->nom_media;
    }

    public function setNomMedia(string $nom_media): self
    {
        $this->nom_media = $nom_media;

        return $this;
    }


    /**
     * @return Collection|UserLikeMedia[]
     */
    public function getUserLikeMedia(): Collection
    {
        return $this->userLikeMedia;
    }

    public function addUserLikeMedium(UserLikeMedia $userLikeMedium): self
    {
        if (!$this->userLikeMedia->contains($userLikeMedium)) {
            $this->userLikeMedia[] = $userLikeMedium;
            $userLikeMedium->setMedia($this);
        }

        return $this;
    }

    public function removeUserLikeMedium(UserLikeMedia $userLikeMedium): self
    {
        if ($this->userLikeMedia->removeElement($userLikeMedium)) {
            // set the owning side to null (unless already changed)
            if ($userLikeMedium->getMedia() === $this) {
                $userLikeMedium->setMedia(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->getId();
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addMedia($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeMedia($this);
        }

        return $this;
    }
}
