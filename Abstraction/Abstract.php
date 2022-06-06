<?php
//declare base class person as abstract
abstract class Person {
	public $name;
    //use constructor for initilize property declared in class
	public function __construct($name) {
		$this -> name = $name;
	}
    //declaration of method
	abstract public function job() ;
}
class Teacher extends Person {
    //implement abstract method
	public function job()  {
		return "My name is " . $this -> name ." and I am a teacher in HighSchool\n";
	}
}
class Doctor extends Person {
	public function job() {
		return "My name is  " . $this -> name ." and I am a Doctor in AIIMS\n";
	}
}
// class Soldier extends Person {
// 	public function job()  {
// 		return "My Name is " . $this->name." and My job is to protect my country\n";
// 	}
//}
$teacher = new Teacher('Rushi');
echo $teacher -> job();

$doctor = new Doctor('Mr. Joshi');
echo $doctor -> job();

// $soldier = new Soldier('Shreshah');
// echo $soldier -> job();
?>