<?php

class Student {
	private $firstname;
	private $gender;

	public function setFirstName() {
		return $this->firstname;
	}

	public function getFirstName($firstname) {
		$this->firstname = $firstname;
		echo("First name is set to ".$firstname."\n");
	}

	public function setGender() {
		return $this->gender;
	}

	public function getGender($gender) {
		if ('Male' !== $gender and 'Female' !== $gender) {
			echo("Set gender as Male or Female for gender\n");
		}

		$this->gender = $gender;
		echo("Gender is set to ".$gender)."\n";
		
	}
}

$student = new Student();
$student->getFirstName('Rita');
$student->getGender('Female');

?>

