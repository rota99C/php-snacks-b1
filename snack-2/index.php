<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi
che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
//Passare come parametri GET name, mail e age
 $Name = $_GET['3'];
 $Mail = $_GET['john.doe@example.com'];
 $Age = $_GET['age'];


 //che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
 if ((strlen($Name) > 3) &&
 //https://www.w3schools.com/php/filter_validate_email.asp
     filter_var($Mail, FILTER_VALIDATE_EMAIL) &&
//https://www.w3schools.com/php/filter_validate_int.asp

     filter_var($Age, FILTER_VALIDATE_INT)) {
?>
   <p>
     Accesso riuscito
   </p>
<?php } else { ?>
   <p>
     Accesso negato
   </p>
<?php } ?>