<?php
/**
 * Created by Mario.
 * User: Mario
 */


/**
 * Class fußball
 */
class fußball extends ball implements BallInterface
{

    private $volumen;

    /**
     * @return float
     */
    public function getVolumen(): float
    {
        return $this->volumen;
    }

    /**
     * fußball constructor.
     * @param string $name
     * @param float $durchmesser
     * @param string $material
     */
    public function __construct(string $name,
                                float $durchmesser,
                                string $material
    )
    {
        // ruft konstruktormethode von ball auf wegen dem extend
        parent::__construct($name, $durchmesser, $material);
        $this->volumen = (pow($this->getDurchmesser(), 3) / 6) * pi();

    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return parent::__toString() . " Volumen: " . $this->getVolumen();
    }

}