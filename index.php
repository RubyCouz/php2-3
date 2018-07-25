<?php
$age = 34;
$gender = 'homme';
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice 3</title>
   </head>
   <body>
     <p>
<?php
if ($age >= 18 && $gender == 'homme')
{
  echo 'Vous êtes un homme et vous êtes majeur';
} elseif ($age < 18 && $gender == 'homme')
{
echo 'Vous êtes un homme et vous êtes mineur';  // code...
} elseif ($age < 18 && $gender == 'femme')
 {
echo 'Vous êtes une femme et vous êtes mineur';  // code...
} elseif ($age >= 18 && $gender == 'femme')
echo 'Vous êtes une femme et vous êtes majeur';
 ?>
     </p>

   </body>
 </html>
