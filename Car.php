<?php

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    // private string $color;
    // private int $nbSeats;
    // private string $energy;
    private int $energyLevel;

    public function __construct(private string $color, private int $nbSeats, private string $energy)
    {
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function forward(): string
    {
        $this->currentSpeed = 10;
        return '<br> La voiture avance à la vitesse de ' . $this->currentSpeed . ' km/h. <br />' . PHP_EOL;
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= '<br> La voiture freine, sa vitesse passe à ' . $this->currentSpeed . ' km/h. <br />' . PHP_EOL;
        }
        $sentence .= '<br> La voiture est à l\'arrêt. <br />' . PHP_EOL;
        return $sentence;
    }

    public function start(): string
    {
        $this->currentSpeed = 1;
        return '<br> En voiture Simone ! <br />' . PHP_EOL;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}