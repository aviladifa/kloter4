<?php
	$name = "Avila Difa Adhiguna";
	echo "<br/> Name	: $name";

	$age = 18;
	echo "<br/> Age	: $age";

	$address = "Pamulang";
	echo "<br/> Address	: $address";

	$hobbies = array('Futsal','Basket','Game');
	echo "<br/> Hobbies  : $hobbies[1]"; 

	$yes = true;
	$no = false;
	echo "<br/> Is Married  : $no";

	$school = array ("in : 2007, out : 2013, SD Muhammdiyah","in : 2013, out : 2016, MTsN 3 Jaksel","in : 2016, out :2019, SMK Bina Informatika");
	echo "<br/> List of School :<br/>";
 
		foreach ($school as $d) {
			 
		    echo  $d."<br/>";
		}
	

		





?>