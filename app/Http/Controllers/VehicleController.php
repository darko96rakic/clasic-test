<?php

namespace App\Http\Controllers;


use App\Services\Vehicle\VehicleServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class VehicleController extends Controller
{
    private VehicleServiceInterface $vehicleService;

    public function __construct(VehicleServiceInterface $vehicleService)
    {
        $this->vehicleService = $vehicleService;
    }

    /**
     * @param $id
     * @return Application|ResponseFactory|Factory|View|\Illuminate\Foundation\Application|Response
     */
    public function getVehicle($id)
    {
        try {
            $vehicle = $this->vehicleService->getVehicle($id);

            return view('Vehicle.show')->with([
                'vehicle' => $vehicle
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return response('Item not found!');
        }
    }
}

