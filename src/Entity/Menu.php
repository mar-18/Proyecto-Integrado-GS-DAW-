<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity
 */
class Menu
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMenu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmenu;

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
     * @ORM\Column(name="nombreMenu", type="string", length=255, nullable=false)
     */
    private $nombremenu;

    /**
     * @var string
     * @Assert\NotBlank(message="Dato obligatorio")
     * @Assert\Choice(choices = {"desayuno", "comida", "cena", "tapas"}, message = "Elige un tipo válido: desayuno, comida, cena, tapas ")
     *
     * @ORM\Column(name="tipoMenu", type="string", length=45, nullable=false, options={"default"="desayuno,comida,cena,tapas"})
     */
    private $tipomenu = '';

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
     * @var string
     * @Assert\Length(
     *      min = 5,
     *      max = 45,
     *      minMessage = "La descripción debe tener al menos {{ limit }} caracteres",
     *      maxMessage = "La descripción no puede ser mayor a {{ limit }} caracteres"
     * )
     * @ORM\Column(name="ingredientes", type="string", length=45, nullable=false)
     */
    private $ingredientes;

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
    public $precio;

    public function getIdmenu(): ?int
    {
        return $this->idmenu;
    }

    public function getNombremenu(): ?string
    {
        return $this->nombremenu;
    }

    public function setNombremenu(string $nombremenu): self
    {
        $this->nombremenu = $nombremenu;

        return $this;
    }

    public function getTipomenu(): ?string
    {
        return $this->tipomenu;
    }

    public function setTipomenu(string $tipomenu): self
    {
        $this->tipomenu = $tipomenu;

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

    public function getIngredientes(): ?string
    {
        return $this->ingredientes;
    }

    public function setIngredientes(string $ingredientes): self
    {
        $this->ingredientes = $ingredientes;

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
    public function __toString()
    {
        return $this->nombremenu;
    }
}
