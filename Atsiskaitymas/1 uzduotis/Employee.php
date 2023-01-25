<?php

class Employee
{
const EMPLOYEE_TYPE = 1;
    public string $name;
    protected float $salary;
    protected string $experience;
    private int $id;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->id = rand();
        $this->salary = $salary;
    }

    public function setExperience($experienceFromParam): void
    {
        $this->experience = $experienceFromParam;
    }
    public function getExperience(): string
    {
        return $this->experience;
    }

    public function getId(): int
    {
        return $this->id;
}

    public function calculateSalary(): float
    {
        return $this->salary;
    }

    public function __toString(): string
    {
        return 'Darbuotojas ' . $this->getId().' : ' .$this->name .' - '.$this->salary.' EUR';
    }

    public function __clone() {
        $this->id = 0;
    }

    public static function getTypeDescription(): string
    {
       return "Darbuotojo tipas " . self::EMPLOYEE_TYPE;
    }
}
