<?php

class CarController {

  private $cars = [];

  public function __construct(){
    // $this->cars[] = new Car("1234","Ford","Kuga",2021,"blue");
    // $this->cars[] = new Car("3546","Seat","Cordoba",2002,"white");
    // $this->cars[] = new Car("2634","Seat","Ibiza",2019,"red");
    $json = file_get_contents("../data/cars.json");
    $carsJSON = json_decode($json);
    //$this->cars = $carsJSON;
    foreach($carsJSON as $carJSON){
      $this->cars[] = new Car($carJSON->id,$carJSON->make,$carJSON->model,$carJSON->year,$carJSON->color);

    }
  }

  public function list() {
    //return all cars 
    $listCars = $this->cars;

    require "../src/views/list.php";
  }

  public function show($id) {
    //return the car by id
    $carsFilter =  array_filter($this->cars, fn($car) => $car->id == $id);
    if(sizeof($carsFilter) > 0){
      $car = array_pop($carsFilter);
    require "../src/views/show.php";
    } else {
      echo "Car not found";
    }

  }
}