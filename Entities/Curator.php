<?php

namespace College\Entities;

use DateTime;

class Curator extends Human
{
public function __construct(string $firstName, string $lastName, DateTime $birthDate, string $gender)
{
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->birthDate = $birthDate;
    $this->gender = $gender;
    parent::__construct($firstName,$lastName,$birthDate,$gender);
}

}