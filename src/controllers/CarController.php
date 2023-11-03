<?php
namespace Atteneri\Cars\Controllers;

use Atteneri\Cars\Models\Car;

class CarController {

  public function __construct()
  {
   
  }

  public function list() {
    //return all cars 
    $listCars = Car::getAll();

    require "../src/views/list.php";
  }

  public function show($id) {
    //return the car by id
    $car = Car::find($id);
    if($car){
    require "../src/views/show.php";
    } else {
      echo "Car not found";
    }

  }

  public function delete($id){
    Car::delete($id);
    $this->list();
  }

  public function create(){ //$id,$make,$model,$year,$color
    // $car = new Car($id,$make,$model,$year,$color);
    $car = new Car("123456789ABC","Fiat","Picanto",2010,"Black");
    Car::create($car);
  }

}