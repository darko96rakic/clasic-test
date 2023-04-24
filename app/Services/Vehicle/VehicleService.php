<?php

namespace App\Services\Vehicle;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class VehicleService implements VehicleServiceInterface
{

    public function getVehicle(int $id){
        if (Cache::has('vehicle-'.$id)) {
            $vehicle = Cache::get('vehicle-'.$id);
        } else {
            $client = new Client();

            $response = $client->request('GET', self::VEHICLE_BASE_URL.$id);

            $json = json_decode($response->getBody()->getContents());
            $vehicle = $json->data;

            Cache::put('vehicle-'.$id,$vehicle,1000);
        }

        return $vehicle;
    }
}
