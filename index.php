<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>XMPP/Jabber Server Liste | Datenschutzhelden.org</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/footable.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
 include ("hitcounter.php");
?>
	<h1>XMPP/Jabber Server Liste <sub>handverlesen mit <span class="glyphicon glyphicon-heart"></span> </sub></h1>
	<h4>ein <a href="https://datenschutzhelden.org/2017/07/12/daten-sparsame-xmpp-server/" target="_blank">datenschutzhelden.org</a> Projekt</h4>
	<hr>
<?php
 echo file_get_contents("datatable.html");
?>
<div>
<b>Footnotes</b><br>
[1] Bei Registrierung wird die IP-Adresse zur Spam-Erkennung für 3 Tage (Out-Band) respektive 21 Tage (In-Band) gespeichert.<br>
[2] Bei der Out-Band Registrierung wird die IP-Adresse zur Spam-Erkennung für 1 Monat gespeichert.
</div>
<br>
<div>
Weitere Informationen zu dieser Liste findet ihr in unserem zugehörigen Artikel auf <a href="https://datenschutzhelden.org/2017/07/12/daten-sparsame-xmpp-server/" target="_blank">datenschutzhelden.org</a>
</div>
<div>
Betreibt ihr euren eigenen Server, oder kennt ihr einen Server den wir noch auf die Liste setzen sollen? Kontaktiert uns: <a href="mailto:thorsten@datenschutzhelden.org">thorsten@datenschutzhelden.org</a></div>
<div align="right">
	Letzte Aktualisierung: 17.08.2017
</div>
<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/footable.min.js"></script> 

<script>
jQuery(function($){
	$('.table').footable();
});
</script>

</body>
</html>
