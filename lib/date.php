<?php
//de huidige systeemdatumtijd
$now = time();
print "De huidige timestamp is $now<br>";

//een timestamp maken voor een opgegeven datumtijd
$now = mktime(14,30,0,3,21,2019);
var_dump($now);

//de huidige datum
$strdate = date("d/m/Y", $now);
print "De huidige datum is $strdate<br>";

//de actuele tijd
$strtime = date("H:i:s", $now);
print "De actuele tijd is $strtime<br>";

//een array maken met alle mogelijke info over de huidige systeemdatumtijd
//$mydate = getdate($now);
//var_dump($mydate);

//twee weken later
$ts = mktime(14,30,0,3,21+14,2019);
$strdate = date("l d/m/Y H:i:s", $ts);
var_dump($strdate);

//laatste dag vorige maand
$ts = mktime(14,30,0,3,0,2019);
$strdate = date("l d/m/Y H:i:s", $ts);
var_dump($strdate);

//huidige datumtijd
$d = new DateTime( 'NOW', new DateTimeZone('Europe/Brussels') );
print $d->format('Y-m-d H:i:s') . "<br>";

//3 maanden verder
$d->add( new DateInterval('P3M'));
print $d->format('Y-m-d H:i:s') . "<br>";

//1 dag terug
$d->sub( new DateInterval('P1D'));
print $d->format('Y-m-d H:i:s') . "<br>";

//laatste dag vd maand
$d->modify('last day of this month');
echo $d->format('Y-m-d H:i:s') . "<br>";





