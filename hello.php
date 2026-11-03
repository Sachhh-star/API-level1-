<?php 
// send JSON back
header('classroom:MBO4-A-klas');
// this will be Pretty print on the top of Chrome
header('Content-Type:application/json');
$name = 'Beam';
$age = 20;
$study = 'Software Engineer';
$words = ["Name" => $name, "Age" => $age, "Study" => $study, "Time" =>date('H:i:s')];
echo json_encode($words);
