<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente", uniqueConstraints={@ORM\UniqueConstraint(name="email_UNIQUE", columns={"email"}), @ORM\UniqueConstraint(name="idCliente_UNIQUE", columns={"idCliente"})}, indexes={@ORM\Index(name="fk_cliente_evento2_idx", columns={"evento_idEvento1"})})
 * 
 * @ORM\Entity(repositoryClass="App\Repository\ClienteRepository")
 * @UniqueEntity("email")
 */
class Cliente
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcliente;

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
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     * 
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
     * @ORM\Column(name="Apellido", type="string", length=45, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     * @Assert\NotBlank(message="email obligatorio")
     * @Assert\Email(
     *     message = "El email '{{ value }}' no es un email válido.",     
     * )
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var int
     * @Assert\Regex(
     *     pattern="/[A-Za-z ñ]+/",
     *     match=false,
     *     message="No debes ingresar letras"
     * )     
     * @Assert\Type(
     *     type="integer",
     *     message="El valor {{ value }} no es del {{ type }} válido."
     * )
     * @Assert\NotNull(message="Dato obligatorio")
     * @ORM\Column(name="Telefono", type="integer", nullable=false)
     */
    private $telefono;

    /**
     * @var string|null
     * @Assert\Length(
     *      min = 5,
     *      max = 45,
     *      minMessage = "La dirección debe tener al menos {{ limit }} caracteres",
     *      maxMessage = "La dirección no puede ser mayor a {{ limit }} caracteres"
     * )
     * @Assert\NotBlank(message="Dato obligatorio")
     * @ORM\Column(name="Direccion", type="string", length=45, nullable=true)
     */
    private $direccion;

    /**
     * @var \Evento
     *
     * @ORM\ManyToOne(targetEntity="Evento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evento_idEvento1", referencedColumnName="idEvento")
     * })
     */
    private $eventoIdevento1;

    public function getIdcliente(): ?int
    {
        return $this->idcliente;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefono(): ?int
    {
        return $this->telefono;
    }

    public function setTelefono(int $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getEventoIdevento1(): ?Evento
    {
        return $this->eventoIdevento1;
    }

    public function setEventoIdevento1(?Evento $eventoIdevento1): self
    {
        $this->eventoIdevento1 = $eventoIdevento1;

        return $this;
    }
    public function __toString()
    {
        return $this->nombre;
    }
}
