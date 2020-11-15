<?php


class PriceVehicleFactory
{
    public static function getVehicleInstance($price)
    {
        switch($price)
        {
            case 'cheap':
                return new Bike();

            case 'affordable':
                return new Motorcycle();

            case 'expensive':
                return new Car();

            default:
                throw new InvalidArgumentException('Invalid price');

        }
    }
}