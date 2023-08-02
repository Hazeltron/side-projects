<?php 
$number = 606;

$nameOne = "Ashaun";
$nameTwo = "Kattin";

echo "$number $nameOne $nameTwo";

echo $number . $nameOne . $nameTwo;

$array = [1,2,3,4,5,];

$foods = ["banana", "steak", "hot-dog", "cheese", "bread",];
$randoArray = ["time", 204, "ice", "cat", 356, 2,];

echo $array[3] . $foods[1] . $randoArray[0]; 

foreach ($foods as $food ){
	echo $food;
}

foreach ($randoArray as $random) {
	echo $random;
	// code...
}

for($i = 0; $i <= 20; $i++){
	echo "<li>$i</li>";
}




$bands = ["biggy", "nas", "eminem", "j-cole", "Big-L", "method man",];

foreach($bands as $band){
	echo "<li>$band</li>";
}

$favNumbers = [10, 23, 6, 2, 666, 777, 44, 12,];

foreach($favNumbers as $favNumber){
	if ($favNumber < 20) {
		echo "<li>$favNumber</li>";
	}
}




for($count = 0; $count <= 34; $count++){
	if ($count == 12 or $count == 17 or $count == 23) {
		echo "";

	} else {
		echo "<li>$count</li>";
	}
}

?>