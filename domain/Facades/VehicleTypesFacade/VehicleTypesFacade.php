<?php

namespace domain\Facades\VehicleTypesFacade;

use domain\Services\VehicleTypesService\VehicleTypesService;
use Illuminate\Support\Facades\Facade;

class VehicleTypesFacade extends Facade
{
    /**
     * getFacadeAccessor
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
        return VehicleTypesService::class;
    }
}
