<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Evento
 * @ORM\Entity(repositoryClass="App\Repository\EventoRepository")
 * @ORM\Table(name="evento", indexes={@ORM\Index(name="fk_evento_menu1_idx", columns={"menu_idMenu"}), @ORM\Index(name="fk_evento_salon1_idx", columns={"salon_idSalon"})})
 * 
 */
class Evento
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEvento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevento;

    /**
     * @var string
     * @Assert\NotBlank(message="Dato obligatorio")
     *  @Assert\Choice(choices = {"boda", "cumple", "gradua", "conferencia"}, message = "Elige un tipo válido: boda/cumple/gradua/conferencia")
     * @ORM\Column(name="tipo", type="string", length=255, nullable=false, options={"default"="boda,cumple,gradua,conferencia"})
     */
    private $tipo = '';

    /**
     * @var string|null
     * @Assert\Length(
     *      min = 5,
     *      max = 45,
     *      minMessage = "La descripción debe tener al menos {{ limit }} caracteres",
     *      maxMessage = "La descripción no puede ser mayor a {{ limit }} caracteres"
     * )
     * @ORM\Column(name="descripcion", type="string", length=45, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     * 
     * @Assert\NotNull(message="Dato obligatorio")
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime
     * 
     * 
     * @Assert\NotNull(message="Dato obligatorio")
     * @ORM\Column(name="hora", type="time", nullable=false)
     */
    private $hora;

    /**
     * @var int
     * @Assert\GreaterThanOrEqual(
     *     value = 15
     * )
     * @Assert\LessThanOrEqual(
     *     value = 200
     * )
     * @ORM\Column(name="asistentes", type="integer", nullable=false)
     */
    private $asistentes;

    /**
     * @var \Salon
     *
     * @ORM\ManyToOne(targetEntity="Salon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="salon_idSalon", referencedColumnName="idSalon")
     * })
     */
    private $salonIdsalon;

    /**
     * @var \Menu
     *
     * @ORM\ManyToOne(targetEntity="Menu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="menu_idMenu", referencedColumnName="idMenu")
     * })
     */
    private $menuIdmenu;

    public function getIdevento(): ?int
    {
        return $this->idevento;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getHora(): ?\DateTimeInterface
    {
        return $this->hora;
    }

    public function setHora(\DateTimeInterface $hora): self
    {
        $this->hora = $hora;

        return $this;
    }

    public function getAsistentes(): ?string
    {
        return $this->asistentes;
    }

    public function setAsistentes(string $asistentes): self
    {
        $this->asistentes = $asistentes;

        return $this;
    }

    public function getSalonIdsalon(): ?Salon
    {
        return $this->salonIdsalon;
    }

    public function setSalonIdsalon(?Salon $salonIdsalon): self
    {
        $this->salonIdsalon = $salonIdsalon;

        return $this;
    }

    public function getMenuIdmenu(): ?Menu
    {
        return $this->menuIdmenu;
    }

    public function setMenuIdmenu(?Menu $menuIdmenu): self
    {
        $this->menuIdmenu = $menuIdmenu;

        return $this;
    }
    public function __toString()
    {
        $d = $this->descripcion;
        return $this->tipo . "-" . $d;
    }
}
