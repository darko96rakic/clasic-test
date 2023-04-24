<?php

namespace App\Services\Vehicle;

interface VehicleServiceInterface
{
    const VEHICLE_BASE_URL = 'https://www.classic-trader.com/api/vehicle-ad/';

    public function getVehicle(int $id);
}
