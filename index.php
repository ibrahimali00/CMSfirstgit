<?php 
/////////////////////////////////////////////////////////////////////////////////////////////////
/*  lAB 1 */
////////////////////////////////////////////////////////////////////////////////////////////
echo(phpinfo());

/////////////////////////////////////////////////////////////////////////////////
define("WEBSITE_NAME","IBRAHIM ALI");
echo(WEBSITE_NAME);
/////////////////////////////////////////////////////////////////////////////
// echo "<pre>";
// print_r($_SERVER); 
// echo "<pre>";
echo $_SERVER['SERVER_ADDR']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['SCRIPT_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
//////////////////////////////////////////////////////////////////////////////
$age = "10";

switch ($age) {
  case $age<5 :
    echo "Stay at home";
    break;
  case $age=5:
    echo "Go to Kindergarden";
    break;
  case $age >6 and $age <12:
    echo "Go to grade : XXX";
    break;
  default:
    echo "Do Nothing";
}

?>



