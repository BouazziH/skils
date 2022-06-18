<h1>Login</h1>
<?php

$servname = 'localhost';
$dbname = 'bd1';
$user = 'root';
$pass = '';

try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  /*   
    $requette = "select id,email from utilisateur ";
    $select = $requette;
    $dbco->exec($select);
   
  $html = '<table bordure=1>
  <tr>
  <td>Id</td>
   <td>Email</td>
  </tr>';
foreach ($select as $row) 
{
    $html .= '<tr>';
    $html .='<td>' .$row['id']. '</td>';
    $html .='<td>'. $row['email'].'</td>';
    $html .='</tr>';

}

    $html .='</table>'; */
    $sth = $dbco->prepare("SELECT id, email FROM utilisateur where id =1");
                $sth->execute();
                /*avec le nom des colonnes sélectionnées en clefs*/
                $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
                
                /*print_r permet un affichage lisible des résultats,
                 *<pre> rend le tout un peu plus lisible*/
                echo '<pre>';
                print_r($resultat);
                echo '</pre>';
                $html = '<table border=1>
                <tr>
                <td>Id</td>
                 <td>Email</td>
                </tr>';
              foreach ($resultat as $row) 
              {
                  $html .= '<tr>';
                  $html .= '<td>' .$row['id']. '</td>';
                  $html .= '<td>'. $row['email'].'</td>';
                  $html .= '</tr>';
              
              }
              
                  $html .='</table>'; 
echo $html;
}

catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}
       
include './includes/frmLogin.php';

?>