<?php


class Sales extends PriceVehicleFactory
{
    public static function getVehicleInstance($price)
    {
        $vehicle = PriceVehicleFactory::getVehicleInstance('expensive');

        $vehicle->type();
    }

}