<?php
include_once 'connexion.php' ; 
//include_once 'sign-up.php' ;  
$name = $_POST['nomEtulisateur'] ; 
$password = $_POST['motDePasse'] ; 
$v=0;

//$result= "INSERT INTO  sign_in (NAME,PASS_WORD) VALUES ('$name' ,'$password' );";

if ($cnx->connect_error) {
    die("Connection failed: " . $cnx->connect_error);
  }
  
  $sql = "SELECT * FROM sign_up";
  $result = $cnx->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
if($name==$row['NOM'] && $password==$row['MOTDEPASSE']) $v=1;
if(!$v)   {
  echo "vous n'avez pas un compte !!!!".'<br>';
  echo '<a href="index1.html">sign-up</a>'.'<br>';
  exit;
}
$sql = "SELECT * FROM sign_up";
$result = $cnx->query($sql);
  echo '<table border="10">
  <tr>
  <td> ID </td> 
  <td> CNE </td>
  <td> NOM </td>
  <td> PRENOM </td>
  <td> ADRESSE </td>
  <td> VILLE </td>
  <td> E-MAIL </td>
  <td> PHOTO </td>
  <td> MOT DE PASSE </td>
  </tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) { 
      if($row["ETAT"]){
     /*  echo '<img src=" '. $row["PHOTO"] .'" />'.'<br>'; 
      echo "ID:  " . $row['ID']. "     CNE    : " . $row["CNE"]. "   
        NOM:    " . $row["NOM"]. "     PRENOM:   " . $row["PRENOM"]. " 
           ADRESSE:    " . $row["ADRESSE"]. "    VILLE:   " . $row["VILLE"]. "  
              E-MAIL:     " . $row["EMAIL"]. "     MOT DE PASSE :   " . $row["MOTDEPASSE"]. "<br>";
    // echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';*/
    echo  '<tr>'
    .'<td>'. $row['ID']        .'</td>'
    .'<td>'. $row['CNE']       .'</td>'
    .'<td>'. $row['CNE']       .'</td>'
    .'<td>'. $row['NOM']       .'</td>'
    .'<td>'. $row['PRENOM']    .'</td>'
    .'<td>'. $row['ADRESSE']   .'</td>'
    .'<td>'. $row['VILLE']     .'</td>'
    .'<td>'. $row['EMAIL']     .'</td>'
    .'<td>'. '<img src="img/'.$row['PHOTO'].'" />' .'</td>'
    .'<td>'. $row['MOTDEPASSE'].'</td>'
    .'</tr>';
    }}
  } else {
    echo "vous n'avez pas un compte !!!!".'<br>';
  echo '<a href="index1.html">sign-up</a>'.'<br>';
  exit;
    //echo "0 results";
  }
  echo '</table>'.'<br>';
  $cnx->close();


/*
$nom = $dbname->query('SELECT NOM FROM sign_up');

echo $nom;
$sql="UPDATE 'student' SET 'NAME' "
$result = mysqli_query ($cnx,$sql) ; 
echo $result;*/
echo '<form action="modifier.html" method="post">
<button class="register"  type="submit" name="register" value="2">modifier</button>
</form>';


/*   <form action="index1.html" method="post">
<button class="register"  type="submit" name="register" value="2">sign-up</button>
</form>*/ 



?>







