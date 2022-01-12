<?php
include_once 'connexion.php' ;  
$nom= $_POST['nom1'] ; 
$prenom=$_POST['prenom1'] ; 
$cne=$_POST['cne1'] ; 
$adresse=$_POST['adresse1'] ; 
$ville=$_POST['ville1'] ; 
$email=$_POST['email1'] ; 
$photo=$_POST['photo1'] ; 
$motdepasse=$_POST['motdepasse1'] ; 
$motdepasse1=$_POST['motdepasse11'] ; 
$register=$_POST['register1'] ; 
$etat=0;
$a=0;
//echo !$a.'<br>';
if($motdepasse!=$motdepasse1 ){ echo 'le mot de passe est incorrecte !!!!!!!!!!!!!!'.'<br>'; 
       echo "<a href='index1.html' >ressayer</a> ".'<br>';  $a=1; }
if(!$a ) 
{$etat=1;
    $sql ="INSERT INTO  sign_up  (  CNE, NOM, PRENOM, ADRESSE, VILLE, EMAIL, PHOTO, MOTDEPASSE, ETAT)
    VALUES ('$cne','$nom','$prenom','$adresse','$ville','$email','$photo','$motdepasse','$etat');";
   $result = mysqli_query ($cnx,$sql) ; 
   echo 'vous avez reussit le sign-up .'.'<br>';
   echo 'prière de <a href="index.html">sign-in</a>'.'<br>';
   }
  // echo $photo.'<br>';
  // "ALTER TABLE sign_up DROP PRIMARY KEY, ADD PRIMARY KEY(CNE);"
/*$result= "INSERT INTO student(NAME,PASS_WORD) VALUES ('$name' ,'$password' );";
$sql="UPDATE ' sign-up ' SET 'NAME' "
$result = mysqli_query ($cnx,$sql) ; */
//echo $photo.'<br>';

?>


