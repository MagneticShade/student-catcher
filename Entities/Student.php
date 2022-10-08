<?php

namespace College\Entities;
use DateTime;
class Student extends Human
{
    public function __construct(

        private Human $human,private string $group,private DateTime $adm_year,private Curator $curator,string $firstName, string $lastName, DateTime $birthDate, string $gender){

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->gender = $gender;
        parent::__construct($firstName,$lastName,$birthDate,$gender);
    }
    public function getHuman():Human{
        return $this->human;
    }
    public function getGroup():string{
        return $this->group;
    }
    public function getCurator():Curator{
        return $this->curator;
    }
    public function getAdmYear():DateTime
{
        return $this->adm_year;
}
}