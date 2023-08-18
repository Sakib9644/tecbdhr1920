<?php

class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            echo "Invalid salary value\n";
        }
    }
}

$employee1 = new Employee("John Doe", 50000);
$employee2 = new Employee("Jane Smith", 60000);

echo $employee1->getName() . "'s Salary: $" . $employee1->getSalary() . "\n";
echo $employee2->getName() . "'s Salary: $" . $employee2->getSalary() . "\n";

$employee1->setSalary(55000);
$employee2->setSalary(65000);

echo $employee1->getName() . "'s Updated Salary: $" . $employee1->getSalary() . "\n";
echo $employee2->getName() . "'s Updated Salary: $" . $employee2->getSalary() . "\n";

$employee1->setSalary(-1000);

?>
