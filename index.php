<?php  
require 'vendor/autoload.php';
require 'vendor/slim/slim/Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader /* ,array(twig config) */);

//$loginController=new \Controllers\LoginController;
$loginModel= new \Models\Consultas;


$app=new \Slim\Slim(array(
		'view' => new \Slim\Views\Twig(),
		'templates' => './templates/'
		));



$app->get('/',function() use ($app,$twig){
	echo $twig->render('login.php',array() );
});


$app->post('/registro',function() use ($app, $loginModel){
	$email = $app->request->post('email');
	$password=$app->request->post('password');
	//$loginController->loginPerfil($email,$password);
	$loginModel->works();
});

$app->run();


?>