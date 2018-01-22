<?php
/**
 * Created by PhpStorm.
 * User: Mario
 */


/**
 * Class ball
 */
abstract class ball
{

    private $name;
    private $durchmesser;
    private $material;

    /**
     * ball constructor.
     * @param string $name
     * @param float $durchmesser
     * @param string $material
     */
    public function __construct(string $name, float $durchmesser, string $material)
    {
        $this->name = $name;                // damit man später mit gettern darauf zugreifen kann
        $this->durchmesser = $durchmesser;
        $this->material = $material;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getDurchmesser(): float
    {
        return $this->durchmesser;
    }

    /**
     * @return string
     */
    public function getMaterial(): string
    {
        return $this->material;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "Name: " . $this->getName() . "Material: " . $this->getMaterial() . "Durchmesser :" . $this->getDurchmesser();
    }

}

