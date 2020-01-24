<?php   
//string
$email = "zero@gmail.com";
//int
$age = 18;
//height
$height = 1.73;
//male é um boolean
$male = true;
//comparação maior
$allowed1 = $age > 18;
//comparação maior ou igual
$allowed2 = $age >= 18;
//comparação menor
$allowed3 = $age < 18;
//comparação menor ou igual
$allowed4 = $age <= 18;
// comparação igual
$compare = (10 == 10);
//comparação identico
$compare2 = 10 === 10;
//resultado 1 = 14
$result1 = 5 + 7 * 2 / 2 + 3 - 1;
//resultado 2
$result2 = (5 + 7) * 2 / (2 + 3 - 1);
//or ou || (um o outro true)
$sei =  $age || 18;
// && ou ande (todos tem que ser true ou da false)
$la =  $age && 18;
//Array
$results = array();
$results[] = $email;
$results[] = $age;
$results[] = $height;
$results[] = $male;
$results[] = $allowed1;
$results[] = $allowed2;
$results[] = $allowed3;
$results[] = $allowed4;
$results[] = $compare;
$results[] = $compare2;
$results[] = $result1;
$results[] = $result2;
$results[] = $sei;
$results[] = $la;
echo "<pre>";
var_dump($results);
echo "</pre>";
?>

