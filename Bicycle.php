
  <?php

class Bicycle
{
    public function __construct(private string $color, private bool $hasLuggageRack, private int $currentSpeed, private int $nbSeats = 1, private int $nbWheels = 2) {
        echo 'My bicycle is '.$color.', goes '.$currentSpeed.' mph, has '.$nbWheels.' wheel(s) and '.$nbSeats.' seat(s). <br />';
    }


    public function forward(): string
{
    $this->currentSpeed = 15;

    return '<br> Go ! <br />';
}

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= '<br> Brake => Vitesse du vélo : '.$this->currentSpeed.' km/h <br />';
   }
   $sentence .= '<br> I\'m stopped ! <br />';
   return $sentence;
}

public function dump()
{
    var_dump($this);
}

public function setColor(string $color): void
{
    $this->color = $color;
}

public function setCurrentSpeed(int $currentSpeed): void
{
    if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
        } else {
            $this->currentSpeed = 0;
        }
    }

public function getColor(): string
{
    return $this->color;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

}