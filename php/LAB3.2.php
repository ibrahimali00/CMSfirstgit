




<?php


$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'Science'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'AAST'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'AAST'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'Science'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'AAST'],
];

echo "<pre>";
print_r($students);
echo "</pre>";


echo '<P style="font-size:30px;"> APPlication name : PHP class regesteration</P>'.'</br>';

echo "</br>";
echo "</br>";
echo "</br>";


echo '<table border="1">';
echo '<tr><th>Name</th><th>Email</th><th>status</th></tr>';

foreach ($students as $student){

  echo'<tr>';
  foreach ($student as $val){
     echo '<td>'.$val.'</td>';
  }
  echo '</tr>';

}


echo "</table>";
















?>












