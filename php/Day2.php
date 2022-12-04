<?php 
/////////////////////////////////////////////////////////////////////////////////////////////
// LAB 2
////////////////////////////////////////////////////////////////////////////
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo'<br>';

//////////////////////////////////////////////////////////////

$numbers = array();
$numbers[1] = 45;
$numbers[0] = 12;
$numbers[3] = 25;
$numbers[2] = 10;

echo "<pre>";
print_r( $numbers).'<br>';
echo'<br>';

$sum = 0;

foreach($numbers as $value ){
 $sum = $sum + $value;
};

echo "the sum of the values is $sum ";
echo"<br>";
$count =  count($numbers); 

$avg  = $sum / $count;
echo"<br>";

echo "the average for array is $avg";

rsort($numbers);
echo"<br>";
echo "<pre>";
print_r( $numbers).'<br>';
echo'<br>';

/////////////////////////////////////////////////////////////////////

$ages = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);


echo "<pre>";
print_r( $ages).'<br>';
echo'<br>';
// ascending order sort by value
asort($ages); 
echo "<pre>";
print_r( $ages).'<br>';
echo'<br>';

//ascending order sort by Key
ksort($ages);
echo "<pre>";
print_r( $ages).'<br>';
echo'<br>';


//descending order sorting by Value
arsort($ages);
echo "<pre>";
print_r( $ages).'<br>';
echo'<br>';

//descending order sorting by Key

krsort($ages);
echo "<pre>";
print_r( $ages).'<br>';
echo'<br>';

?>



