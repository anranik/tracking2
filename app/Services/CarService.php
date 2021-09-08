<?php

namespace App\Services;

use App\Models\Car;
use App\Repositories\CarRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class CarService
{
    /**
     * @var $carRepository
     */
    protected $carRepository;

    /**
     * CarService constructor.
     *
     * @param CarRepository $carRepository
     */
    public function __construct(CarRepository $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    /**
     * Delete car by id.
     *
     * @param $id
     * @return String
     */
    public function deleteById($id)
    {
        DB::beginTransaction();

        try {
            $record = $this->carRepository->delete($id);

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            throw new InvalidArgumentException('Unable to delete data');
        }

        DB::commit();

        return $record;

    }

    /**
     * Get all cars.
     *
     * @return String
     */
    public function getAll()
    {
        return $this->carRepository->getAll();
    }

    /**
     * Get car by id.
     *
     * @param $id
     * @return String
     */
    public function getById($id)
    {
        return $this->carRepository->getById($id);
    }

    /**
     * Update car data
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function updateRecord($data, $id)
    {
        $validator = Validator::make($data, [
            'plate_number' => 'required',
            'model' => 'required',
            'color' => 'required',
            'contact_person' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $record = $this->carRepository->update($data, $id);

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Unable to update data');
        }

        DB::commit();

        return $record;

    }

    /**
     * Validate car data.
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function saveRecord($data)
    {
        $validator = Validator::make($data, [
            'plate_number' => 'required',
            'model' => 'required',
            'color' => 'required',
            'contact_person' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->carRepository->save($data);

        return $result;
    }

}
