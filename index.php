<?php 

require_once './vendor/autoload.php';


$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader);

$hobbys=array(
	'soccer',
	'basketball',
	'video game',
	'chiji'
);
$basicInfo=array(
	'name'=>'Ruohao Wei',
	'perferred name'=>'Nero',
	'Tele'=>'8193284081',
	'address'=>'1109-1241 kilborn ave',
	'Postal code'=>'K1H1A5',
	'E-mail'=>'wrh1102@gmail.com',
	'Github username'=>'exia1102',

);

echo $twig->render('singlepage.html.twig', //templete file
	array(//data array
		'hobbys'=>$hobbys,
		'basicinformation'=>$basicInfo
	)
);



 ?>