<?php

class Student
{
    public int $code;
    public string $firstname;
    public int $math;
    public int $physical;
    public int $chemistry;


    public function __construct(int $code, string $firstname, int $math, int $physical, int $chemistry)
    {
        $this->code = $code;
        $this->firstname = $firstname;
        $this->math = $math;
        $this->physical = $physical;
        $this->chemistry = $chemistry;
    }


    public function getCode(): int
    {
        return $this->code;
    }


    public function setCode(int $code): void
    {
        $this->code = $code;
    }


    public function getFirstname(): string
    {
        return $this->firstname;
    }


    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }


    public function getMath(): int
    {
        return $this->math;
    }


    public function setMath(int $math): void
    {
        $this->math = $math;
    }


    public function getPhysical(): int
    {
        return $this->physical;
    }


    public function setPhysical(int $physical): void
    {
        $this->physical = $physical;
    }


    public function getChemistry(): int
    {
        return $this->chemistry;
    }


    public function setChemistry(int $chemistry): void
    {
        $this->chemistry = $chemistry;
    }

    public function getMediumScore()
    {
        return ($this->math+$this->physical+$this->chemistry)/3;
    }

}