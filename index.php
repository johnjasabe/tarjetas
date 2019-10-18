<!DOCTYPE html>  
<html lang="en">  
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Get Screenshot</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>

  </head>
  <body>
    <h1>Hard Coded Screenshot of my Website:</h1>
	
	
	
	<?php 
	/*
		//Declaramos la Url enviada desde un formulario
		$pagina =  "http://gevanapublicidad.com/";
		$URLpagina = "".$pagina."";
		 
		//Llamamos a Google PageSpeed Insights API
		$PagespeedDataGoogle = file_get_contents("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=$URLpagina&screenshot=true");
		 
		//Decodificar datos con JSON
		$PagespeedDataGoogle = json_decode($PagespeedDataGoogle, true);
		 
		//La imagen de la captura de pantalla
		$captura = $PagespeedDataGoogle['screenshot']['data'];
		$captura = str_replace(array('_','-'),array('/','+'),$captura); 
		 
		//Mostramos en el navegador la captura de pantalla
		echo "<center><img src=\"data:image/png;base64,".$captura."\" /></center>";

		file_put_contents("img".'.jpg',$captura);
*/

$result= "<div style='background-color:red'> <H2>imagen dESDE HTML <H2>
	<p>text texto </p>
	</div>";
$name = 'test';
//$result = file_get_contents('http://tinyurl.com/q4smyod'); 
$result = json_decode($result, true);
//$decoded=base64_decode($result['screenshot']['data']);

$data    = str_replace('_','/',$result['screenshot']['data']);
$data    = str_replace('-','+',$data);
$decoded = base64_decode($data);

echo "<center><img src=\"data:image/png;base64,".$decoded."\" /></center>";
file_put_contents($name.'.jpg',$decoded);

	?>
  </body>
  <br>NUEVO<br>
  
  
  
  <link href="css/disco.css" type="text/css" rel="stylesheet">
<div class="container">
<div class="wrapper">
<div class="header">
<div class="dancing_img">
<img src="images/Danc_girl_img.png" />
</div>
<div class="heading_text">
<img src="images/header.jpg" />
</div> 
<div class="steffen_text">Paul Phoenix</div>
<div class="steffen_achieved">Achieved the following in the</div>
<div class="steffen_forget">Dont Forget The Disco Lyrics Quiz</div>
<div class="dancing_box">99%
<span id="dancing">- </span>
<span id="dancing_a">A</span> 
<span id="dancing_d">Magical</span>
<span id="dancing">Musician</span>
<span id="dancing_diva">is </span>
<span id="dancing">Phoenix</span>
</div>
<div class="dancing_img_man">
<img src="images/danc_man_img.png" />
</div>
</div></div>
</div>
 
</html>  