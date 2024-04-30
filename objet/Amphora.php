<?php

class Amphora {
    public const MAX_LABEL_SIZE = 20;

    private int $capacity;
    private int $filling = 0; 
    private string $label;

    public function __construct(int $capacity, string $label) 
    {
        $this->capacity = $capacity;
        $this->label = $label;
    }

    public function fill(int $volume)
    {
        if ($volume < $this->capacity - $this->filling) {
            $this->filling += $volume;
        }
        else {
            $this->filling = $this->capacity;
        }
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getFilling(): int 
    {
        return $this->filling;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        if ($label <= self::MAX_LABEL_SIZE) {
            $this->label = $label;
        }
    }
}