<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ApiResource()
 * @Vich\Uploadable
 * @ORM\Entity(repositoryClass="App\Repository\ProjetRepository")
 */
class Projet
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $Image;

    /**
     * @Vich\UploadableField(mapping="article", fileNameProperty="Image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Technologie;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Equipe;

    /**
     * @ORM\Column(type="text")
     */
    private $TafPerso;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }
    
    public function setImageFile(File $Image = null)
    {
        $this->imageFile = $Image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getTechnologie(): ?string
    {
        return $this->Technologie;
    }

    public function setTechnologie(string $Technologie): self
    {
        $this->Technologie = $Technologie;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getEquipe(): ?string
    {
        return $this->Equipe;
    }

    public function setEquipe(string $Equipe): self
    {
        $this->Equipe = $Equipe;

        return $this;
    }

    public function getTafPerso(): ?string
    {
        return $this->TafPerso;
    }

    public function setTafPerso(string $TafPerso): self
    {
        $this->TafPerso = $TafPerso;

        return $this;
    }
}
