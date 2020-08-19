<?php
if(isset($_POST['email']))

$header="MIME-Version: 1.0\r\n";
$header.='From:"CabinetDigital.com"<cabinetdigital2020@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='<h1>Message envoyé depuis la page Recrutement de CabinetDigital.com</h1>
<p><b>Nom Complet: </b>' . $_POST['nom'] .' '. $_POST['prenom']  . '<br>
<b>Email : </b>' . $_POST['email'] . '<br>
<b>Poste : </b>' . $_POST['poste'] . '<br>
<b>Date de disponibilité: : </b>' . $_POST['date'] . '<br>
<b>Statut d\'emploi actuel : </b>' . $_POST['statut'] . '<br>
<b>Cv url : </b>' . $_POST['cv'] . '</p>';

mail("youssrafadlaoui1@gmail.com", "Demande de recrutement" , $message, $header);
?>