<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado

 * @ORM\Table(name="empleado", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_D9D9BF52A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Empleado
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEmpleado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idempleado;

    /**
     * @var string
     * @Assert\Length(
     *      min = 2,
     *      max = 45,
     *      minMessage = "El nombre debe tener al menos {{ limit }} caracteres",
     *      maxMessage = "El nombre no puede ser mayor a {{ limit }} caracteres"
     * )
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="El nombre no debe tener numeros"
     * )
     * @Assert\NotBlank(message="Dato obligatorio")
     * @ORM\Column(name="nombre", type="string", length=16, nullable=false)
     */
    private $nombre;

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
     * @ORM\Column(name="apellido", type="string", length=45, nullable=false)
     */
    private $apellido;

    /**
     * @var int
     *
     * @Assert\NotNull(message="Dato obligatorio")
     * @Assert\GreaterThanOrEqual(
     *     value = 16
     * )
     * @Assert\LessThanOrEqual(
     *     value = 65
     * )
     * Assert\Range(
     *      min = 16,
     *      max = 65,
     *      minMessage = "Edad no permitida debe ser mayor a {{ limit }}",
     *      maxMessage = "Edad no permitida"
     * )
     * @Assert\Type(
     *     type="integer",
     *     message="El valor {{ value }} no es del {{ type }} válido."
     * )
     * @ORM\Column(name="edad", type="integer", nullable=false)
     */
    private $edad;

    /**
     * @var string
     *
     * @Assert\Regex(
     *     pattern="/[A-Za-z ñ]+/",
     *     match=false,
     *     message="No debes ingresar letras"
     * )     
     * @Assert\NotNull(message="Dato obligatorio")
     * @ORM\Column(name="telefono", type="string", length=45, nullable=false)
     */
    private $telefono;

    /**
     * @var string
     * @Assert\Length(
     *      min = 5,
     *      max = 45,
     *      minMessage = "La dirección debe tener al menos {{ limit }} caracteres",
     *      maxMessage = "La dirección no puede ser mayor a {{ limit }} caracteres"
     * )
     * @Assert\NotBlank(message="Dato obligatorio")
     * @ORM\Column(name="direccion", type="string", length=45, nullable=false)
     */
    private $direccion;

    /**
     * @Assert\Blank()
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="empleado", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;




    public function getIdempleado(): ?int
    {
        return $this->idempleado;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getEdad(): ?int
    {
        return $this->edad;
    }

    public function setEdad(int $edad): self
    {
        $this->edad = $edad;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
    public function __toString()
    {
        return $this->nombre;
    }
}
