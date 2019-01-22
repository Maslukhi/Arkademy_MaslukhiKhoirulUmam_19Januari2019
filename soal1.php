<?php

$myObj->name = "MASLUKHI KHOIRUL UMAM";
$myObj->address = "Dsn. Pule Selatan RT. 03 RW. 01 Ds. Pule Kec. Kandat Kab. Kediri";
$myObj->myHobbies = ["cardio-sports"=> "Lari, Berenang, Senam", "athletic-sports" => "Berenang" , "game-sports" => "Sepak Bola"];
$myObj->isMarried = false;
$school = '{"key highSchool": "Mathematic, English, Arabic","key university": "Programming, Database, Framework, etc."}'; 
$skill = JsonToObject($school);

function JsonToObject($school){
	$array = json_decode($school);
	foreach = ($array as $key=>$value){
		$key = strtolower(trim($key));
		$object->$key=$value; 
	}
	return $skill;  
}

$myObj->school = $school; 
$myObj->skill = $skill; 

$myJSON = json_encode($myObj);
echo $myJSON;

?>
