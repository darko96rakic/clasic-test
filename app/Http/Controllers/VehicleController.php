<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class VehicleController extends Controller
{
    public function getVehicle($id){

        try {
            $url = 'https://www.classic-trader.com/api/vehicle-ad/'.$id;

            if (Cache::has('vehicle-'.$id)) {
                $vehicle = Cache::get('vehicle-'.$id);
            } else {
                $client = new Client();

                 $response = $client->request('GET', $url);

                $json = json_decode($response->getBody()->getContents());
                $vehicle = $json->data;

                Cache::put('vehicle-'.$id,$vehicle,1000);
            }


            return view('Vehicle.show')->with([
               'vehicle' => $vehicle
            ]);
        }catch (\Exception $e){
            Log::error($e->getMessage());

            return response('Item not found!');
        }
    }
}
