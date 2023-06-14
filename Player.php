<?php

include ("Role.php");

class Player {

    private string $name;
    private int $age; 
    private int $height; //in cms
    private int $points; //not average, total is always an int
    private int $rebounds;  //same
    private Role $role;

    public function __construct(string $name, int $age, int $height, int $points, int $rebounds, Role $role,){
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
        $this->points = $points;
        $this->rebounds = $rebounds;
        $this->role = $role;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getPoints(): int
    {
        return $this->points;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}

?>