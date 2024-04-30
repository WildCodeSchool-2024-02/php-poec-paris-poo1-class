<?php

class Boat 
{
    private string $name;
    private int $speed;
    private array $amphorae;

    public function load(Amphora $amphora)
    {
        $this->amphorae[] = $amphora;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getAmphorae()
    {
        return $this->amphorae;
    }

    public function setAmphorae($amphorae)
    {
        $this->amphorae = $amphorae;
    }
}