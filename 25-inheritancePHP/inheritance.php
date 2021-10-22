<?php

class User
{
    protected $name;
    protected $age;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getAge():int
    {
        return $this->age;
    }
}

class Worker extends User
{
    private $salary;

    public function setSalary(int $salary)
    {
         $this->salary = $salary;
    }

    public function getSalary():int
    {
        return $this->salary;
    }

}

class Student extends User
{
    private $scholarship;
    private $course;

    public function setScholarship(int $scholarship)
    {
        $this->scholarship = $scholarship;
    }
    public function getScholarship():int
    {
        return $this->scholarship;
    }

    public function setCourse(int $course)
    {
        $this->course = $course;
    }
    public function getCourse():int
    {
        return $this->course;
    }
}

class Driver extends Worker
{
    private $experience;
    private $category;

    public function setExperience(int $experience)
    {
        $this->experience = $experience;
    }

    public function getExperience():string
    {
        return $this->experience;
    }


    /**
     * @throws Exception
     */

    public function setCategory(string $category)
    {
        if ($this->category ='A' ||  $this->category ='B' || $this->category ='C'){
            $this->category = $category;
        } else {
        throw new Exception("Введена неверная категория");
        }
    }
    public function getCategory():string
    {
        return $this->category;
    }

}

$ivan = new Worker();
$ivan->setName('Иван');
$ivan->setAge(25);
$ivan->setSalary(1000);

$vasya = new Worker();
$vasya->setName('Иван');
$vasya->setAge(25);
$vasya->setSalary(2000);

echo $vasya->getSalary() - $ivan->getSalary();