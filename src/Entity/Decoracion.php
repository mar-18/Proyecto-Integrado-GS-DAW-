<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Decoracion
 *
 * @ORM\Table(name="decoracion")
 * @ORM\Entity
 */
class Decoracion
{
    /**
     * @var int
     *
     * @ORM\Column(name="idDecoracion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddecoracion;

    /**
     * @var string
     * @Assert\NotBlank(message="Dato obligatorio")
     * @Assert\Length(
     *      min = 3,
     *      max = 45,
     *      minMessage = "El nombre debe tener al menos {{ limit }} caracteres",
     *      maxMessage = "El nombre no puede ser mayor a {{ limit }} caracteres"
     * )
     * @ORM\Column(name="nombreDecoracion", type="string", length=45, nullable=false)
     */
    private $nombredecoracion;

    /**
     * @var string
     * @Assert\NotBlank(message="Dato obligatorio")
     * @Assert\Choice(choices = {"boda", "cumple", "gradua", "conferencia"}, message = "Elige un tipo válido: boda/cumple/gradua/conferencia")
     * @ORM\Column(name="tipoDecoracion", type="string", length=255, nullable=false, options={"default"="boda,cumple,gradua,conferencia"})
     */
    private $tipodecoracion = '';

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

    public function getIddecoracion(): ?int
    {
        return $this->iddecoracion;
    }

    public function getNombredecoracion(): ?string
    {
        return $this->nombredecoracion;
    }

    public function setNombredecoracion(string $nombredecoracion): self
    {
        $this->nombredecoracion = $nombredecoracion;

        return $this;
    }

    public function getTipodecoracion(): ?string
    {
        return $this->tipodecoracion;
    }

    public function setTipodecoracion(string $tipodecoracion): self
    {
        $this->tipodecoracion = $tipodecoracion;

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
        return $this->nombredecoracion;
    }
}
