<?php
// Creat a EMPLOYEES DETAILS

class EMPLOYEES
{
    public $name, $empcode, $phone, $salary, $location;
    function __construct($name, $empcode, $phone, $salary)
    {
        $this->name = $name;
        $this->empcode = $empcode;
        $this->phone = $phone;
        $this->salary = $salary;
    }
    function show()
    {
        echo "The Name Of Employee. $this->name.<br>
        The EmployeeCode Of Employee. $this->empcode.<br>
        The Phone no Of Employee. $this->phone.<br>
        The Salary Of Employee. $this->salary.<br>";
    }
}
class worker extends EMPLOYEES
{
    public $jobtitle, $incentive;
    public function worker($location)
    {
        $this->location = $location;
        if ($this->location == "office") {
            $this->salary = 5000;
        } elseif ($this->location == "home") {
            $this->salary = 6500;
        } elseif ($this->location == "outdoor") {
            $this->salary = 7000;
        }
        // else {
        //     echo "PLEASE CONFERM YOUR WORK LOCATION";
        // }
        $this->incentive = $this->salary + (10 / 100 * $this->salary);
        echo   "<h1>Details of worker.</h1>";
        echo "The Name Of Employee. $this->name.<br>
        The EmployeeCode Of Employee. $this->empcode.<br>
        The Phone no Of Employee. $this->phone.<br>
        The Salary Of Employee.  $this->incentive.<br>";
    }
}

class carPanter extends worker
{
    public  $incentive;
    public function carpenter()
    {
        $this->incentive = $this->salary + (12 / 100 * $this->salary);
        echo   "<h1>Details of carpainter.</h1>";
        echo "The Name Of Employee. $this->name.<br>
        The EmployeeCode Of Employee. $this->empcode.<br>
        The Phone no Of Employee. $this->phone.<br>
        The Salary Of Employee.  $this->incentive.<br>";
    }
}
class marKeter extends carPanter
{
    public $sale;
    function marketer($sale)
    {
        $this->sale = $sale;
        $this->sale =  ceil($this->sale /  10);
        // $this->incentive = $this->salary + ($this->salary / $this->sale);
        $this->incentive = $this->salary + ($this->sale / 100 * $this->salary);

        echo   "<h1>Details of Marketer.</h1>";
        echo "The Name Of Employee. $this->name.<br>
        The EmployeeCode Of Employee. $this->empcode.<br>
        The Phone no Of Employee. $this->phone.<br>
        The Salary Of Employee.   $this->incentive.<br>";
    }
}
$emp = new EMPLOYEES('Bikram', 01, 543131313, 10000);
$emp->show();
$work = new worker('aman', 02, 543131313, 10000);
$work->worker("office");
$carp = new carPanter('raman', 03, 543131313, 10000);
$carp->carpenter();
$mark = new marKeter('shubam', 04, 543131313, 10000);
$mark->marketer(50);
