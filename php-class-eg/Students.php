<?php

class Students{

public function getStudentFirstName(){

    $studentFN = array("Dale", "Harry", "Shelly", "Bobby",
			"Donna", "Audrey", "James", "Lucy", "Tommy",
			"Andy", "John");
                        
    return $studentFN;

}

    public function getStudentLastName(){

        $studentLN = array("Cooper", "Truman", "Johnson", "Briggs",
			"Hayward", "Horne", "Hurley", "Moran", "Hill",
			"Brennan", "Smith");
                        
        return $studentLN;

}

    public function getStudentNames(){
	
	$studentNames = "Dale Cooper, Harry Truman, Shelly Johnson, " .
			"Bobby Briggs, Donna Hayward, Audrey Horne, " .
			"James Hurley, Lucy Moran, Tommy Hill, " .
			"Andy Brennan, John Smith";
			
	return $studentNames;
    }

}

?>