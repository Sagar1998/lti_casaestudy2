<?php
$sid=$_POST['Student_Id'];
$sname=$_POST['Student_Name'];
$gender=$_POST['Gender'];
$dob=$_POST['dob'];
$city=$_POST['City'];
$state=$_POST['State'];
$email=$_POST['Email'];
$qual=$_POST['Qualification'];
$stream=$_POST['Stream'];
$d1=date("d-m-Y", strtotime($dob));
if($sid == "" || $sname == "" || $gender == "" || $d1 == "" || $city == "" || $state == "" || $email == "" || $qual == "" || $stream == ""){
  echo "please enter all details";
}
else {
  if (!file_exists('students.csv')) {
    $list = array(
    ['Student Id', 'Student Name', 'Gender', 'DateOfBirth', 'City', 'State', 'Email', 'Qualification', 'Stream'],
    [$sid, $sname, $gender, $d1, $city, $state, $email, $qual, $stream]
);
$fp = fopen('students.csv', 'w');
foreach ($list as $fields) {
    fputcsv($fp, $fields);
}
fclose($fp);
echo "Student added";
echo "<br>";
echo "<a href='index.html'>Go Back</a>";
  }
  else {
    $list = array(
    [$sid, $sname, $gender, $d1, $city, $state, $email, $qual, $stream]
);
$fp = fopen('students.csv', 'a');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}
fclose($fp);
echo "Student added";
echo "<br>";
echo "<a href='index.html'>Go Back</a>";
  }
}
 ?>
