<?php
/**
 * Created by PhpStorm.
 * User: Mario
 */

namespace Kvasina\Ball;
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