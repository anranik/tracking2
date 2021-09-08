<?php

namespace App\Repositories;

use App\Models\Car;

class CarRepository
{
    /**
     * @var Car
     */
    protected $car;

    /**
     * CarRepository constructor.
     *
     * @param Car $car
     */
    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    /**
     * Get all cars.
     *
     * @return Car $car
     */
    public function getAll()
    {
        return $this->car
            ->get();
    }

    /**
     * Get car by id
     *
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->car
            ->where('id', $id)
            ->get();
    }

    /**
     * Save Car
     *
     * @param $data
     * @return Car
     */
    public function save($data)
    {
        $car = new $this->car;

        $car->plate_number=$data['plate_number'];
        $car->model=$data['model'];
        $car->color=$data['color'];
        $car->description=$data['description'];
        $car->contact_person=$data['contact_person'];
        $car->type=$data['type'];


        $car->save();

        return $car->fresh();
    }

    /**
     * Update Car
     *
     * @param $data
     * @return Car
     */
    public function update($data, $id)
    {

        $car = $this->$car->find($id);

        $car->plate_number=$data['plate_number'];
        $car->model=$data['model'];
        $car->color=$data['color'];
        $car->description=$data['description'];
        $car->contact_person=$data['contact_person'];
        $car->type=$data['type'];

        $car->update();

        return $car;
    }

    /**
     * Update Car
     *
     * @param $data
     * @return Car
     */
    public function delete($id)
    {

        $car = $this->$car->find($id);
        $car->delete();

        return $car;
    }

}
