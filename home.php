<?php
$username = 'Mirjam Laanejõe
$fulltimenow = date('d.m.Y


//vaame semestri kulgu
$semesterstart = new DateTime('2020-8-31'); 
$semesterend = new DateTime('2020-12-13'); 
//slgitame välje nende vahe ehk erinevuse
$semesterduration = $semesterstart->diff($semesternd);
//leiame selle päevade arvuna
$semesterdurationdays = $semesterduration->format('%r%a');
//tänane päevade
$today = new DateTime('now');

//ig($fromsemesterstartdays < 0){semester pole praegu alanud}
?>


<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title>Mirjam</title>

</head>
<body>
  <h1>Mirjam Laanejõe</h1>
  <p>See veebileht on loodud õppetöö käigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <p> Leht on loodud veebiproge kursuse raames <a href="http://www.tlu.ee">Tallinna Ülikoolis </a>.</p>

</body>
</html>