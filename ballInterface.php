<?php
/**
 * Created by PhpStorm.
 * User: Mario
 */

/**
 * Interface BallInterface
 */
interface BallInterface
{
    /**
     * @return float
     */
    public function getVolumen(): float;

    public function __toString(): string;

}