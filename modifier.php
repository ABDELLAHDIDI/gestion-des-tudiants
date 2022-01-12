<?php
include_once 'connexion.php' ; 


$id=$_POST['id1'];
$nom= $_POST['nom1'] ; 
$prenom=$_POST['prenom1'] ; 
$cne=$_POST['cne1'] ; 
$adresse=$_POST['adresse1'] ; 
$ville=$_POST['ville1'] ; 
$email=$_POST['email1'] ; 
$photo=$_POST['photo1'] ; 
$motdepasse=$_POST['motdepasse1'] ; 
$motdepasse1=$_POST['motdepasse11'] ; 
//$register=$_POST['register1'] ; 
$etat=0;
$a=0;
if($motdepasse!=$motdepasse1 ){ echo 'le mot de passe est incorrecte !!!!!!!!!!!!!!'.'<br>'; 
    echo "<a href='index1.html' >ressayer</a> ".'<br>';  $a=1; }
if(!$a){
if(isset($nom)) {   
    if (!$cnx) {
        die("Connection failed: " . mysqli_connect_error());
      }
     
      $sql = "  UPDATE sign_up SET NOM='$nom' WHERE id=$id ";
      
   if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
    // mysqli_close($cnx);
    }
if(isset($prenom)) {  
      $sql = "UPDATE sign_up SET PRENOM='$prenom' WHERE id=$id";
      if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
    // mysqli_close($cnx);
  }
if(isset($cne)) { 
      $sql = "UPDATE sign_up SET CNE='$cne' WHERE id=$id"; 
        if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
    // mysqli_close($cnx);
   }
if(isset($ville)) {  
      $sql = "UPDATE sign_up SET VILLE='$ville' WHERE id=$id";
      if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
   // mysqli_close($cnx);
  }
if(isset($adresse)) {  
      $sql = "UPDATE sign_up SET ADRESSE='$adresse' WHERE id=$id";
      if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
    // mysqli_close($cnx);
  }
if(isset($email)) {  
      $sql = "UPDATE sign_up SET EMAIL='$email' WHERE id=$id";
      if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
    // mysqli_close($cnx);
  }
if(isset($photo)) {   
      $sql = "UPDATE sign_up SET PHOTO='$photo' WHERE id=$id";
      if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
   //  mysqli_close($cnx);
  }
if(isset($motdepasse)) {  
      $sql = "UPDATE sign_up SET MOTDEPASSE='$motdepasse' WHERE id=$id";
      if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
  //   mysqli_close($cnx);
      
  }
}



?>