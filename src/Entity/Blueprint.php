<?php

/**
 * Blueprint entity
 */

namespace App\Entity;

use App\Repository\BlueprintRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Class Blueprint
 */
#[ORM\Entity(repositoryClass: BlueprintRepository::class)]
#[ORM\Table(name: 'blueprints')]
class Blueprint
{
    /**
    * Primary key.
    */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * Name.
     */
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * Version.
     */
    #[ORM\Column(length: 10)]
    private ?string $version = null;

    /**
     * Manifest.
     */
    #[ORM\Column(length: 255)]
    private ?string $manifest = null;

    /**
     * Filesize.
     */
    #[ORM\Column]
    private ?int $filesize = null;

    /**
     * Release Date.
     */
    #[ORM\Column]
    private ?\DateTime $releaseDate = null;

    /**
     * Comment.
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $comment = null;

    /**
     * Download link.
     */
    #[ORM\Column(length: 255)]
    private ?string $download = null;

    #[ORM\ManyToOne]
    private ?Device $device = null;
    
    /**
     * getId
     *
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    
    /**
     * getName
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * setName
     *
     * @param  mixed $name
     * @return static
     */
    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }
    
    /**
     * getVersion
     *
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    
    /**
     * setVersion
     *
     * @param  mixed $version
     * @return static
     */
    public function setVersion(string $version): static
    {
        $this->version = $version;

        return $this;
    }
    
    /**
     * getManifest
     *
     * @return string
     */
    public function getManifest(): ?string
    {
        return $this->manifest;
    }
    
    /**
     * setManifest
     *
     * @param  mixed $manifest
     * @return static
     */
    public function setManifest(string $manifest): static
    {
        $this->manifest = $manifest;

        return $this;
    }
    
    /**
     * getFilesize
     *
     * @return int
     */
    public function getFilesize(): ?int
    {
        return $this->filesize;
    }
    
    /**
     * setFilesize
     *
     * @param  mixed $filesize
     * @return static
     */
    public function setFilesize(int $filesize): static
    {
        $this->filesize = $filesize;

        return $this;
    }
    
    /**
     * getReleaseDate
     *
     * @return \DateTime
     */
    public function getReleaseDate(): ?\DateTime
    {
        return $this->releaseDate;
    }
    
    /**
     * setReleaseDate
     *
     * @param  mixed $releaseDate
     * @return static
     */
    public function setReleaseDate(\DateTime $releaseDate): static
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }
    
    /**
     * getComment
     *
     * @return string
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    
    /**
     * setComment
     *
     * @param  mixed $comment
     * @return static
     */
    public function setComment(string $comment): static
    {
        $this->comment = $comment;

        return $this;
    }
    
    /**
     * getDownload
     *
     * @return string
     */
    public function getDownload(): ?string
    {
        return $this->download;
    }
    
    /**
     * setDownload
     *
     * @param  mixed $download
     * @return static
     */
    public function setDownload(string $download): static
    {
        $this->download = $download;

        return $this;
    }

    public function getDevice(): ?Device
    {
        return $this->device;
    }

    public function setDevice(?Device $device): static
    {
        $this->device = $device;

        return $this;
    }
}
