<?php
$host='localhost';
$port='80';
$dbname='util_bank_data';
$user='root';
$pwd='';

   try{
    $newBD=new PDO('mysql:host=$host;port=$port;dbname=$dbname' ,$user,$pwd);
    echo "Connexion etablie";
   }  catch(PDOException $e){
    die('Erreur:'.$e->getMessage();)
   }
   
   if (isset($_POST['nom'])&&
       isset($_POST['email'])&&
       isset($_POST['address'])&&
       isset($_POST['city'])&&
       isset($_POST['country'])&&
       isset($_POST['tel'])&&
       isset($_POST['name_card'])&&
       isset($_POST['number_card'])&&
       isset($_POST['month'])&&
       isset($_POST['year'])&&
       isset($_POST['cvv'])){
          $insertion=$newBD->prepare('INSER INTO data VALUES(NULL,:nom,:email,:address,:city,:country,:tel,:name_card,:number_card,:month,:year,:cvv)');
          $insertion->bindValue(':nom',$_POST['nom']);
          $insertion->bindValue(':email',$_POST['email']);
          $insertion->bindValue(':address',$_POST['address']);
          $insertion->bindValue(':city',$_POST['city']);
          $insertion->bindValue(':country',$_POST['country']);
          $insertion->bindValue(':tel',$_POST['tel']);
          $insertion->bindValue(':name_card',$_POST['name_card']);
          $insertion->bindValue(':number_card',$_POST['number_card']);
          $insertion->bindValue(':month',$_POST['month']);
          $insertion->bindValue(':year',$_POST['year']);
          $insertion->bindValue(':cvv',$_POST['cvv']);
          $verification=$insertion->execute();
          if ($verification) {
            echo "Insertion reussie";
          }elese{
            echo"Echec d'insertion";
          }
 
 }else{
    echo"Une variable n'est pas declare et ou est null";
 }

?>