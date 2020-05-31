<?php
$age = 34;
$gender = 'X';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 2</title>
</head>
<body>
  <?php
  if ($age > 0 && $age < 120){
    if($gender =='Femme' && $age < 18) {
      ?>
      <p>Vous êtes une femme et vous êtes mineur</p>
      <?php
    }
    else if ($gender =='Femme' && $age >= 18) {
      ?>
      <p>Vous êtes une femme et vous êtes majeure</p>
      <?php
    }
    else if ( $gender =='Homme' && $age >= 18) {
      ?>
      <p>vous êtes un homme et vous êtes majeur</p>
      <?php
    }
    else if ( $gender =='Homme' && $age < 18) {
      ?>
      <p>Vous êtes un homme et vous êtes mineur</p>
      <?php
    }
    else{
      ?>
      <p> La valeur genre saisie n'est pas valide </p>
      <?php
    }
  }
  else{
    ?>
    <p> La valeur age saisie n'est pas valide.</p>
    <?php
  }
  ?>
</body>
</html>
