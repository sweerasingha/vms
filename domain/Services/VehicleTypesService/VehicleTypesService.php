<?php

namespace domain\Services\VehicleTypesService;

use Illuminate\Support\Str;
use App\Models\VehicleType;

class VehicleTypesService
{
    protected $vehicle_type;
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->vehicle_type = new VehicleType();
    }

    /**
     * All
     * retrieve all the data from VehicleType model
     *
     * @return void
     */
    public function all()
    {
        return $this->vehicle_type->all();
    }

    /**
     * Store
     * store data in database
     *
     * @param  array $data
     * @return void
     */
    public function store(array $data)
    {
        return $this->vehicle_type->create($data);
    }

    /**
     * Get
     * retrieve relevant data using mat_typeId
     *
     * @param  int  $mat_typeId
     * @return void
     */
    public function get(int $mat_typeId)
    {
        return $this->vehicle_type->find($mat_typeId);
    }

    public function getWithSlug(string $slug)
    {
        return $this->vehicle_type->getWithSlug($slug);
    }

    /**
     * Update
     * update existing data using mat_typeId
     *
     * @param  array $data
     * @param  int   $mat_typeId
     * @return void
     */
    public function update(array $data, int $mat_typeId)
    {
        $vehicle_type = $this->vehicle_type->find($mat_typeId);
        $data['slug'] = Str::slug($data['name']);
        return $vehicle_type->update($this->edit($vehicle_type, $data));
    }

    /**
     * Edit
     * merge data which retrieved from update function as an array
     *
     * @param  mixed $vehicle_type
     * @param  mixed $data
     * @return void
     */
    protected function edit(VehicleType $vehicle_type, $data)
    {
        return array_merge($vehicle_type->toArray(), $data);
    }

    /**
     * Delete
     * delete specific data using mat_typeId
     *
     * @param  mixed $mat_typeId
     * @return void
     */
    public function delete($mat_typeId)
    {
        return $this->vehicle_type->find($mat_typeId)->delete();
    }
    public function deleteSelected($data)
    {
        $ids = $data->input('ids');
        VehicleType::whereIn('id', $ids)->delete();

        return response()->json([
            'success' => true,
        ]);
    }

    public function inactive($data)
    {
        $ids = $data->input('ids');

        $vehicles = VehicleType::whereIn('id', $ids)->get();

        foreach ($vehicles as $vehicle) {
            $vehicle->status = 0;
            $vehicle->update();
        }

        return response()->json([
            'success' => true,
        ]);
    }
    public function active($data)
    {
        $ids = $data->input('ids');

        $vehicles = VehicleType::whereIn('id', $ids)->get();

        foreach ($vehicles as $vehicle) {
            $vehicle->status = 1;
            $vehicle->update();
        }

        return response()->json([
            'success' => true,
        ]);
    }
}
