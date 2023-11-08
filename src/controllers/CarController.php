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
    require "../src/views/create.php";
    
  }

  public function post($data) {
    $car = new Car(
      $data["id"],
      $data["make"],
      $data["model"],
      $data["year"],
      $data["color"]
    );

    Car::create($car);
    $this->list();

  }

  public function edit($id) {
    $car = Car::find($id);
    require "../src/views/edit.php";
  }

}