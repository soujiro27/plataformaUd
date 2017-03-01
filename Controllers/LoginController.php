<?php namespace Controllers;


class LoginController
{
	
	private $email;
	private $password;

	public function loginPerfil($email,$password){
		$this->email=$email;
		$this->password=$password;
		echo $this->email.' '.$this->password;
	}
}


?>