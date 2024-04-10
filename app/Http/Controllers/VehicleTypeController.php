<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\ParentController;
use App\Http\Requests\Settings\VehicleTypeRequest;
use App\Http\Requests\Settings\VehicleType\UpdateVehicleTypeRequest;
use domain\Facades\VehicleTypesFacade\VehicleTypesFacade;
use App\Models\VehicleType;
use App\Filters\FuzzyFilter;
use App\Http\Resources\DataResource;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Support\Facades\Auth;

class VehicleTypeController extends ParentController
{
    public function all()

    {
        $query = VehicleType::orderBy('id', 'desc');
        $payload = QueryBuilder::for($query)
            ->allowedSorts(['model', 'name'])
            ->allowedFilters(AllowedFilter::custom('search', new FuzzyFilter('name','model')))
            ->paginate(request('per_page', config('basic.pagination_per_page')));
        return DataResource::collection($payload);
    }
}
