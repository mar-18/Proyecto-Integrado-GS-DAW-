<?php

namespace App\Entity;

class Presupuesto
{
    protected $task;
    protected $dueDate;
    protected $fechaDeEvento;
    protected $salones;

    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }

    /**
     * Get the value of fechaDeEvento
     */
    public function getFechaDeEvento()
    {
        return $this->fechaDeEvento;
    }

    /**
     * Set the value of fechaDeEvento
     *
     * @return  self
     */
    public function setFechaDeEvento(\DateTime $fechaDeEvento = null)
    {
        $this->fechaDeEvento = $fechaDeEvento;

        return $this;
    }

    /**
     * Get the value of salones
     */
    public function getSalones()
    {
        return $this->salones;
    }

    /**
     * Set the value of salones
     *
     * @return  self
     */
    public function setSalones($salones)
    {
        $this->salones = $salones;

        return $this;
    }
}
