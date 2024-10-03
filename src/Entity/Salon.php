<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salon
 * @ORM\Entity(repositoryClass="App\Repository\SalonRepository")
 * @ORM\Table(name="salon", indexes={@ORM\Index(name="fk_salon_decoracion1_idx", columns={"decoracion_idDecoracion"})})
 * 
 */
class Salon
{
    /**
     * @var int
     *
     * @ORM\Column(name="idSalon", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsalon;

    /**
     * @var string
     * @Assert\Length(
     *      min = 2,
     *      max = 45,
     *      minMessage = "El apellido debe tener al menos {{ limit }} caracteres",
     *      maxMessage = "El apellido no puede ser mayor a {{ limit }} caracteres"
     * )
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="El apellido no debe tener numeros"
     * )
     * @Assert\NotBlank(message="Dato obligatorio")
     * @ORM\Column(name="nombreSalon", type="string", length=255, nullable=false)
     */
    private $nombresalon;
    /**
     * @var int
     * @Assert\GreaterThanOrEqual(
     *     value = 15
     * )
     * @Assert\LessThanOrEqual(
     *     value = 200
     * )
     * @Assert\Type(
     *     type="integer",
     *     message="El valor {{ value }} no es del {{ type }} válido."
     * )
     * @Assert\NotNull(message="Dato obligatorio")
     * @ORM\Column(name="capacidad", type="integer", nullable=false)
     */
    private $capacidad;

    /**
     * @var string|null
     * @Assert\Image(
     *     minWidth = 200,
     *     maxWidth = 400,
     *     minHeight = 200,
     *     maxHeight = 400)
     * @ORM\Column(name="foto", type="string", length=45, nullable=true)
     */
    private $foto;

    /**
     * @var float
     * @Assert\Type(
     *     type="float",
     *     message="El dato {{ value }} no es del tipo {{ type }}."
     * )
     * @Assert\Range(
     *      min = 10,
     *      max = 180,
     *      minMessage = "El precio debe ser mayor o igual a {{ limit }}€",
     *      maxMessage = "El precio debe ser menor o igual a  {{ limit }}€"
     * )
     * @ORM\Column(name="precio", type="float", precision=10, scale=0, nullable=false)
     */
    private $precio;

    /**
     * @var \Decoracion
     *
     * @ORM\ManyToOne(targetEntity="Decoracion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="decoracion_idDecoracion", referencedColumnName="idDecoracion")
     * })
     */
    private $decoracionIddecoracion;



    public function getIdsalon(): ?int
    {
        return $this->idsalon;
    }

    public function getNombresalon(): ?string
    {
        return $this->nombresalon;
    }

    public function setNombresalon(string $nombresalon): self
    {
        $this->nombresalon = $nombresalon;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getDecoracionIddecoracion(): ?Decoracion
    {
        return $this->decoracionIddecoracion;
    }

    public function setDecoracionIddecoracion(?Decoracion $decoracionIddecoracion): self
    {
        $this->decoracionIddecoracion = $decoracionIddecoracion;

        return $this;
    }
    public function __toString()
    {
        return $this->nombresalon;
    }

    /**
     * Get the value of capacidad
     *
     * @return  int
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * Set the value of capacidad
     *
     * @param  int  $capacidad
     *
     * @return  self
     */
    public function setCapacidad(int $capacidad)
    {
        $this->capacidad = $capacidad;

        return $this;
    }
}
